<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="indexstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

      <div class="hero">
        <div class="content">
            <small>Welcome Admin</small>
            <h1>Interactive<br>Gaming Society</h1>
            <a href="../Home/home.php"><button type="button">Back to Home</button></a>
        </div>
       
        
        
        <div class="bubbles">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
            <img src="images/bubble.png">
        </div>
        
        
    </div>

  
    </div>
  </section>

  <script src="script.js"></script>



  
</body>
</html>
