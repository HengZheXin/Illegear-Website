<?php
   session_start();
   /*connect database*/
   $conn = mysqli_connect("localhost","root","","igswebdb");
    /*Delete Function for inquires*/
   if(isset($_POST['delete']))
   {
    $all_id = $_POST['delete_id'];
    $extract_id = implode(',',$all_id);
    
    //Delete data from database
    $query = "DELETE FROM data WHERE id IN($extract_id)";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        //print message after delete successful
        $_SESSION['status'] = "Record Deleted Succesfully";
        header("Location: inquires.php");
    }
    else
    {
        //print message after delete unsuccessful
        $_SESSION['status'] = "Record Not Deleted";
        header("Location: inquires.php");
    }
   }


    /*Delete Function for eventparticipant*/
   if(isset($_POST['danger']))
   {
    $all_id = $_POST['delete_id'];
    $extract_id = implode(',',$all_id);

    //Delete data from database
    $query = "DELETE FROM participant WHERE id IN($extract_id)";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {   
        //print message after delete successful
        $_SESSION['status'] = "Record Deleted Succesfully";
        header("Location: eventParticipants.php");
    }
    else
    {
        //print message after delete unsuccessful
        $_SESSION['status'] = "Record Not Deleted";
        header("Location: eventParticipants.php");
    }
   }

