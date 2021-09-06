<?php 

    $name = $email = $subject = $message= "";
    $error = array('name'=>'','email'=>'','subject'=>'','message'=>'');

    if(isset($_POST['submit'])){

        //check name
        if(empty($_POST['name'])){
            $error['name'] = 'Name is required!';
        }else{
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$name)){
                $error['name'] = 'Name should be alphabet only!';
            }
            else{
                $strings = array($name);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['name'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }
        
        //check email 
        if(empty($_POST['email'])){
            $error['email'] = 'Email is required!';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Invalid email address!';

            }
        }

        //check subject
        if(empty($_POST['subject'])){
            $error['subject'] = 'Subject is required!';
        }else{
            $subject = $_POST['subject'];
            if(strlen($subject)>30){
                $error['subject'] = 'Subject should not over 30 character!';

            }
            else{
                $strings = array($subject);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['subject'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }

        //check messages
        if(empty($_POST['message'])){
            $error['message'] = 'Messages is required!';
        }else{
            $message = $_POST['message'];
            $strings = array($message);

            foreach($strings as $test){
                if(ctype_space($test)){
                    $error['message'] = 'Cannot consists whitespaces only!';
                }
            }
            }
        }
        //success
        if(preg_match("/^[a-zA-Z-'\s]+$/",$name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-'\s]+$/",$subject) && !empty($_POST['message'])){
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "igswebdb";
            
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            
            if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO data(name, email, subject, msg) VALUES ('$name','$email','$subject','$message')";
                if($conn->query($sql)){
                    echo "<script> alert('Thanks , we will be in touch.');window.location='contact.php' </script>";
                }
                else{
                    echo "Error: ".$sql."<br>",$conn->error;
                }
                $conn->close();
            }
        }
    

?>