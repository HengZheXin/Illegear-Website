<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="deleteevent.css">
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
           <img class="adminlogo" src="../ShareDesign/images/SmallLogo.png" alt="profileImg">
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
    <div class="text">Delete Events<br>
    <hr class="hr-s3"/></div>

      <?php
$PAGE_TITLE = 'Delete Event';
?>

<!-- Start of content -->
<!-- P4Q3 -->
<div>
    

    <?php
    require_once('includes/helper.php');
    
    // --> Retrieve Event record based on the passed EventID.
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $id = strtoupper(trim($_GET['id']));

        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $id  = $con->real_escape_string($id);
        $sql = "SELECT * FROM Event WHERE EventID = '$id'";

        $result = $con->query($sql);
        if ($row = $result->fetch_object())
        {
            // Record found. Read field values.
            $id      = $row->EventID;
            $name    = $row->EventName;
            $eventtype = $row->EventType;
            $eDate = $row->Date;
            $eImage = $row->Image;
            $eSeats = $row->Seats;
            
            $eDesc = $row->Description;
            
            printf('
                <p class="dalign1">
                    Are you sure you want to delete the following event?
                </p>
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <td>Event ID :</td>
                        <td>%s</td>
                    </tr>
                    <tr>
                        <td>Event Name :</td>
                        <td>%s</td>
                    </tr>
                    <tr>
                        <td>Event Type :</td>
                        <td>%s</td>
                    </tr>

                    <tr>
                        <td>Event Date :</td>
                        <td>%s</td>
                    </tr>
                    <tr>
                        <td>Event Image :</td>
                        <td>%s</td>
                    </tr> 
                    <tr>
                        <td>Event Seats :</td>
                        <td>%s</td>
                    </tr>                    
                    <tr>
                        <td>Event Descriptions :</td>
                        <td>%s</td>
                    </tr>                    
                </table>
                <form action="" method="post">
                    <input type="hidden" name="id" value="%s" />
                    <input type="hidden" name="name" value="%s" />
                    <input type="submit" name="yes" value="Yes" />
                    <input type="button" value="Cancel"
                           onclick="location=\'list-event.php\'" />
                </form>',
                $id, $name,$EVENTTYPES[$eventtype],$eDate,$eImage,$eSeats,$eDesc,
                $id, $name);
        }
        else
        {
            echo '
                <div class="error">
                Opps. Record not found.
                [ <a href="list-event.php">Back to list</a> ]
                </div>
                ';
        }
        
        $result->free();
        $con->close();
        ///////////////////////////////////////////////////////////////////////
    }
    // POST METHOD ////////////////////////////////////////////////////////////
    // --> Update the record.   
    else
    {
        $id   = strtoupper(trim($_POST['id']));
        $name = trim($_POST['name']);

        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        // SELECT * FROM
        // INSERT INTO
        // UPDATE TABLE
        // DELETE FROM
        
        $sql = '
            DELETE FROM Event
            WHERE EventID = ?
        ';
        $stm = $con->prepare($sql);
        $stm->bind_param('s', $id);
        $stm->execute();

        if ($stm->affected_rows > 0)
        {
            printf('
                <div class="info">
                Event <strong>%s</strong> has been deleted.
                [ <a href="list-event.php">Back to list</a> ]
                </div>',
                $name);
        }
        else
        {
            echo '
                <div class="error">
                Opps. Database issue. Record not deleted.
                </div>
                ';
        }

        $stm->close();
        $con->close();
    }
    ?>

</div>
<!-- End of content -->

<?php
include('includes/footer.php');
?>


  </section>

  

  <script src="script.js"></script>


</body>
</html>





