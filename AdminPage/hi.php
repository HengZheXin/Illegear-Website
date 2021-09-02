<?php
   session_start();
   $conn = mysqli_connect("localhost","root","","my_contact_db");

   if(isset($_POST['delete']))
   {
    $all_id = $_POST['delete_id'];
    $extract_id = implode(',',$all_id);
    //echo $extract_id;

    $query = "DELETE FROM data WHERE id IN($extract_id)";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Record Deleted Succesfully";
        header("Location: inquires.php");
    }
    else
    {
        $_SESSION['status'] = "Record Not Deleted";
        header("Location: inquires.php");
    }
   }

