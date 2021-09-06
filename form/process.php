<?php

    $event = $name = $phone = $studID = $email = $faculty = "";
    $error = array('event'=>'','name'=>'','phone'=>'','studID'=>'','email'=>'','faculty'=>'');

    if(isset($_POST['submit'])){

        //check event
        if(empty($_POST['event'])){
            $error['event'] = 'Event Name is required!';
        }else{
            $event = $_POST['event'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$event)){
                $error['event'] = 'Event name should be alphabet only!';
            }
            elseif(strlen($event)>80){
                $error['event'] = 'Event Name should not over 80 character!';
            }
            else{
                $strings = array($event);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['event'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }

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

        //check phone
        if(empty($_POST['phone'])){
            $error['phone'] = 'Phone is required!';
        }else{
            $phone = $_POST['phone'];
            if(preg_match("/^[a-zA-Z]+$/",$phone)){
                $error['phone'] = 'Phone should be in number only!';
            }
            else if(!preg_match("/^[0]{1}[1]{1}[0-9]{1}[0-9]{7,8}+$/",$phone)){
                $error['phone'] = 'Phone Number Format : 0123456789';
            }
            else {
                $strings = array($phone);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['phone'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }

        //student id
        if(empty($_POST['studID'])){
            $error['studID'] = 'Student ID is required!';
        }else{
            $studID = $_POST['studID'];
            if(preg_match("/^[a-zA-Z]+$/",$studID)){
                $error['studID'] = 'Student ID should be in number only!';
            }
            else if(!preg_match("/^[0-9]{7}+$/",$studID)){
                $error['studID'] = 'Student ID should be 7 digit!';
            }
            else{
                $strings = array($studID);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['studID'] = 'Cannot consists whitespaces only!';
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

        //check faculty
        if(empty($_POST['faculty'])){
            $error['faculty'] = 'Faculty is required!';
        }else{
            $faculty = $_POST['faculty'];
            if(strlen($faculty)>80){
                $error['faculty'] = 'Faculty should not over 80 character!';
            }

            else{
                $strings = array($faculty);

                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['faculty'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }

        //success
        if(preg_match("/^[a-zA-Z-'\s]+$/",$event) && preg_match("/^[a-zA-Z-'\s]+$/",$name) && preg_match("/^[0]{1}[1]{1}[0-9]{1}[0-9]{7,8}+$/",$phone) && preg_match("/^[0-9]{7}+$/",$studID) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST['faculty'])){
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "igswebdb";
            
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            
            if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO participant(event, name, phone, studentID, email, faculty) VALUES ('$event','$name','$phone','$studID','$email','$faculty')";
                if($conn->query($sql)){
                    echo "<script> alert('Submitted successfully.');window.location='joinform.php' </script>";
                }
                else{
                    echo "Error: ".$sql."<br>",$conn->error;
                }
                $conn->close();
            }
        }
    }
?>