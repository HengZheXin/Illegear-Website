<?php
    include 'header.php';
?>
<html>
<head>
    <title>Events | IGS Website</title>
    <link rel="shortcut icon" href="images/test1.png" type="image/x-icon">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<?php require_once '../ShareDesign/header2.php'; ?>

    <div class="container5">
        <div class="zx">

        </div>
        <div class="content5">
            <h1>Let the Games<br>Begin</h1>
            <div class="search-box">
                <form action="hi.php" method="POST">  
                <input type="text" placeholder="Search Any Event" name="search">
                <button type="submit" name="submit-search"><img src="images/search.png"></button>
                </form>
            </div>
            <p>Millions of games to explore from</p>
        </div>


    </div>



    <div class="hero">
        <div class="btn-box">
        <button id="btn1" onclick="location = 'index.php'"><i class="fa fa-calendar-plus-o"></i>Our Event</button>
        </div>
    </div>

<?php 
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql = "SELECT * FROM event WHERE EventName LIKE '%$search%' OR EventType LIKE '%$search%' OR Description LIKE '%$search%'";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);
        $hello = $conn->query($sql);

        if ($row = $hello->fetch_object()) {
            printf(
                '
                <div class="col-md-12">
                <img width="300" height="230" style="object-fit: cover;"src="../AdminPage/uploads/%s"/>
                </div>
                ',
                $row->Image
                
            );
        }
        if($queryResult>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='container banner text-center'>

                <div class='row2'>
                
                 
                <div class='info'>
                <h1>".$row['EventName']."</h1>
                <p>UE - Upcoming Events</p>
                <p>Date: ".$row['Date']."</p>
                <p>Seats Available: ".$row['Seats']."</p>
                <p>Description: ".$row['Description']."</p>
                </div>

                </div>
                </div>";
            }
        }
        else{
            echo "<p style='margin-top:100px; margin-left:63px; font-size:20px'>There are no results matching your search!</p>";
        }
    }


?>
<br><br><br><br><br>



</body>
</html>
<?php require_once '../ShareDesign/footer.php'; ?>