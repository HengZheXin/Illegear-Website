
<?php
// INPUT FUNCTIONS //

// Input Function for TEXT
function inputText($name, $value = '', $maxlength = '')
{
    printf('<input type="text" name="%s" id="%s" value="%s" maxlength="%d" />' . "\n",
           $name, $name, $value, $maxlength);
}

// Input Function for TEXTAREA

function inputTextArea($name, $value = '', $maxlength = '', $rows = '', $cols = '') {
    printf('<textarea type="text" name="%s" id="%s" value="%s" maxlength="%d" rows="%d" cols="%d" /></textarea>' . "\n",
           $name, $name, $value, $maxlength, $rows, $cols);
}

// Input Function for DATE
function inputDate($name, $value = '') {
    printf('<input type="date" name="%s" id="%s" value="%s" />' . "\n",
            $name, $name, $value);
    
}

// Input Function for NUMBER
function inputNum($name, $value = '', $min = '', $max = '') {
    printf('<input type="number" id="%s" name="%s" value="%s" min="%d" max="%d" />' . "\n",
            $name, $name, $value, $min, $max);
    
}

// Input Function for IMAGE
function inputImg($name) {
    printf('<input type="file" id="%s" name="%s" />' . "\n",
            $name, $name);
    
}
?>