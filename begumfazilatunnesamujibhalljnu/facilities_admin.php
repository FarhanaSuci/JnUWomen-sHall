<!DOCTYPE html>
<html lang="en">
<head>
<title>Facilities</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    
    <link rel="stylesheet"href="body.css">
</head>

<body style="background-color:azure;"> 
<div id="AdminHome">
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarAdmin.php' ?></div>
<div class="slider"><?php include 'slider.php' ?></div>

<h2 style="color:darkcyan"><center>Facelities</center></h2><hr>

<div class="row row-cols-1 row-cols-md-2 g-2" style="margin-left: 20%; margin-right:14%">
 <?php
include 'db_conn.php';
$sql="SELECT * from facilities order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
<div class="col">
    <div class="card h-100" style="width:86%">
    <img src="image/<?php echo $info['image']; ?>"  class="card-img-top" style="height: 67%;" alt="facility"/>
      <div class="card-body">
        <h5 class="card-title"><?php echo $info['facility_name']; ?></h5>
        <p class="card-text">
        <?php echo $info['about']; ?>
        </p>
        <div class="card-footer" style="margin-bottom:1%"> 
        <a href="<?php echo $info['link_read_more']; ?>" class="btn btn-secondary">View Detail</a>
</div>
      </div>
    </div>
  </div>

<?php
}
?>
</div>
<br>
</div>

<div class="footer">
<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>