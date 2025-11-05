<!DOCTYPE html>
<html>
 <head>
    <title>Profile</title>
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

    </head>
    
<body style="background-color:azure;"> 
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStudents.php' ?></div>
     
<div class="row" style="margin-left: 160px;"><br>
 <div class="col-md-4 mt-1">
  <div class="card text-center sidebar"style="height:98.75%;">
   <div class="left">
    <img src="rahim.png"alt="user"width="300" style="margin-top:8%"><br>
    <h4 style="font-family:Georgia,'Times New Roman', Times, serif; color:black;margin-top:8%">
    <?php if($_SESSION["id"]) {?><?php echo $query = "".$_SESSION["name"] ;?><?php } ?></h4> <br>
    Floor no: <?php ?> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["floorNo"] ;?> <?php } ?> <br>  </h5>
                                                                        
  </div>
 </div>
</div>

<div class="col-md-8 mt-1"> <div class ="card mb-3 content" style="margin-right: 140px;">
 <h1 class="m-3 pt-3">About</h1>
  <div class="card-body"> <div class="row"> <div class="col-md-3"> <h5>Full Name</h5>
</div>
<div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?>           
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"><h5>Id</h5> </div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["id"] ;?> <?php } ?>         
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"> <h5>Department</h5> </div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["department"] ;?> <?php } ?>      
 </div>
</div> <hr>
<div class="row"> <div class="col-md-3"> <h5>Session</h5> </div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["session"] ;?> <?php } ?>           
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"><h5>Date-of-Birth</h5></div><div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["date_of_birth"] ;?> <?php } ?>  
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"> <h5>Floor No</h5> </div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["floorNo"] ;?> <?php } ?>
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Room No</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["roomNo"] ;?> <?php } ?>
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Seat No</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["seatNo"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Contact No</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["phnNo"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Seat expire date</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["seat_expire_date"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Email</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["email"] ;?> <?php } ?>
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Maritial Status</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["maritial_status"] ;?> <?php } ?>
 </div>
  </div><hr>

<?php
include 'db_conn.php';
$floorNo= $_SESSION['floorNo'];
$sql="SELECT name,email,phnNo from current_house_tutors where current_house_tutors.assigned_floor_no= $floorNo ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>

<div class="row"><div class="col-md-3"><h5>House-Toutor name</h5></div><div class="col-md-9 text-secondary">
 <?php echo $info['name']; ?>
 </div>
</div><hr>

<div class="row"><div class="col-md-3"><h5>House-Toutor email</h5></div><div class="col-md-9 text-secondary">
  <?php echo $info['email']; ?>
 </div>
</div><hr>

<div class="row"><div class="col-md-3"><h5>House-Toutor Contact no</h5></div><div class="col-md-9 text-secondary">
    <?php echo $info['phnNo']; ?>
 </div>
</div>
<?php
}
?>

    </div>
   </div>
  </div>
 </div>

<div class="footer"> <?php include 'footer.php' ?> </div>
 </body> 
</html>