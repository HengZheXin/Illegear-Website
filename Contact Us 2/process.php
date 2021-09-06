<?php 
    //Set variable to no value
    $name = $email = $subject = $message= "";
    //Set variable to array value
    $error = array('name'=>'','email'=>'','subject'=>'','message'=>'');
    //submit
    if(isset($_POST['submit'])){

        //check name
        if(empty($_POST['name'])){
            $error['name'] = 'Name is required!';
        }else{
            //validation regex only a-z
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$name)){
                $error['name'] = 'Name should be alphabet only!';
            }
            else{
                $strings = array($name);
                //validation of white spaces
                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['name'] = 'Name cannot consists whitespaces only!';
                    }
                }
            }
        }
        
        //check email 
        if(empty($_POST['email'])){
            $error['email'] = 'Email is required!';
        }else{
            //validation email
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Invalid email address!';

            }
        }

        //check subject
        if(empty($_POST['subject'])){
            $error['subject'] = 'Subject is required!';
        }else{
            //subject cannot over 30 character
            $subject = $_POST['subject'];
            if(strlen($subject)>30){
                $error['subject'] = 'Subject should not over 30 character!';

            }
            else{
                $strings = array($subject);
                //validation of white spaces
                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['subject'] = 'Subject cannot consists whitespaces only!';
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
            //validation of white spaces
            foreach($strings as $test){
                if(ctype_space($test)){
                    $error['message'] = 'Message cannot consists whitespaces only!';
                }
            }
            }
        }
        //Last checking of name , email, subject , messages
        if(preg_match("/^[a-zA-Z-'\s]+$/",$name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-'\s]+$/",$subject) && !empty($_POST['message'])){
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "igswebdb";
            //connect database
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            //error is cannot connect to database
            if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            //insert all value into database
            else{
                $sql = "INSERT INTO data(name, email, subject, msg) VALUES ('$name','$email','$subject','$message')";
                if($conn->query($sql)){
                    //alert message and back to contact us page
                    echo "<script> alert('Thanks , we will be in touch.');window.location='contact.php' </script>";
                }
                else{
                    echo "Error: ".$sql."<br>",$conn->error;
                }
                $conn->close();
            }
        }
    

?>