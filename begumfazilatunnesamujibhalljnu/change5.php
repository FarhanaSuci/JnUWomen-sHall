<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['password'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- style sheet link  -->
    <link rel="stylesheet" href="change.css">
</head>

<body>
    <div class="container">
        
        <form action="change5_p.php" method="post">
            <p>Change Your Password</p>
            <br>
            <br>
            <br>
            <br>
            

            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

             <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>



            <div class="form-control">
                <label for="password">Current password</label>
                <input type="password" name="op" id="password" placeholder="Enter here" required>
            </div>
            
            <div class="form-control">
                <label for="password">New password</label>
                <input type="password" name="np" id="password" placeholder="Enter here"required>
            </div>
            <div class="form-control">
                <label for="password">Re-type new password</label>
                <input type="password" name="c_np" id="password" placeholder="Enter here"required>
            </div>
            <br>

            <div class="form-control">
                <button type="submit">Change</button>
                <br>
        
                <a href="home_admin_without_alert.php" id="forgot" style="text-align:center;">Back to Homepage?</a>
                <br>
                
                
                
            </div>
        </form>
        <br>


        <p class="coder" style="font-weight: 500;">
            Copyright 2016 JnU Information System,  All right reserved.
        </p>

    </div>

</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>