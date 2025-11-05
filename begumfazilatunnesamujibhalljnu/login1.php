
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- style sheet link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="login.php" method="post" name="form">
            <p>Login as Student</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
            <div class="form-control">
                <label for="username">User Id</label>
                <input type="text" name="id" id="username" placeholder="Enter here" required>
            </div>
            
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter here" required>
            </div>
            <br>

            <div class="form-control">
                <button type="submit">Login</button>
                <br>
        
                <a href="forgotten.php" id="forgot" style="text-align:center;">Forgotten Password?</a>
                <br>
                
                
                <a href="index.php" style="text-align:right;">Back to Homepage</a>
            </div>
        </form>
        <br>
        <br>
        <br>


        <p class="coder" style="font-weight: 500;">
            Copyright 2016 JnU Information System,  All right reserved.
        </p>

    </div>
</form>

</body>

</html>