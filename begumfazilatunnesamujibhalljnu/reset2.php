<?php
  session_start();
  //echo $_SESSION['token'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
-->
    <title>Reset Password</title>
    <!-- style sheet link  -->
    <link rel="stylesheet" type="text/css"  href="reset.css">
</head>

<body>
  <?php
include 'db_conn.php';

if(isset($_POST['submit']))
{
  // Grab to token that came from the email link
  $token = $_SESSION['token'];
 
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM pass_reset2 WHERE token='$token' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email)
     {
      //$new_pass = md5($new_pass);
      //$sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
     // $results = mysqli_query($db, $sql);
      //header('location: index.php');
 // if(isset($_GET['token']))
  //{
  
  //if(isset($_GET['token'])){
       
     //$token = $_GET['token'];

     // $fetchresultok = mysqli_query($con, "SELECT email FROM pass_reset WHERE token='$token'");


      //$newpassword= mysqli_real_escape_string($con,$_POST['password']);
      //$cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);


      //$pass = password_hash($newpassword,PASSWORD_BCRYPT);
      $new_pass = mysqli_real_escape_string($conn,$_POST['password']);
     // $pass = md5($new_pass);
     $pass = $new_pass;
      //$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

      //$updatequery = "update users set password = '$pass' where email = '$email'";

      //if($newpassword === $cpassword){

        //$fetchemail = mysqli_query($con, "SELECT email FROM pass_reset WHERE token='$token'");

        $updatequery = "update current_provost  set password = '$pass' where email= '$email'";

      $iquery = mysqli_query($conn,$updatequery);

       if($iquery)
      {
        $_SESSION['msg'] = "Your password has been updated.";
        header('location:login2.php');

  }

else{
  $_SESSION['passmsg'] = "Your password is not updated.";
  header('location:reset2.php');


}

}
else{

  $_SESSION['passmsg'] = "Your password is not matching.";
  //echo "Password are not matching";
}
}



?>

<div class="container">
<form name="Update Password" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<br>
            <p>Reset Password</p>
            <br>
            <br>
            <br>

<!--<input type="password" name="password" placeholder="New Password" required />
<input type="password" name="password" placeholder="Confirm Password" required />

<input type="submit" name="submit" value="submit" />-->


<div class="form-control">
                <label for="password">New password</label>
                <input type="password" name="password" id="password" placeholder="Enter here"required/>
            </div>
            <div class="form-control">
                <label for="password">Re-type new password</label>
                <input type="password" name="password" id="password" placeholder="Enter here"required/>
            </div>
            <br>

            <div class="form-control">
                <button type="submit" name = "submit" value = "submit" >Update</button>
                <br>
        
                <a href="index.php" id="forgot" style="text-align:center;">Back to Homepage?</a>
                <br>
                
                
                
            </div>
</form>
</body>
</html>
