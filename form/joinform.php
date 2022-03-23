<!--Start function on (process.php)-->
<?php include('process.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Form | IGS Website</title>
    <link rel="shortcut icon" href="images/illegear-logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
<!--Header-->
<?php require_once '../ShareDesign/header2.php'; ?>

<!--Form-->
<div class="hero">
    
<form method="POST" action="joinform.php">
<div class="title"><h1>Participant Form</h1></div>
    <!--Input event name-->
    <div class="input-group">
            <label for="event"><i class="fas fa-id-badge"></i> Event Name</label>
            <input type="studID" id="event" name="event" value="<?php echo $event ?>">
            <!--Error messages-->
            <div class="error">
            <?php echo $error['event']; ?>
            </div>
    </div>
    <!--Input name-->
    <div class="row">
        <div class="input-group">
            <label for="name"><i class="fas fa-user"></i> Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name ?>">
            <!--Error messages-->
            <div class="error">
            <?php echo $error['name']; ?>
            </div>
        </div>
    <!--Input phone number-->
        <div class="input-group">
            <label for="phone"><i class="fas fa-phone-square-alt"></i> Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone ?>">
            <!--Error messages-->
            <div class="error">
            <?php echo $error['phone']; ?>
            </div>
        </div>
    </div>
    <!--Input student ID-->
    <div class="input-group">
        <label for="studID"><i class="fas fa-id-badge"></i> Student ID</label>
        <input type="studID" id="studID" name="studID" value="<?php echo $studID ?>">
        <!--Error messages-->
        <div class="error">
        <?php echo $error['studID']; ?>
        </div>
    </div>

    <!--Input tarc email-->
    <div class="input-group">
        <label for="email"><i class="fas fa-envelope"></i> Tarc Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>">
        <!--Error messages-->
        <div class="error">
        <?php echo $error['email']; ?>
        </div>
    </div>
    
    <!--Input Faculty-->
    <div class="input-group">
        <label for="faculty"><i class="fas fa-school"></i> Faculty</label>
        <input type="faculty" id="faculty" name="faculty" value="<?php echo $faculty ?>">
        <!--Error messages-->
        <div class="error">
        <?php echo $error['faculty']; ?>
        </div>
    </div>
    

    <button type="submit" id="submit" name="submit" class="hero-btn">SUBMIT <i class="fas fa-paper-plane"></i></button>
    
</form>

</div>
</section>
    
</body>
</html>
<?php require_once '../ShareDesign/footer.php'; ?>