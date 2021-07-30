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
        <div class="logo_name">IGS Society</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
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
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img class="adminlogo" src="../ShareDesign/images/SmallLogo.png" alt="profileImg">
           <div class="name_job">
             <div class="name">IGS Society</div>
             <div class="job">Admin Panel</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Add Events</div>
      <form action="" method="post">
                
                <table width="50%" cellpadding="0" cellspacing="10">

                    <tr>
                        <td colspan="2">
                            <div class="inputSection">       
                                <label for="eventTitle">Event title</label>
                                </br>
                                <?php inputText('eventTitle', $eventTitle, 30); ?>
                            </div>
                        </td>
                        
                        <td colspan="1">
                            <div class="inputSection">
                                <label for="eventId">Event ID</label>
                                </br>
                                <input type="text" name="eventId" id="eventId" value="<?php echo $temp_id; ?>" readonly>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan ="3">
                            <div class="inputSection">
                                <label for="eventDesc">Event description</label>
                                </br>
                                <?php inputTextArea('eventDesc', $eventDesc, 400, 10, 50); ?>
                            </div> 
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div class="inputSection">
                                <label for="eventDate">Event date</label>
                                </br>
                                <?php inputDate('eventDate', $eventDate); ?>
                            </div>
                        </td>
                        <td>
                            <div class="inputSection">
                                <label for="eventSeat">Seat Availability</label>
                                </br>
                                <?php inputNum('eventSeat', $eventSeat, 1, 9999); ?>
                            </div>
                        </td>
                        <td>
                            <div class="inputSection">       
                                <label for="eventImg">Event image</label>
                                </br>
                                <?php inputImg('eventImg'); ?>
                            </div>
                        
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" name="upload" value="Add" />
                        </td>
                        <td>
                            <input type="button" value="Cancel" onclick="location='#'" />
                        </td>
                    </tr>
                    
                </table>

                
            </form>
  </section>

  <script src="script.js"></script>

</body>
</html>
