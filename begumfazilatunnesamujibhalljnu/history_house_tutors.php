<!DOCTYPE html>
<html lang="en">
<head>
<title>History</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="stylesheet"href="font.css">
    <link rel="stylesheet"href="body.css">

</head>
</head>
<body style="background-color:azure;"> 
<div id="HT_cp">
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarHouseTutors.php' ?></div>
<div class="slider"><?php include 'slider.php' ?></div>

 <?php
include 'db_conn.php';
$sql="SELECT * from history order by serial desc LIMIT 1";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
<div class="row">
<h2 style="margin-left:16%; margin-top:2%;color:black">History</h2><hr>
<div class="history" >
<p style="margin-left:16%;margin-right:12%;margin-bottom:2%;margin-top:1%;font-size:17px;text-align:justify; color:black;
font-family:NrtRegular"><?php echo $info['history']; ?></p></div>
</div>

<?php
}
?>
<br>


<div class="footer">
<?php include 'footer.php' ?></div>
  </div>
 </body>
</html>