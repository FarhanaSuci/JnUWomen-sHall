<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <!-- style sheet link  -->
    <link rel="stylesheet" href="forgotten.css">
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

   $emailquery = "select * from staffs where email = '$email'";

   $query = mysqli_query($conn,$emailquery);

   $emailcount = mysqli_num_rows($query);
   if($emailcount){

      $userdata = mysqli_fetch_array($query);

      $name = $userdata['name'];
      //$token = $userdata['token'];
      //$token = bin2hex(random_bytes(50));
      //$token = $userdata['token'];
      $inresult = mysqli_query($conn,"insert into pass_reset4 values('','$email','$token')"); 

      //$subject = "";
      $body = "Hi,$name.Click here to reset your password http://localhost/WebProject/reset4.php?$token ";

      //$to_email = "farhanaaktersuci@gmail.com";
      $subject = "Password Reset";
     // $body = "Hi, This is test email send by PHP Script";
      $send_mail = "From: farhanaaktersuci@gmail.com";

if (mail($email, $subject, $body, $send_mail)) {
    $_SESSION['msg'] = "check your mail to reset your password $email";
    header('location:login4.php');
} else {
    echo "Email sending failed...";
}
   }
   else{
       echo "Something went wrong";
   }



   }
   ?>

    <div class="container">
        <form name="form" action="" method="post">
            <p>Forgotten Password?</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <div class="form-control">
                <label for="email">Email address</label>

                <input type="email" name = "email" id="email" placeholder="Enter here" required>
                </div>

                <!--<label for="password">Email address</label>
                <input type="text" name="email" id="email" placeholder="Enter here">
            </div>-->
            <br>

            <div class="form-control">
                
                    <!--<input type="submit" value="Submit"
                    <button name="submit" value="submit" type="submit" onclick="hello()">Submit</button>  
                    <script>  
                    function hello(){  
                    alert("Check Your email");  
                    }  
                    </script>  
               -->
              <!-- <input type="submit" name="submit" value="submit" />-->
               
                <button type="submit" name = "submit" value = "submit">Submit</button>
                <br>
        
                
                
                <a href="index.php" id="forgot" style="text-align:right;">Back to home page?</a>
            </div>
            
            </div>
        </form>
        <br>
        <br>
        <br>


        <p class="coder" style="font-weight: 500;">
            Copyright 2016 JnU Information System,  All right reserved.
        </p>

    </div>

</body>

</html>