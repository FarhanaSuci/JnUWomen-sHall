<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Forgot Password?</title>
<link rel="stylesheet" href="send.css" />
</head>
<body>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
   //$username= mysqli_real_escape_string($con,$_POST['username']);
   $email= mysqli_real_escape_string($conn,$_POST['email']);
   //$password= mysqli_real_escape_string($con,$_POST['password']);
   //$cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);


   //$pass = password_hash($password,PASSWORD_BCRYPT);
   //$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

   $token = md5(rand());
   $_SESSION['token'] = $token;
   //$_SESSION['username'] = $username;

   $emailquery = "select * from students where email = '$email'";

   $query = mysqli_query($conn,$emailquery);

   $emailcount = mysqli_num_rows($query);
   if($emailcount){

      $userdata = mysqli_fetch_array($query);

      $name = $userdata['name'];
      $password=$userdata['password'];
      //$token = $userdata['token'];
      //$token = bin2hex(random_bytes(50));
      //$token = $userdata['token'];
      $inresult = mysqli_query($conn,"insert into pass_reset values('','$email','$token')"); 

      $subject = "";
      $body = "Hi,$name.Your password is:$password .Click here to login your account http://localhost/WebProject/login1.php?$token ";
      //$to_email = "farhanaaktersuci@gmail.com";
      $subject = "Password Reset";
     // $body = "Hi, This is test email send by PHP Script";
      $send_mail = "From: farhanaaktersuci@gmail.com";

if (mail($email, $subject, $body, $send_mail)) {
    $_SESSION['msg'] = "check your mail to reset your password $email";
    header('location:login1.php');
} else {
    echo "Email sending failed...";
}
   }



   }
   ?>
<div class="form">
<h1>Recover Your Account</h1>
<form name="registration" action="" method="post">

<input type="email" name="email" placeholder="Send Mail" required >

<input type="submit" name="submit" value="submit" >
</form>
</div>

</body>
</html>