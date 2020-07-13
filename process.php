<?php session_start(); 
// grab the information that was entered in the form and store in a session

$first_name = filter_input(INPUT_POST, 'username'); 

$_SESSION['name'] = $first_name; 

if(isset($_SESSION['name'])) {
  echo "<p> Thanks " . $_SESSION['name']. "!"; 
}
else {
    echo "<p> Thanks "; 
}
?>
