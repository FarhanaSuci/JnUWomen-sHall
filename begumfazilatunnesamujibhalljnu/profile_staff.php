<!DOCTYPE html>
<html>
 <head>
    <title>Profile</title>
    <link rel="icon" href="jnu_logo2.png"> 
</head>    
    
<body style="background-color:azure;">          
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStaff.php' ?></div>

<div class="row" style="margin-left: 160px;"><br>
 <div class="col-md-4 mt-1">
  <div class="card text-center sidebar"style="height:98%;">
   <div class="left"style="">
    <img src="rahim.png"alt="user"width="300" style="margin-top:8%"><br>
    <h4 style="font-family:Georgia,'Times New Roman', Times, serif; color:black;margin-top:8%">
    <?php if($_SESSION["id"]) {?><?php echo $query = "".$_SESSION["name"] ;?><?php } ?></h4> <br>
   <br>
                                                                        
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

<div class="row"> <div class="col-md-3"> <h5>Designation</h5> </div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["staffType"] ;?> <?php } ?>      
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"><h5>Date-of-Birth</h5></div><div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["date_of_birth"] ;?> <?php } ?>  
 </div>
</div> <hr>

<div class="row"> <div class="col-md-3"> <h5>Gender</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["gender"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Contact No</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["phnNo"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Wirking-hour</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["working_hr"] ;?> <?php } ?>     
 </div>
</div><hr>

<div class="row"> <div class="col-md-3"> <h5>Email</h5></div> <div class="col-md-9 text-secondary"> <?php if($_SESSION["id"]) { ?>
<?php echo $query = "".$_SESSION["email"] ;?> <?php } ?>
 </div>
</div><hr>
    </div>
   </div>
  </div>
 </div>

<div class="footer"> <?php include 'footer.php' ?> </div>
 </body> 
</html>