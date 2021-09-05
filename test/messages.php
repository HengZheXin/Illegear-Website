<?php  

global $errors;

if (!empty($errors)) : 
	echo '<div class="error">';
	foreach ($errors as $error) : 
  	echo '<p>';
	echo $error;
	echo '</p>';
	endforeach;
  echo'</div>';
endif ?>