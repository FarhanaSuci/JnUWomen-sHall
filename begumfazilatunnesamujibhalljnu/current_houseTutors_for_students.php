<!DOCTYPE html>
<html lang="en">
<head>

<title>Current House-Tutors</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="stylesheet"href="body.css">

</head>

<body style="background-color:azure;"> 
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center">
<?php include 'navbarStudents.php' ?></div>
<h2 style="margin-top:1.3%;color:black;margin-bottom:1%"><center>House-Tutors</center></h2><hr>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 15%;margin-right:10%;margin-bottom:3%;margin-top:1%">
<?php
include 'db_conn.php';
$sql="SELECT * from current_house_tutors order by serial asc";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
 <div class="col">
    <div class="card h-100" style="width:98%">
      <img src="<?php echo $info['image']; ?>" class="card-img-top" style="height:330px"/>
      <div class="card-body">
        <h4 class="card-title"><b><?php echo $info['name']; ?></b></h4>
        <?php echo $info['house_tutor_designation']; ?>
        <p class="card-text">
        <ul class="list-group list-group-light list-group-small">
          <li class="list-group-item"><b>Department: </b><?php echo $info['department']; ?></li>
          <li class="list-group-item"><b>Designation: </b><?php echo $info['designation']; ?></li>
          <li class="list-group-item"><b>Assigned floor no: </b><?php echo $info['assigned_floor_no']; ?></li>
          <li class="list-group-item"><b>Contact no: </b><?php echo $info['phnNo']; ?></li>
          <li class="list-group-item"><b>Email: </b><?php echo $info['email']; ?></li>
        </ul></p>
    </div>
    <div class="card-footer">
    <section class="mb-4">
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
  </div>

<?php
}
?>
</div>

<div class="footer">
<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>