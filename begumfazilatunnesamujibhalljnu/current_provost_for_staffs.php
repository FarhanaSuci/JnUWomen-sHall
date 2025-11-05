<!DOCTYPE html>
<html lang="en">
<head>
<title>Current Provost</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="stylesheet"href="font.css">
    <link rel="stylesheet"href="body.css">

</head>


<body style="background-color:azure;"> 
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStaff.php' ?></div>
<div class="slider"><?php include 'slider.php' ?></div>
<h2 style="color:black"><center>Provost</center></h2><hr>

<?php
include 'db_conn.php';
$sql="SELECT * from current_provost order by serial desc LIMIT 1";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>

<div class="info"style="margin-left:14%;margin-right:12%;margin-bottom:2%;margin-top:2%;font-size:16px;">
<div class="container overflow-hidden">
  <div class="row gx-3">
  <div class="col">
      <div class="p-3">
      <img  src="image/<?php echo $info['image']; ?>" alt="" style="width:66%;height:78%;"><br>
      <section class="mb-4" style="margin-top:2%;margin-left:8%;margin-right:10%">
      <!-- Linkedin -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="<?php echo $info['linkdnlink']; ?>" role="button"><i class="fab fa-linkedin-in"></i></a>
      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="<?php echo $info['googleScholarlink']; ?>" role="button"><i class="fab fa-google"></i></a>
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="<?php echo $info['fblink']; ?>" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="<?php echo $info['instalink']; ?>" role="button"><i class="fab fa-instagram"></i></a>
      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="<?php echo $info['twitterlink']; ?>"role="button"><i class="fab fa-twitter"></i></a>        
    </section>
   </div>
    </div>
    <div class="col">
      <div class="p-3" style="margin-top: 3%;">
       <p style="font-size:16px; font-family:Arial, Helvetica, sans-serif; color:black; margin-top:5%"> 
          <b style="font-size:20px;">Name: <?php echo $info['name']; ?></b> <br>
          <b style="font-size:20px;">Department: </b><?php echo $info['department']; ?> <br>
          <b style="font-size:20px;">Designation: </b><?php echo $info['designation']; ?> <br>
          <b style="font-size:20px;">Email: </b><?php echo $info['email']; ?> <br>
         </p>   
      </div>
      </div>
    </div>
  </div>
 </div>
</div>

<div class="row">
<h2 style="margin-left:16%; margin-top:2%;color:black">Biography</h2><hr>
<div class="biography" >
<p style="margin-left:16%;margin-right:12%;margin-bottom:2%;margin-top:1%;
font-size:17.7px;text-align:justify;color:black;font-family:NrtRegular"><?php echo $info['biography']; ?></p>
</div>
</div>

<?php
}
?>
<br>

<div class="footer">
<?php include 'footer.php' ?> </div>
 </body>
</html>