<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin Console Panel | IGS Society </title>
  <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="addevent.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>


<style>
  .aalign1 {
    margin-left: 15px;
  }
</style>

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
    <div class="text">Add Events<br>
      <hr class="hr-s3" />
    </div>


    <?php
    $PAGE_TITLE = 'Insert Event';
    include('includes/header.php');
    ?>

    <div>
      <?php
      require_once('includes/helper.php');

      $id = '';
      $name = '';
      $eventtype = '';
      $eDate = '';
      $eDesc = '';
      $eImage = '';
      $eSeats = '';

      if (!empty($_POST)) { // Something posted back.
        $id = strtoupper(trim($_POST['id']));
        $name = trim($_POST['name']);
        $eventtype = trim($_POST['eventtype']);
        $eDate    = trim($_POST['eDate']);
        $eSeats   = trim($_POST['eSeats']);
        $eImage = $_FILES['eImage'];
        $eDesc    = trim($_POST['eDesc']);


        // Validations.
        $error['id'] = validateEventID($id);
        $error['name'] = validateEventName($name);
        $error['eventtype'] = validateeventtype($eventtype);
        $error['eDate'] = validateDate($eDate);
        $error['eDesc'] = validateDesc($eDesc);
        $error['eSeats'] = validateSeats($eSeats);
        $error['eImage'] = validateImage($eImage); 
        $error = array_filter($error); // Remove null values.

        $err = '';

        // If there is upload error.
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
        } else if ($eImage['size'] > 1048576) {
          // Check the file size. Prevent hacks.
          // 1MB = 1024KB = 1048576B.
          $err = 'File uploaded is too large. Maximum 1MB allowed.';
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







        

        
        if (empty($error)) { // If no error.
          $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

          $sql = '
                        INSERT INTO Event (EventID, EventName, EventType, Date, Image, Seats, Description)
                        VALUES (?, ?, ?, ?, ?, ?, ?)
                    ';


          $stm = $con->prepare($sql);
          $stm->bind_param('sssssis', $id, $name, $eventtype, $eDate, $save_as, $eSeats, $eDesc);
          $stm->execute();

          if ($stm->affected_rows > 0) {
            printf(
              '
                            <div class="info">
                            Event <strong>%s</strong> has been inserted.
                            [ <a href="list-event.php">Back to list</a> ]
                            </div>',
              $name
            );


            // Reset fields.
            $id = $name = $eventtype = $eDate = $eSeats = $eImage = $eDesc = null;
          } else {
            // Something goes wrong.
            echo '
                            <div class="error">
                            Opps. Database issue. Record not inserted.
                            </div>
                            ';
          }
          $stm->close();
          $con->close();
        } else { // Input error detected. Display error message.
          echo '<ul class="error">';
          foreach ($error as $value) {
            echo "<li>$value</li>";
          }
          echo '</ul>';
        }
      }
      ?>

      <form action="" method="post" class="aalign1" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="10" width="40%">

          <tr>
            <td>
              <div class="hero1">
                <label for="id">Event ID :</label>
                </br>
                <?php
                htmlInputText('id', $id, 10);
                ?>
              </div>
              <div class="hero2">
                <label for="name">Event Name :</label>
                </br>
                <?php htmlInputText('name', $name, 30) ?>
              </div>
            </td>
          </tr>


          <tr>
            <td>
              <div class="hero3">
                <label for="eventtype">Event Type :</label>
                </br>
                <?php htmlSelect('eventtype', $EVENTTYPES, $eventtype, '-- Select One --') ?>

              </div>

              <div class="hero4">
                <label for="eDate">Event date</label>
                </br>
                <?php dateCheck('eDate', $eDate);
                if (!empty($_POST)) {
                  validateDate($eDate);
                } ?>
              </div>
            </td>
          </tr>


          <tr>
            <td>
              <div class="hero5">
                <label for="eSeats">Seat Availability</label>
                </br>

                <?php seatsCheck('eSeats', $eSeats, 1, 999);
                if (!empty($_POST)) {
                  validateSeats($eSeats);
                } ?>

              </div>

              <div class="hero6">
                <label for="eImage">Event image</label>
                </br>
                <?php imgcheck('eImage');
                if (!empty($_POST)) {
                  validateImage($eImage);
                } ?>

              </div>
            </td>
          </tr>


          <tr>
            <td>
              <div class="hero7">
                <label for="eDesc">Event description</label>
                <br />

                <?php descCheck('eDesc', $eDesc, 400, 10, 50);
                if (!empty($_POST)) {
                  validateDesc($eDesc);
                }
                ?>
            </td>
          </tr>

        </table>
        <input type="submit" name="Submit" value="Add" />
        <input type="reset" value="Cancel" onclick="location = 'list-event.php'" />
      </form>

      <?php
      require_once('includes/helper.php');
      ?>
    </div>


    <?php
    include('includes/footer.php');
    ?>

    <br>

  </section>


  <script src="script.js"></script>

</body>




</html>