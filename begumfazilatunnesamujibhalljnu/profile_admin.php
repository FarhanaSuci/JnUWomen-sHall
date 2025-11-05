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
<div id="AdminHome">
<div class="headr">
   <?php include 'header.php' ?></div>
    <div class="nv" style="align-content:center">
    <?php include 'navbarAdmin.php' ?></div>
         

    <div class="row" style="margin-left: 170px;">
     <div class="col-md-4 mt-1">
      <div class="card text-center sidebar"style="height:94.5%;">
        <div class="left">
         <img src="<?php echo $query = "".$_SESSION["image"] ;?>" alt="user" width="300">
          <h3> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?></h3>
<br>
  <h5> Working as an IT Admin<br><br>from <?php
if($_SESSION["id"]) {
?>
<?php echo $query = "".$_SESSION["tenure_from"] ;?>

<?php
}
?>              </h4> <br><br>
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

<div class="row"> <div class="col-md-3"> <h5>Gender</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["gender"] ;?> <?php } ?>           
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
<hr>

<div class="row"> <div class="col-md-3"> <h5>Contact no</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["phnNo"] ;?> <?php } ?>           
 </div>
</div>
<hr>

<div class="row"> <div class="col-md-3"> <h5>Email</h5> </div> <div class="col-md-9 text-secondary">
<?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["email"] ;?> <?php } ?>           
 </div>
</div>

</div>
</div>
</div>
</div>


<div class="footer">

<?php include 'footer.php' ?>
         </div></div>
    </body>
</html>