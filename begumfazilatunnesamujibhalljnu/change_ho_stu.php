<!DOCTYPE html>
<html lang="en">
<head>
<title>  Home</title>
   <meta charset="UTF-8">
    <meta name="description" content="This is a Website for Jnu Women's Hall">
    <meta name="author" content="Team_Return_Zero">
    <meta name="keywords" content="Jnu Women's Hall, jnu women's hall, JnU Women's Hall,Jagannath University Women's Hall, Bangamata Begum Fazilunnesa Mujib Hall, Begum Fazilunnesa Mujib Hall">    
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

    <script>
  function showAlert() {
    alert ("Your Password has changed succesfully!");
  }
  function showAlert() {
    alert ("Your Password has changed succesfully!");
  }
  </script>
</head>
<body style="background-color: azure;" onload="showAlert()">
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbarStudents.php' ?> </div>
<div class="slider"> <?php include 'slider.php' ?> </div>
<br><br>
<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>About Us</center></h2><hr>
<?php
include 'db_conn.php';
$sql="SELECT * from intro order by serial desc LIMIT 1";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
<p style="font-size: 14px;margin-left:0%;margin-right:90%;margin-top:1%; text-align:justify;white-space:pre-line">
<?php 
$intro=$info['intro'];
$intro_show=substr($intro,0,5024)."...";
echo $intro_show; ?><br>
<a target="_blank" href="introduction_Students.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Read more</a>


</p>
<?php
}
?>
</div>

<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>About Our Honorable Provost</center></h2><hr>
<?php
include 'db_conn.php';
$sql="SELECT * from current_provost order by serial desc LIMIT 1";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
<div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="<?php echo $info['image']; ?>"
        alt="provost-image"
        class="img-fluid rounded-start"
        style="height:70%; margin-top:2%"
      /> <h5 style="margin-left:6.5%; margin-top:3.7%"><?php echo $info['name']; ?><br>
      <br> <a target="_blank" href="current_provost.php" class="btn btn-info  btn-lg" style="margin-left:26%">Details</a>
</h5>
    </div>
    <div class="col-md-8">
      <div class="card-body" style="margin-top:1%">
        <h4 class="card-title">Message from our Provost</h4><hr>
        <p class="card-text">
        <?php 
        $message_from_provost=$info['message_from_provost'];
        $message=substr($message_from_provost,0,3192)."...................";
        echo $message; ?>
        </p>
        <a target="_blank" href="messageProvost_students.php" class="btn btn-info">Read full message</a>
      
 
      </div>
    </div>
  </div>
</div>
    
<?php
}
?>
</div>

<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>Notice</center></h2><hr>

<div class="card text-center">
  <div class="card-header"><h3 style="color:teal;margin-top:1%">Notice Board</h3></div>
  <div class="card-body">
    <h5 class="card-title">
    <table class="table table-hover">
  <thead class="table-info">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Headline</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
 </h5>
 <?php
include 'db_conn.php';
$sql="SELECT  * from notice order by serial desc LIMIT 5";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
    <p class="card-text">
      <tbody>   
   <tr>
   <td><?php echo $info['date']; ?></td>
     <td ><?php echo $info['headline']; ?></td>
     <td><a target="_blank" href="<?php echo $info['image']; ?>" class="btn btn-info">Read full notice</a></td>
   </tr>
 </tbody>
 <?php
}
?>
</table></p>
  </div>
  <div class="card-footer" style="margin-bottom:1%"> <a target="_blank" href="notice_students.php" class="btn btn-lg btn-info">Read All notices</a>
</div>
</div>

</div>

<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>Hall in Numbers</center></h2><hr>

<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">
    <table class="table table-hover">
  <thead class="table-info">
    <tr>
      <th scope="col">Floors</th>
      <th scope="col">Rooms</th>
      <th scope="col">Seats</th>
      <th scope="col">Students</th>
    </tr>
    <tbody> 
    <tr>
     <td>17</td>
     <td>75</td>
     <td>570</td>
     <td>570</td>
   </tr></tbody>
  </thead>
 </h5>   
</table>
  </div>
  <div class="card-footer" style="margin-bottom:1%"></div>
</div>
</p>
</div>

<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>Facelities</center></h2><hr>
<div class="row row-cols-1 row-cols-md-2 g-2" style="margin-left: 6%;">
<?php
include 'db_conn.php';
$sql="SELECT * from facilities order by serial desc LIMIT 2";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
  <div class="col">
    <div class="card h-100" style="width:86%">
    <img src="image/<?php echo $info['image']; ?>"  class="card-img-top" style="height: 67%;" alt="facility"/>
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $info['facility_name']; ?></b></h5>
        <p class="card-text">
        <?php echo $info['about']; ?>
        </p>
        <div class="card-footer" style="margin-bottom:1%"> 
        <a target="_blank" href="facilities_students.php" class="btn btn-secondary">View Detail</a>
</div>
      </div>
    </div>
  </div>

<?php
}
?>
</div>
</div>


<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">
<h2 style="color:darkcyan"><center>Activities</center></h2><hr>
<div class="row row-cols-1 row-cols-md-2 g-2" style="margin-left: 6%;">
<?php
include 'db_conn.php';
$sql="SELECT * from clubs order by serial desc LIMIT 2";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
  <div class="col">
    <div class="card h-100" style="width:83%">
    <img src="image/<?php echo $info['image']; ?>"  class="card-img-top" style="height: 67%;" alt="club"/>
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $info['club_name']; ?></b></h5>
        <p class="card-text">
        <?php echo $info['about']; ?>
        </p>
        <div class="card-footer" style="margin-bottom:1%"> 
        <a target="_blank" href="clubs_students.php" class="btn btn-secondary">View Detail</a>
</div>
      </div>
    </div>
  </div>

<?php
}
?>
</div>
</div>


<div class="row" style="margin-top:5% ;margin-bottom:2% ;margin-left:10% ;margin-right:10%;">

<h2 style="color:darkcyan"><center>Photo Gallery</center></h2><hr>
<div class="pg">
<?php include 'gallery_for_homepage.php' ?>
  </div>
  <center><a target="_blank" href="gallery_students.php" class="btn btn-lg btn-info" style=" width:16%; ">View all photos</a></center>
</div>
        
    <div class="footer">

<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>