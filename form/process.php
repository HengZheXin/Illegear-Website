<?php

    $event = $name = $phone = $studID = $email = $faculty = "";
    $error = array('event'=>'','name'=>'','phone'=>'','studID'=>'','email'=>'','faculty'=>'');

    if(isset($_POST['submit'])){

        //check event
        if(empty($_POST['event'])){
            $error['event'] = 'Event Name is required!';
        }else{
            //validation regex only a-z
            $event = $_POST['event'];
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$event)){
                $error['event'] = 'Event name should be alphabet only!';
            }
            //event name cannot over 80 character
            elseif(strlen($event)>80){
                $error['event'] = 'Event Name should not over 80 character!';
            }
            else{
                $strings = array($event);
                //validation of white spaces
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
            //validation regex only a-z
            if(!preg_match("/^[a-zA-Z-'\s]+$/",$name)){
                $error['name'] = 'Name should be alphabet only!';
            }
            else{
                $strings = array($name);
                //validation of white spaces
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
            //validation regex cannot in a-z format
            if(preg_match("/^[a-zA-Z]+$/",$phone)){
                $error['phone'] = 'Phone should be in number only!';
            }
            //validation regex only 01 start 8/9 numbers end
            else if(!preg_match("/^[0]{1}[1]{1}[0-9]{1}[0-9]{7,8}+$/",$phone)){
                $error['phone'] = 'Phone Number Format : 0123456789';
            }
            else {
                $strings = array($phone);
                //validation of white spaces
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
            //validation regex cannot in a-z format
            $studID = $_POST['studID'];
            if(preg_match("/^[a-zA-Z]+$/",$studID)){
                $error['studID'] = 'Student ID should be in number only!';
            }
            //validation regex 7 number only 
            else if(!preg_match("/^[0-9]{7}+$/",$studID)){
                $error['studID'] = 'Student ID should be 7 digit!';
            }
            else{
                $strings = array($studID);
                //validation of white spaces
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
            //validation email
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Invalid email address!';

            }
        }

        //check faculty
        if(empty($_POST['faculty'])){
            $error['faculty'] = 'Faculty is required!';
        }else{
            //faculty cannot over 80 character
            $faculty = $_POST['faculty'];
            if(strlen($faculty)>80){
                $error['faculty'] = 'Faculty should not over 80 character!';
            }

            else{
                $strings = array($faculty);
                //validation of white spaces
                foreach($strings as $test){
                    if(ctype_space($test)){
                        $error['faculty'] = 'Cannot consists whitespaces only!';
                    }
                }
            }
        }

        //Last checking of event name , name , phone no , stud ID , email , faculty
        if(preg_match("/^[a-zA-Z-'\s]+$/",$event) && preg_match("/^[a-zA-Z-'\s]+$/",$name) && preg_match("/^[0]{1}[1]{1}[0-9]{1}[0-9]{7,8}+$/",$phone) && preg_match("/^[0-9]{7}+$/",$studID) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST['faculty'])){
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
                $sql = "INSERT INTO participant(event, name, phone, studentID, email, faculty) VALUES ('$event','$name','$phone','$studID','$email','$faculty')";
                if($conn->query($sql)){
                    //alert message and back to event page
                    echo "<script> alert('Submitted successfully.');window.location='../Events 2/index.php' </script>";
                }
                else{
                    echo "Error: ".$sql."<br>",$conn->error;
                }
                $conn->close();
            }
        }
    }
?>