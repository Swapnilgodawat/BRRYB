<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <?php
    if  (isset($_SESSION['email'])){
      echo"<form action='project/signout.php'>
      <Button>LOGOUT</Button>
    </form>";
    }
      else{
        echo"<form action='project/signout.php'>
        <Button>LOGIN</Button>
      </form>";

      }

   ?>
</body>
</html>
