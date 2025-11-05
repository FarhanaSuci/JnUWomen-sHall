<!DOCTYPE html>
<html>
 <head>
    <title>Profile</title>
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

    <link rel="icon" href="jnu_logo2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

 </head>
    
    
<body style="background-color:azure;"> 
<div id="HT_cp">
<div class="headr">
   <?php include 'header.php' ?></div>
    <div class="nv" style="align-content:center">
    <?php include 'navbarHouseTutors.php' ?></div>

<div class="row" style="margin-left: 160px;">
 <div class="col-md-4 mt-1"style="width:32%">
  <div class="card text-center sidebar">
   <div class="left">
    <img src="<?php echo $query = "".$_SESSION["image"] ;?>" alt="user" width="80%" style="height:70%;margin-top:4%;margin-bottom:3%">
          <h5> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?></h5> <br>
<h5 style="font-family: Cambria; color:darkslategrey; margin-bottom:77.5%">
joined as House Tutor from <?php ?> <br> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["tenure_from"] ;?> <?php } ?> 
<br>
Assigned Floor no: <?php ?> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["assigned_floor_no"] ;?> <?php } ?> 
    </h5>                                                  
  </div>
 </div>
</div>


<div class="col-md-8 mt-1">
 <div class ="card mb-3 content" style="margin-right: 150px;">
   <h1 class="m-3 pt-3">About</h1>
   <div class="card-body">
    <div class="row">
     <div class="col-md-3">
      <h5>Full Name</h5>
</div>
<div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?>       
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Id</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["id"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Department</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["department"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Designation</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["designation"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Room no</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["roomNo"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Seat no</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["seatNo"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Assigned floor no</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["assigned_floor_no"] ;?> <?php } ?>           
 </div>
</div>
<hr>


<div class="row"> <div class="col-md-3"> <h5>Email</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["email"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Contact no</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["phnNo"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Tenure from</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["tenure_from"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Tenure to</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["tenure_to"] ;?> <?php } ?>           
 </div>
</div>


</div>
</div>
</div>
</div>


<div class="footer"> <?php include 'footer.php' ?> </div>
  </div>
 </body>    
</html>