<!DOCTYPE html>
<html lang="en">
<head>
<title>Achievements</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    
</head>
</head>
<body style=" background-color: azure;">

<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStaff.php'?></div>
<div class="img" style=" position: relative; text-align: center;">
<img src="achievement.png" alt="" style="height:480px; width:100%">
<a href="#"class="centered"style="font-size:40px;color:#3B3B3B;
 position: absolute;top:41%;left: 50%;transform: translate(-50%, -50%);">
</a>
</div>    

<h2 style="color:darkcyan;margin-top:2%"><center><u>Achievements</u></center></h2>

<div class="row row-cols-1 row-cols-md-2 g-2" style="margin-left: 20%; margin-right:14%;margin-top:2%">
 <?php
include 'db_conn.php';
$sql="SELECT * from achivments order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
<div class="col">
    <div class="card h-100" style="width:85%">
      <img src="image/<?php echo $info['image']; ?>" class="card-img-top" style="height: 67%;"  alt="achievements"/>
      <div class="card-body">
        <h5 class="card-title"> <?php echo $info['achivment_name']; ?> <br><?php echo $info['date']; ?></h5>
        <p class="card-text">
        </p>
        <div class="card-footer" style="margin-bottom:1%"> <a href="<?php echo $info['link_read_more']; ?>" class="btn btn-secondary">View Detail</a>
</div>
      </div>
    </div>
  </div>

<?php
}
?>
</div>
<br>


<div class="footer">
<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>