<!--Start function on (Hi.php)-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>


<!--Back End Left Navigation bar-->
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <a href="../AdminPage/index.php"><div class="logo_name">IGS Society</div></a>
        <i class='bx bx-menu' id="btn" ></i>
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
  <!--Retrieve Data from database and display on table-->
  <section class="home-section">
      <div class="text">Event Participants</div>
      <hr class="hr-s3"  style="width:80px; margin-left:20px; margin-top:-20px; margin-bottom:40px;"/>
      <!--Display Record Status : Record Deleted Successfully/Record Not Deleted (message)-->
      <?php
      if(isset($_SESSION['status']))
      {
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
      }
      ?>
      <!--Table -->
      <form action="deleteFunction.php" method="POST">
      <table class ="content">

      <thead>
      <tr>
        <!--Delete Button : confirmation message provide-->
        <th><button type="submit" name="danger" class="delete" onclick="return confirm('This will delete all checked records.\nAre you sure?')">Delete</button></th>
        <th>Event Name</th>
        <th>Name</th>
        <th>Student ID</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Faculty</th>
      </tr>
      </thead>
      <?php
      $con=mysqli_connect("localhost","root","","igswebdb");

      $query=mysqli_query($con,"select * from participant");

      while($row=mysqli_fetch_array($query)){

      ?>
      <tbody>
      <tr>
        <!--Check Box : To select record to delete(multiple delete function)-->
        <td class="text-center"><input type="checkbox" class="input "name="delete_id[]" value="<?php echo $row['id']?>"/></td>
        <td><?=$row['event'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['studentID'];?></td>
        <td>0<?=$row['phone'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['faculty'];?></td>
      </tr>
      </tbody>
      <?php } ?>
      </table>
      </form>

  </section>

  

  <script src="script.js"></script>

</body>
</html>
