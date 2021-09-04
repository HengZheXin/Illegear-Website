<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <style>
    table{
      border-collapse: collapse;
      width: 70%;
      color: #588c7e;
      font-family: monospace;
      font-size: 17px;
      text-align: center;
      margin-left: 20px;
    }
    th{
      background-color: lightcoral;
      color: white;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .btn-danger{
      color: #588c7e;
      border-radius: 5px;
      padding-left: 5px;
      padding-right: 5px;
    }
  </style>
  <head>
    <meta charset="UTF-8">
    <title> Admin Console Panel  | IGS Society </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="text">User Profile</div>
    
    <div class="card_body">
        <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
                ?>
                <h5><?php echo $_SESSION['status']; ?></h5>
                <?php
                unset($_SESSION['status']);
            }
        ?>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "registration");

        $query = "SELECT * FROM users";
        $query_run = mysqli_query($connection, $query);
        ?>

        <form action="code.php" method="POST">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"><button type="submit" name="del_multiple_data" class="btn btn-danger">Delete</button></th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_array($query_run)){
                            ?>
                            <tr>
                                <td><input type="checkbox" name="del_chk[]" value="<?php echo $row['id']; ?>"></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                            </tr>
                        <?php
                        }
                    }else{
                        ?>
                          <tr>
                            <td colspan="5">No Record Found</td>
                          </tr>
                          <?php
                      }
                    ?>
            </tbody>
        </table>
        </form>
    </div>
  
  </section>

  

  <script src="script.js"></script>
</body>
</html>

