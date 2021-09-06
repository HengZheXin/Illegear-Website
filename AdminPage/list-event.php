<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="listevent.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>




<body>



<div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <a href="index.php"><div class="logo_name">IGS Society</div></a>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="userProfile.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="add-event.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Events</span>
       </a>
       <span class="tooltip">Events</span>
     </li>
     <li>
      <a href="inquires.php">
        <i class='bx bx-chat' ></i>
        <span class="links_name">Inquires</span>
      </a>
      <span class="tooltip">Inquires</span>
    </li>
     <li>
       <a href="eventParticipants.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Event Participants</span>
       </a>
       <span class="tooltip">Event Participants</span>
     </li>

     <li class="profile">
         <div class="profile-details">
           <img class="adminlogo" src="SmallLogo.png" alt="profileImg">
           <div class="name_job">
             <div class="name">IGS Society</div>
             <div class="job">Admin Panel</div>
           </div>
         </div>
         <div>
             <a href="../Home/home.php"><i class='bx bx-log-out' id="log_out"></i></a>
         </div>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">List Events<br>
    <hr class="hr-s3"/></div>

    <?php
      $PAGE_TITLE = 'List Events';
    ?>

<div class="align1">
    
    <form action="" method="post">

    <?php
    require_once('includes/helper.php');
    error_reporting(E_ALL ^ E_NOTICE);


    // Multiple deletion 
    if (isset($_POST['delete'])) // If "delete" button is clicked.
    {
        $checked = $_POST['checked'];
        // NOTE:
        // -----
        // All checkboxes are named as "checked[]" value their value set to
        // the respective EventID. For such, $checked is an array containing
        // all of the selected EventID.

        if (!empty($checked)) // If at least 1 checkbox is checked.
        {
            $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Real escape all EventID.
            foreach ($checked as $value)
            {
                $escaped[] = $con->real_escape_string($value);
            }

            // SQL with WHERE field IN (...) clause.
            $sql = "DELETE FROM Event WHERE EventID IN ('" .
                   implode("','", $escaped) . "')";

            if ($con->query($sql))
            {
                printf('
                    <div class="info">
                    <strong>%d</strong> record(s) has been deleted.
                    </div>',
                    $con->affected_rows);
            }

            $con->close();
        }
        elseif(empty($checked)){
          printf('
                <div class="info">
                No records has been selected.
                </div>');
        }
    }
    ///////////////////////////////////////////////////////////////////////////
    
    // Array of actual table field names and their display names.
    $headers = array(
        'EventID'   => 'Event ID',
        'EventName' => 'Event Name',
        'EventType' => 'Event Type',
        'Date'      => 'Date',
        'Image'     => 'Image',
        'Seats'     => 'Seats',
        'Description' => 'Description'

    );

    // Validate sort, order and filter.
    if(!isset($_GET['sort']))
    {
        $sort = 'EventID';
    }
    
    else
    {
        $sort    = (array_key_exists($_GET['sort'], $headers) ? $_GET['sort'] : 'EventID');
    }
    
    if(!isset($_GET['order']))
    {
        $order = 'ASC';
    }
    
    else
    {    
        $order   = ($_GET['order'] == 'DESC' ? 'DESC' : 'ASC');
    }
    
    if(!isset($_GET['eventtype']))
    {
        $eventtype = '%';
    }
    
    else
    {
        $eventtype = (array_key_exists($_GET['eventtype'], $EVENTTYPES) ? $_GET['eventtype'] : '%');
    }


    ///////////////////////////////////////////////////////////////////////////
    // Generate filter options ////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    


    ///////////////////////////////////////////////////////////////////////
    // Generate clickable table headers ///////////////////////////////////
    ///////////////////////////////////////////////////////////////////////
    echo '<div class="filter3">';

    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr>';
    echo '<th>&nbsp;</th>'; // <-- Addtion column header (empty).
    foreach ($headers as $key => $value)
    {
        if ($key == $sort) // The sorted field.
        {
            printf('
                <th>
                <a href="?sort=%s&order=%s&eventtype=%s">%s</a>
                <img src="images/%s" alt="%s" />
                </th>',
                $key,
                $order == 'ASC' ? 'DESC' : 'ASC',
                $eventtype,
                $value,
                $order == 'ASC' ? 'asc.png' : 'desc.png',
                $order == 'ASC' ? 'Ascending' : 'Descending');
        }
        else // Non-sorted field.
        {
            printf('
                <th>
                <a href="?sort=%s&order=ASC&eventtype=%s">%s</a>
                </th>',
                $key,
                $eventtype,
                $value);
        }
    }
    echo '<th>&nbsp;</th>'; // <-- Addtion column header (empty).
    echo '</tr>';

    echo '</div>';

    ///////////////////////////////////////////////////////////////////////
    // Database select ////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////

    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $sql = "SELECT * FROM Event WHERE EventType LIKE '$eventtype' ORDER BY $sort $order";

    if ($result = $con->query($sql))
    {
        while ($row = $result->fetch_object())
        {
            printf('
                
                <tr>
                <td>
                    <input type="checkbox" name="checked[]" value="%s" />
                </td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td><img width="100" height="100" src = "uploads/%s" ></td>
                <td>%d</td>
                <td>%s</td>
                <td>
                    <a href="edit-event.php?id=%s">Edit</a> |
                    <a href="delete-event.php?id=%s">Delete</a>
                </td>
                </tr>',
                $row->EventID, // <-- Value of the checkboxes.
                $row->EventID,
                $row->EventName,
                $row->EventType . ' - ' .$EVENTTYPES[$row->EventType],
                $row->Date,
                $row->Image,
                $row->Seats,
                
                $row->Description,
                $row->EventID,
                $row->EventID);
        }
    }

    printf('
        <tr>
        <td colspan="9">
            %d record(s) returned.
            
        </td>
        </tr>',
        $result->num_rows);
    echo '</table>';

    $result->free();
    $con->close();
    ///////////////////////////////////////////////////////////////////////
    ?>

    <!-- Submit button for multiple deletion -->
    <br />
    <input type="submit" name="delete" value="Delete Checked"
           onclick="return confirm('This will delete all checked records.\nAre you sure?')" />
    <input type="button" value="Cancel"
    onclick="window.location.href='add-event.php';" />  
    
  </form>
    <!-- End of form -->

</div>
<!-- End of content -->

<?php
include('includes/footer.php');
?>


  </section>

  

  <script src="script.js"></script>


</body>
</html>














