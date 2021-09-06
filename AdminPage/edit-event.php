<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin Console Panel | IGS Society </title>
  <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="adminpage.css">
  <link rel="stylesheet" href="editevent.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>




<body>



  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <a href="index.php">
        <div class="logo_name">IGS Society</div>
      </a>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
    <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="userProfile.php">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="add-event.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Events</span>
        </a>
        <span class="tooltip">Events</span>
      </li>
      <li>
        <a href="inquires.php">
          <i class='bx bx-chat'></i>
          <span class="links_name">Inquires</span>
        </a>
        <span class="tooltip">Inquires</span>
      </li>
      <li>
        <a href="eventParticipants.php">
          <i class='bx bx-folder'></i>
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
    <div class="text">Edit Events<br>
      <hr class="hr-s3" />
    </div>
    <?php
    $PAGE_TITLE = 'Edit Event';
    ?>

    <!-- Start of content -->
    <!-- P4Q2 -->
    <div>

      <?php
      require_once('includes/helper.php');

      $hideForm = false;

      // --> Retrieve Event record based on the passed EventID.
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // http://localhost/Practical5/edit-event.php?id=10abc00003
        // Read query string --> EventID.
        $id = strtoupper(trim($_GET['id']));

        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $id  = $con->real_escape_string($id); // escape those character that sensitive in sql query statement
        $sql = "SELECT * FROM Event WHERE EventID = '$id'";

        $result = $con->query($sql);
        if ($row = $result->fetch_object()) {
          $id      = $row->EventID;
          $name    = $row->EventName;
          $eventtype = $row->EventType;
          $eDate = $row->Date;
          $eSeats = $row->Seats;
          $eImage = $row->Image;
          $eDesc = $row->Description;
        } else {
          echo '
                <div class="error">
                Opps. Record not found.
                [ <a href="list-event.php">Back to list</a> ]
                </div>
                ';

          $hideForm = true; // Flag, "true" to hide the form.
        }

        $result->free();
        $con->close();
      }
      // --> Update the record.
      else {

        $id      = strtoupper(trim($_POST['id']));
        $name    = trim($_POST['name']);
        $eventtype = trim($_POST['eventtype']);
        $eDate    = trim($_POST['eDate']);
        $eSeats   = trim($_POST['eSeats']);
        $eImage = $_FILES['eImage'];
        $eDesc    = trim($_POST['eDesc']);



        // Validations:
        // ------------
        // Validation functions are defined at "helper.php".
        // I don't validate EventID (PK) as it is not being updated.
        // Can check the existence of the EventID if wanted to.
        $error['name']    = validateEventName($name);
        $error['eventtype'] = validateEventType($eventtype);
        $error['eDate'] = validateDate($eDate);
        $error['eSeats'] = validateSeats($eSeats);
        $error['eImage'] = validateImage($eImage);
        $error['eDesc'] = validateDesc($eDesc);

        $error = array_filter($error);




        if ($eImage['error'] > 0) {
          // Check the error code.
          switch ($eImage['error']) {
            case UPLOAD_ERR_NO_FILE: // Code = 4.
              $err = 'No file was selected.';
              break;
            case UPLOAD_ERR_FORM_SIZE: // Code = 2.
              $err = 'File uploaded is too large. Maximum 1MB allowed.';
              break;
            default: // Other codes.
              $err = 'There was an error while uploading the file.';
              break;
          }
        //} else if ($eImage['size'] > 5242880) {
          // Check the file size. Prevent hacks.
          // 1MB = 1024KB = 1048576B.
          //$err = 'File uploaded is too large. Maximum 5MB allowed.';
        } else {
          // hello.jpg
          // Extract the file extension.
          // Convert to lowercase for easy checking.
          // luigi.png
          // macbook = luigi.PNG ----- windows = luigi.png

          $ext = strtolower(pathinfo($eImage['name'], PATHINFO_EXTENSION));

          // Check the file extension.
          if (
            $ext != 'jpg'  &&
            $ext != 'jpeg' &&
            $ext != 'gif'  &&
            $ext != 'png'
          ) {

            $err = 'Only JPG, GIF and PNG format are allowed.';

          } else {
            // Everything OK, save the file.
            // luigi.png
            // Create an unique ID and use it as file name.
            $save_as = uniqid() . '.' . $ext;  /// 611b0676e8ad2.png

            //die();
            // Save the file.
            move_uploaded_file($eImage['tmp_name'], 'uploads/' . $save_as);
          }
        }






        if (empty($error)) {
          $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          $sql = '
                UPDATE Event SET
                EventName = ?,EventType = ?,Date = ?, Image = ?, Seats = ?,Description = ?
                WHERE EventID = ?
            ';
          $stm = $con->prepare($sql);
          $stm->bind_param('ssssiss', $name, $eventtype, $eDate, $save_as, $eSeats, $eDesc, $id);

          if ($stm->execute()) {
            printf(
              '
                    <div class="info">
                    Event <strong>%s</strong> has been updated.
                    [ <a href="list-event.php">Back to list</a> ]
                    </div>',
              $name
            );
          } else {
            echo '
                    <div class="error">
                    Opps. Database issue. Record not updated.
                    </div>
                    ';
          }

          $stm->close();
          $con->close();
        } else {
          // Validation failed. Display error message.
          echo '<ul class="error">';
          foreach ($error as $value) {
            echo "<li>$value</li>";
          }
          echo '</ul>';
        }
      }
      ?>
      <?php if ($hideForm == false) : // Hide or show the form.  
      ?>

        <form action="" method="post" enctype="multipart/form-data">
          <table cellpadding="5" cellspacing="0">
            <tr>
              <td><label for="id">Event ID :</label></td>
              <td>
                <?php echo $id ?>
                <?php htmlInputHidden('id', $id) // Hidden field. 
                ?>
              </td>
            </tr>
            <tr>
              <td><label for="name">Event Name :</label></td>
              <td>
                <?php htmlInputText('name', $name, 30) ?>
              </td>
            </tr>
            <tr>
              <td><label for="eventtype">Event Types :</label></td>
              <td>
                <?php htmlSelect('eventtype', $EVENTTYPES, $eventtype, '-- Select One --') ?>
              </td>
            </tr>

            <tr>
              <td><label for="eDate">Event date</label></td>
              <td>
                <?php dateCheck('eDate', $eDate);
                if (!empty($_POST)) {
                  validateDate($eDate);
                } ?>
              </td>
            </tr>
            <tr>
              <td><label for="eSeats">Seat Availability</label></td>
              <td>
                <?php seatsCheck('eSeats', $eSeats, 1, 999);
                if (!empty($_POST)) {
                  validateSeats($eSeats);
                } ?>
              </td>
            </tr>
            <tr>
              <td><label for="eImage">Event image</label></td>
              <td>
                <?php imgCheck('eImage');
                if (!empty($_POST)) {
                  validateImage($eImage);
                }
                ?>
              </td>
            </tr>
            <tr>
              <td><label for="eDesc">Event description</label></td>
              <td>
                <?php descCheck('eDesc', $eDesc, 400, 10, 50);
                if (!empty($_POST)) {
                  validateDesc($eDesc);
                }
                ?>
              </td>
            </tr>



          </table>
          <br />
          <input type="submit" name="update" value="Update" />
          <input type="button" value="Cancel" onclick="location='list-event.php'" />
        </form>
      <?php endif ?>
    </div>
    <!-- End of content -->

    <?php
    include('includes/footer.php');
    ?>



  </section>



  <script src="script.js"></script>


</body>

</html>