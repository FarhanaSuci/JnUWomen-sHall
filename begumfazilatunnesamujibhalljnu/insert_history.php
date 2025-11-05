<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insert History</title>
  <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

   <style media="screen">
       textarea{
        width:98%;
             height:100%;
             font-size:20px;
             padding-left:2%;
             padding-right:2%;
             padding-top:1%;
                }

        #tx1{
          width:98%;
            height:380px;
            font-size: 16px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
        }
    
      input[type=submit]
                        {
           font-size:18px;
           font-weight:bold;
           margin-left:44%;
                        }
      </style>
   
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>             
</head>

<body style="background-color:azure;"> 
<div id="AdminHome">
<div class="headr">
<?php include 'header.php' ?></div>
<div class="nv">
<?php include 'navbarAdmin.php' ?>
</div>

  <div class="" style=" border:2px solid black;  width:52%;
                                margin-left:24%;
                                margin-right:18%;
                                margin-top:3%;
                                margin-bottom:3%;
                                padding:2%;" >
    <form class="" action="insert_history.php" method="post" enctype="multipart/form-data">
    <textarea name="history" id="tx1"  rows="20" cols="20" placeholder="Enter history" required></textarea><br><br>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
        $history=$_POST['history'];
       

        $sql="INSERT INTO history(history) values('$history')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("History has benn updated.");
        window.location.href="#";
        </script>'
;

}

?>
</div>

<div class="footer">
<?php include 'footer.php' ?></div>
</div>
</body>
</html>