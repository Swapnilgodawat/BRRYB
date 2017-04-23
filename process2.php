  <?php
  session_start();

  include 'dbh.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($fname)){
    header("Location: form.php?error=empty");
    exit();
  }
  if(empty($lname)){
    header("Location: form.php?error=empty");
    exit();
  }
  if(empty($email)){
    header("Location: form.php?error=empty");
    exit();
  }
  if(empty($password)){
    header("Location: form.php?error=empty");
    exit();
  }
  else {
    $query1="SELECT email from users where email='$email'";
    $result = mysqli_query($conn,$query1);
    $check=mysqli_num_rows($result);
    if($check>0){
      header("Location: form.php?error=email");
      exit();
    }
    else {
      $encrypted_password = password_hash($password,PASSWORD_DEFAULT);
      $query1="INSERT into users(fname,lname,email,password)
      values('$fname','$lname','$email','$encrypted_password')";

      $result = mysqli_query($conn,$query1);
      echo("Registration Successful");

      header("Location: form.php");
    }
  }



  ?>
