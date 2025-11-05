<!DOCTYPE html>
<html lang="en">
<head>

<title>Administrative Staffs</title>
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

<body style=" background-color: azure;">

<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center">
<?php include 'navbar.php' ?></div>
<h2 style="margin-top:1.3%;color:black;margin-bottom:1%"><center>Administrative Staff</center></h2><hr>
<div class="row row-cols-1 row-cols-md-2 g-4" style="margin-left:12%;margin-right:12%;margin-bottom:3%;margin-top:1%">
<?php
include 'db_conn.php';
$sql="SELECT * from staffs order by serial asc";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
 <div class="col">
  <div class="card h-100" style="width:100%">
   <img src="<?php echo $info['image']; ?>" class="card-img-top"style="margin-left:20%;margin-right:20%;margin-top:5%;width:60%;height:290px"/>
      <div class="card-body">
        <h4 class="card-title"><b><?php echo $info['name']; ?></b></h4>
        <?php echo $info['staffType']; ?><br>
        <p class="card-text">
        <ul class="list-group list-group-light list-group-small">
        <li class="list-group-item"><b>Gender: </b><?php echo $info['gender']; ?></li>
        <li class="list-group-item"><b>Contact No: </b><?php echo $info['phnNo']; ?></li>
        <li class="list-group-item"><b>Email: </b><?php echo $info['email']; ?></li>
        </ul></p>
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