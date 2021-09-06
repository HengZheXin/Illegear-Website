<html>
<head>
    <title>Events | IGS Website</title>
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>


    <?php require_once '../ShareDesign/header2.php'; ?>

    <div class="banner-area">
        <div class="banner-text">
            <p>IGS Society</p><br/>
            <hr class="hr-s3" style="width: 80px; margin: auto"/><br/>
            <h2>Our Events</h2><br/>
            <p>Join our community now for the latest news on all different games and discuss with a group of memebers who have the same passion in gaming. ​</p>
            <a href="">VIEW OUR EVENTS</a>
        </div>
    </div>



    <div class="hero">
        <div class="btn-box">
        <button id="btn1" onclick="location = 'index.php'"><i class="fa fa-calendar-plus-o"></i>Our Event</button>
        </div>
    </div>
        


        <?php
   require_once '../AdminPage/includes/helper.php';
    error_reporting(error_reporting() & ~E_NOTICE);
    


        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * FROM event";
        $result = $con->query($sql);

        if ($row = $result->fetch_object()) {
            printf(
                '
                <div class="container banner text-center">
            
                <div class="row">
                    <div class="col-md-10">
                         <img width="200" height="200" src="../AdminPage/uploads/%s"/>
                    </div>
                        <div class="info">
                        
                            <h1>&nbsp;%s</h1>
                            <hr>
                            <p>&nbsp;&nbsp;<span>%s</span></p>
                            <p>&nbsp;&nbsp;Date: %s</p>
                            <p>&nbsp;&nbsp;Seats Available: %s</p>
                            <p>&nbsp;&nbsp;Description: %s</p>
                        
                        
                        
                            <a href="#">View Event</a>
                            <a href="../form/joinform.php" class="second-btn">Join Event</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            ',
            

            $row->Image,
                $row->EventName,
                $row->EventType . ' - ' .$EVENTTYPES[$row->EventType],
                $row->Date,
                $row->Seats,
                $row->Description
            );
            while ($row = $result->fetch_object()) {
                printf(
                    '
                    <div class="container banner text-center">
                
                    <div class="row">
                        <div class="col-md-10">
                            <img width="200" height="200" src="../AdminPage/uploads/%s"/>
                        </div>
                            <div class="info">
                                <h1>&nbsp;%s</h1>
                                <hr>
                                <p>&nbsp;&nbsp;<span>%s</span></p>
                                <p>&nbsp;&nbsp;Date: %s</p>
                                <p>&nbsp;&nbsp;Seats Available: %s</p>
                                <p>&nbsp;&nbsp;Description: %s</p>
    
                                <a href="#">View Event</a>
                                <a href="../form/joinform.php" class="second-btn">Join Event</a>
    
                            
                        </div>
                    </div>
                </div>
                ',
                $row->Image,
                $row->EventName,
                $row->EventType . ' - ' .$EVENTTYPES[$row->EventType],
                $row->Date,
                
                $row->Seats,
                $row->Description
                );
        } 
    }


    
    ?>
        

        
   



    
    
</div>  
</body>
</html>
<?php require_once '../ShareDesign/footer.php'; ?>