<!DOCTYPE html>
<html lang="en">
<head>
<title>All Provosts</title>
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</head>

<body style=" background-color: azure;">
<div id="AdminHome">

<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarAdmin.php' ?></div>
<div class="img" style=" position: relative; text-align: center;">
<img src="provost.png" alt="" style="height:480px; width:100%">
<a href="#"class="centered"style="font-size:40px;color:#3B3B3B;
 position: absolute;top:41%;left: 50%;transform: translate(-50%, -50%);">
</a>
</div>    


<h2 style="margin-top:2%;color:darkcyan;margin-bottom:1%"><center>All Provosts</center></h2><hr><br> <div class="row row-cols-1 row-cols-md-2 g-5" style="margin-left:20%;margin-right:18%;margin-bottom:3%">

<?php
include 'db_conn.php';
$sql="SELECT * from provosts order by serial desc";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>

  <div class="col">

    <div class="card h-100" style="width:92%">
    <img src="<?php echo $info['image']; ?>" class="card-img-top" style="height:370px"/>
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $info['name']; ?></b></h5>
        <p class="card-text">
        <ul class="list-group list-group-light list-group-small">
          <li class="list-group-item"><b>Department: </b><?php echo $info['department']; ?></li>
          <li class="list-group-item"><b>Tenure from: </b><?php echo $info['tenure_from']; ?></li>
          <li class="list-group-item"><b>Tenure to: </b><?php echo $info['tenure_to']; ?></li>
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
         </div></div>
    </body>
    
</html>