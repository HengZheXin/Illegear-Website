
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'igsdb');



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



function validateDate($eDate){
    if($eDate == NULL)
    {
        echo '<div class = "error">'.'Please enter <strong>Event Date</strong>.'.'</div>';
    }
}

function validateDesc($eDesc){
    if($eDesc == NULL)
    {
        return '<div class = "error">'.'Please enter <strong>Event Description</strong>.'.'</div>';
    }
    else if(!preg_match("/^[a-zA-Z-'\s]+$/",$eDesc)){
        return '<div class = "error">'.'There are invalid letters in <strong>Event Description</strong>.'.'</div>';
    }
}

function validateImage($eImage){
    if($eImage == NULL)
    {
        return '<div class = "error">'.'Please insert <strong>Event Image</strong>.'.'</div>';
    }
}

function validateSeats($eSeats){
    if($eSeats == NULL)
    {
        return '<div class = "error">'.'Please enter <strong>Seats Number</strong>.'.'</div>';
    }
    else if(!preg_match("/^[0-9]+(,[0-9]+)*$/",$eSeats)){
        return '<div class = "error">'.'There are invalid letters in <strong>Seats Number</strong>.'.'</div>';
    }
}










    




?>