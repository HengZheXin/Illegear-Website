<?php
///////////////////////////////////////////////////////////////////////////////
// Database connection details ////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

// Constants. Please change accordingly.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'igswebdb');

///////////////////////////////////////////////////////////////////////////////
// Lookup tables //////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

// Return an array of all states.
function getEventTypes()
{
    return array(
        'UE' => 'Upcoming Events',
        'PE' => 'Past Events',
    );
}



// Array versions of lookup tables.
$EVENTTYPES = getEventTypes();



// Print a <select> element.
function htmlSelect($name, $items, $selectedValue = '', $default = '')
{
    printf('<div class="size1">'."\n");
    printf('<select  name="%s" id="%s">' . "\n",
           $name, $name);

    if ($default != null)
    {
        printf('<option value="">%s</option>', $default);
    }

    foreach ($items as $value => $text)
    {
        printf('<option value="%s" %s>%s</option>' . "\n",
               $value,
               $value == $selectedValue ? 'selected="selected"' : '',
               $text);
    }
    
    echo "</select>\n";
    echo "</div>\n";
}

// Print a <input type="text"> element.
function htmlInputText($name, $value = '', $maxlength = '')
{
    printf('<input type="text" name="%s" id="%s" value="%s" maxlength="%s" />' . "\n",
           $name, $name, $value, $maxlength);
}

// Print a <input type="password"> element.
function htmlInputPassword($name, $value = '', $maxlength = '')
{
    printf('<input type="password" name="%s" id="%s" value="%s" maxlength="%s" />' . "\n",
           $name, $name, $value, $maxlength);
}



// Print a <input type="hidden"> element.
function htmlInputHidden($name, $value = '')
{
    printf('<input type="hidden" name="%s" id="%s" value="%s" />' . "\n",
           $name, $name, $value);
}





// Date

function dateCheck($name, $value = '') {
    printf('<input type="date" name="%s" id="%s" value="%s" />' . "\n",
            $name, $name, $value);
    
}

//Textarea
function descCheck($name, $value = '', $maxlength = '', $rows = '', $cols = '') {
    printf('<textarea type="text" name="%s" id="%s" value="%s" maxlength="%d" rows="%d" cols="%d" /></textarea>' . "\n",
           $name, $name, $value, $maxlength, $rows, $cols);
}


//Image
function imgCheck($name) {
    printf('<input type="file" id="%s" name="%s" />' . "\n",
            $name, $name);
    
}


//Number
function seatsCheck($name, $value = '', $min = '', $max = '') {
    printf('<input type="number" id="%s" name="%s" value="%s" min="%d" max="%d" />' . "\n",
            $name, $name, $value, $min, $max);
    
}








function validateDate($eDate){
    if($eDate == NULL)
    {
        return 'Please enter <strong>Event Date</strong>.';
    }
}

function validateDesc($eDesc){
    if($eDesc == NULL)
    {
        return 'Please enter <strong>Event Description</strong>.';
    }
    else if(!preg_match("/^[a-zA-Z-'\s]+$/",$eDesc)){
        return 'There are invalid letters in <strong>Event Description</strong>.';
    }
}







function validateImage($eImage){

    if($eImage == NULL)
    {
        return 'Please insert <strong>Event Image</strong>.';
    }
    
}









function validateSeats($eSeats){
    if($eSeats == NULL)
    {
        return 'Please enter <strong>Seats Number</strong>.';
    }
    else if(!preg_match("/^[0-9]+(,[0-9]+)*$/",$eSeats)){
        return 'There are invalid letters in <strong>Seats Number</strong>.';
    }
}








// Validate Event ID.
// Return nothing if no error.
function validateEventID($id)
{
    if ($id == null)
    {
        return 'Please enter <strong>Event ID</strong>.';
    }
    else if (!preg_match('/^[A-Z]{1}\d{4}$/', $id)) 
    {
        return '<strong>Event ID</strong> is of invalid format. Format: E0001.';
    }
    else if (isEventIDExist($id))
    {
        return '<strong>Event ID</strong> given already exist. Try another.';
    }
}

// Check if Event ID already exist.
// Used by function validateEventID().
function isEventIDExist($id)
{
    $exist = false;

    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $id  = $con->real_escape_string($id);
    $sql = "SELECT * FROM Event WHERE EventID = '$id'";

    if ($result = $con->query($sql))
    {
        if ($result->num_rows > 0)
        {
            $exist = true;
        }
    }

    $result->free();
    $con->close();

    return $exist;
}

// Validate Event Name.
// Return nothing if no error.
function validateEventName($name)
{
    if ($name == null)
    {
        return 'Please enter <strong>Event Name</strong>.';
    }
    else if (strlen($name) > 30) // Prevent hacks.
    {
        return '<strong>Event Name</strong> must not more than 30 letters.';

    }
    else if (!preg_match('/^[A-Za-z @,\'\.\-\/]+$/', $name))
    {
        return 'There are invalid letters in <strong>Event Name</strong>.';
    }
}



// Validate EventType.
// Return nothing if no error.
function validateEventType($eventtype)
{
    if ($eventtype == null)
    {
        return 'Please select an <strong>Event Type</strong>.';
    }
    else if (!array_key_exists($eventtype, getEventTypes())) // Prevent hacks.
    {
        return 'Invalid <strong>Event</strong> code detected.';
    }
}

?>
