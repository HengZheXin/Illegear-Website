<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="adminpage.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php require_once('debug.php'); error_reporting(E_ALL ^ E_NOTICE);?>
   </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
        <a href="../AdminPage/index.php"><div class="logo_name">IGS Society</div></a>
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
       <a href="addEvent.php">
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
      <div class="text">Add Events<br>
      <hr class="hr-s3"/></div>


      <?php
        $eName = '';
        $eDate = '';
        $eDesc = '';
        $eImage = '';
        $eSeats = '';

        


          if (!empty($_POST)) // Something posted back.
          {
              $eName    = trim($_POST['eName']);
              $eDate    = trim($_POST['eDate']);
              $eDesc    = trim($_POST['eDesc']);
              $eImage   = trim($_POST['eImage']);
              $eSeats   = trim($_POST['eSeats']);

              $error['eName']    = validateName($eName);
              $error['eDate']    = validateDate($eDate);
              $error['eDesc']    = validateDesc($eDesc);
              $error['eImage']   = validateImage($eImage);
              $error['eSeats']   = validateSeats($eSeats);
              $error = array_filter($error); // Remove null values.


            if (empty($error)) // If no error.
            {
                $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                    
                $sql = '
                    INSERT INTO eventpanel (Title, Date, Description, Image, Seats)
                    VALUES (?, ?, ?, ?, ?)
                ';
                $stm = $con->prepare($sql);
                $stm->bind_param('sssbi', $eName, $eDate, $eDesc, $eImage, $eSeats);
                $stm->execute();

                if ($stm->affected_rows > 0)
                {
                    printf('
                        <div class="info">
                        Event <strong>%s</strong> has been inserted.
                        [ <a href="../Event 2/addEvent.php">Back to list</a> ]
                        </div>',
                        $name);

                    // Reset fields.
                    $eName = $eDate = $eDesc = $eImage = $eSeats = null;
                }
                else
                {
                    // Something goes wrong.
                    echo '
                        <div class="error">
                        Opps. Database issue. Record not inserted.
                        </div>
                        ';
                }
                $stm->close();
                $con->close();
            }
          
        }

      ?>


      <form action="" method="post">
                
                <table width="40%" cellpadding="0" cellspacing="10">

                

                    <tr>
                        <td colspan="">
                            <div class="hero1">       
                                <label for="eName">Event name</label>
                                </br>
                                <?php 
                                nameCheck('eName', $eName, 30);
                                  if (!empty($_POST)) {
                                  validateName($eName); 
                                  }
                                
                                ?>
                            </div>
                    
                            <div class="hero2">
                                <label for="eDate">Event date</label>
                                </br>
                                <?php dateCheck('eDate', $eDate);
                                if (!empty($_POST)){
                                validateDate($eDate);
                                }
                                ?>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan ="1">
                            <div class="hero">
                                <label for="eDesc">Event description</label>
                                </br>
                                <?php descCheck('eDesc', $eDesc, 400, 10, 50);
                                if (!empty($_POST)){
                                 validateDesc($eDesc); 
                                }
                                 ?>
                            </div> 
                        </td>
                    </tr>

                    <tr>
                        <td colspan ="1">
                            

                            <div class="hero3">       
                                <label for="eImage">Event image</label>
                                </br>
                                <?php imgCheck('eImage');
                                if (!empty($_POST)){
                                  validateImage($eImage);
                                }
                                 ?>
                            </div>

                            <div class="hero4">
                                <label for="eSeats">Seat Availability</label>
                                </br>
                                <?php seatsCheck('eSeats', $eSeats, 1, 999);
                                if (!empty($_POST)){
                                 validateSeats($eSeats); } ?>
                            </div>
                        
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Add" />
                            <input type="reset" value="Cancel" onclick="location='#'" />
                        </td>
                    </tr>
                    
                </table>

                
            </form>
  </section>

  <script src="script.js"></script>

</body>
</html>
