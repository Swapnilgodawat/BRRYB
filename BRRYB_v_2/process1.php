<?php
session_start();
include 'dbh.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email)){
  header("Location: form.php?error=empty");
  exit();
}
if(empty($password)){
  header("Location: form.php?error=empty");
  exit();
}
else{
  $query1 = "SELECT * from users where email='$email'";
  $result=mysqli_query($conn,$query1);
  $row=mysqli_fetch_assoc($result);
  $encrypted_password=$row['password'];
  $check = password_verify($password,$encrypted_password);
  if($check == 0)
  {
    header("Location: form.php?error=pass");
    exit();
  }
  else {
    $query1 = "SELECT * from users where email='$email' and password='$encrypted_password'";
    $result=mysqli_query($conn,$query1);

    if(!$row=mysqli_fetch_assoc($result)){
      echo"Your username or password is incorrect";
    }else{
      $_SESSION['email'] = $row['email'];
      header("Location: BRRYB.php");
    }
  }

}


 ?>
