<?php
session_start();
if (isset($_SESSION['email']))
  { echo"Thank you for Shopping with us ".$_SESSION['email'];}
  else{echo"you are not signed in ";}
?>
