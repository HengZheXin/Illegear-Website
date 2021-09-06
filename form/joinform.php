<!--Start function on (Hi.php)-->
<?php include('process.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Tutorials</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>

<?php require_once '../ShareDesign/header2.php'; ?>

<div class="hero">
    
<form method="POST" action="joinform.php">
<div class="title"><h1>Participant Form</h1></div>

    <div class="input-group">
            <label for="event"><i class="fas fa-id-badge"></i> Event Name</label>
            <input type="studID" id="event" name="event" value="<?php echo $event ?>">
            <div class="error">
            <?php echo $error['event']; ?>
            </div>
    </div>

    <div class="row">
        <div class="input-group">
            <label for="name"><i class="fas fa-user"></i> Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name ?>">
            <div class="error">
            <?php echo $error['name']; ?>
            </div>
        </div>
        <div class="input-group">
            <label for="phone"><i class="fas fa-phone-square-alt"></i> Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone ?>">
            <div class="error">
            <?php echo $error['phone']; ?>
            </div>
        </div>
    </div>

    <div class="input-group">
        <label for="studID"><i class="fas fa-id-badge"></i> Student ID</label>
        <input type="studID" id="studID" name="studID" value="<?php echo $studID ?>">
        <div class="error">
        <?php echo $error['studID']; ?>
        </div>
    </div>


    <div class="input-group">
        <label for="email"><i class="fas fa-envelope"></i> Tarc Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>">
        <div class="error">
        <?php echo $error['email']; ?>
        </div>
    </div>
    
    
    <div class="input-group">
        <label for="faculty"><i class="fas fa-school"></i> Faculty</label>
        <input type="faculty" id="faculty" name="faculty" value="<?php echo $faculty ?>">
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