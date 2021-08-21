
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'igsdb');

// Input Function for TITLE
function nameCheck($name, $value = '', $maxlength = '') //determine and check the user input in the form
{
    printf('<input type="text" name="%s" id="%s" value="%s" maxlength="%d" />' . "\n",
           $name, $name, $value, $maxlength);
}

// Input Function for DATE
function dateCheck($name, $value = '') {
    printf('<input type="date" name="%s" id="%s" value="%s" />' . "\n",
            $name, $name, $value);
    
}

// Input Function for TEXTAREA

function descCheck($name, $value = '', $maxlength = '', $rows = '', $cols = '') {
    printf('<textarea type="text" name="%s" id="%s" value="%s" maxlength="%d" rows="%d" cols="%d" /></textarea>' . "\n",
           $name, $name, $value, $maxlength, $rows, $cols);
}

// Input Function for IMAGE
function imgCheck($name) {
    printf('<input type="file" id="%s" name="%s" />' . "\n",
            $name, $name);
    
}

// Input Function for NUMBER
function seatsCheck($name, $value = '', $min = '', $max = '') {
    printf('<input type="number" id="%s" name="%s" value="%s" min="%d" max="%d" />' . "\n",
            $name, $name, $value, $min, $max);
    
}

//function validation
function validateName($eName){
    if($eName == NULL)
    {
        echo '<div class = "error">'.'Please enter <strong>Event Name</strong>.'.'</div>';
    }
    else if(!preg_match("/^[a-zA-Z-'\s]+$/",$eName)){
        echo '<div class = "error">'.'There are invalid letters in <strong>Event Name</strong>.'.'</div>';
    }

}

function validateDate($eDate){
    if($eDate == NULL)
    {
        echo '<div class = "error">'.'Please enter <strong>Event Date</strong>.'.'</div>';
    }
}

function validateDesc($eDesc){
    if($eDesc == NULL)
    {
        echo '<div class = "error">'.'Please enter <strong>Event Description</strong>.'.'</div>';
    }
    else if(!preg_match("/^[a-zA-Z-'\s]+$/",$eDesc)){
        echo '<div class = "error">'.'There are invalid letters in <strong>Event Description</strong>.'.'</div>';
    }
}

function validateImage($eImage){
    if($eImage == NULL)
    {
        echo '<div class = "error">'.'Please insert <strong>Event Image</strong>.'.'</div>';
    }
}

function validateSeats($eSeats){
    if($eSeats == NULL)
    {
        echo '<div class = "error">'.'Please enter <strong>Seats Number</strong>.'.'</div>';
    }
    else if(!preg_match("/^[0-9]+(,[0-9]+)*$/",$eSeats)){
        echo '<div class = "error">'.'There are invalid letters in <strong>Seats Number</strong>.'.'</div>';
    }
}










    




?>