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
  
      <?php
        $eDate = '';
        $eDesc = '';
        $eImage = '';
        $eSeats = '';

        


          if (!empty($_POST)) // If the data field is not empty
          {
              $eDate    = trim($_POST['eDate']);
              $eDesc    = trim($_POST['eDesc']);
              $eImage   = trim($_POST['eImage']);
              $eSeats   = trim($_POST['eSeats']);

              


            if (empty($error)) // If no error.
            {
                $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                    
                $sql = '
                    INSERT INTO eventpanel (Date, Description, Image, Seats)
                    VALUES (?, ?, ?, ?)
                ';
                $stm = $con->prepare($sql); //declare and prepare to insert into sql
                $stm->bind_param('ssbi', $eDate, $eDesc, $eImage, $eSeats); //insert data into sql table, s = string, b = binary large object
                $stm->execute(); //run code

                if ($stm->affected_rows > 0) //after all data is inserted, affected role would be 5, & show success message
                {
                    printf('
                        <div id="correct">
                        &nbsp; Event <strong>%s</strong> has been inserted.
                        </div>',
                        $eName);
                       
                    //[ <a href="../Event 2/addEvent.php">Back to list</a> ]

                    // Reset fields.
                    $eDate = $eDesc = $eImage = " ";
                    $eSeats = 1;
                }
                else
                {
                    // Something goes wrong.
                    echo '
                        <div class="error">
                        &nbsp; Opps. Database issue. Record not inserted.
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
                    
                            <div class="hero2">
                                <label for="eDate">Event date</label>
                                </br>
                                <?php dateCheck('eDate', $eDate);
                                if (!empty($_POST)){
                                validateDate($eDate);
                                }?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan ="">
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
                        <td colspan ="">
                            

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
                    
                    
                </table>

                
            </form>


</body>
</html>
