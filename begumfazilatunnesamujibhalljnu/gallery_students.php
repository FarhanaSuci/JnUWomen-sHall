<!DOCTYPE html>
<html lang="en">
<head>
<title>Photo Gallery</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/zoom-in.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="stylesheet"href="body.css">


  
</head>

<body style="background-color:azure;"> 

<style>
div.gallery img {
  width: 100%;
  height: 300px;
  margin-bottom: 3.8%;
  transition: .5s ease;
  backface-visibility: hidden;
  opacity: 1;
}

.middleGallery {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}




.gallery:hover .middleGallery {
  opacity: 1;
}
.gallery img:hover {
  transform: scale(.9);
  transition: 1s transform;
    border-radius: 5px;
    opacity: 0.3;
}
  
* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 32.99999%;
  position: relative;
}

.textGallery {
  color: black;
  font-size: 16px;
  cursor: pointer;
  
}


@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


</style>

<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStudents.php' ?></div>
<div class="sl"><?php include 'slider_gallery.php' ?></div><hr>

<div class="fullgallery"style="margin-top:5%;margin-bottom:2%;margin-left:10%;margin-right:10%">

<?php
        
        include 'db_conn.php';
        $sql="SELECT * from photoGallery order by serial desc";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>

<div class="responsive">
  <div class="gallery">
      <img src="image/<?php echo $info['image']; ?>" alt="<?php echo $info['alt']; ?>" width="600" height="400">
      
      <div class="middleGallery">
      <a target="_blank" href="image/<?php echo $info['image']; ?>">
      <div class="textGallery">
      <i class="gg-zoom-in" ></i></div>

       </a>
  </div>
</div>

</div>

  <?php } ?>



<div class="clearfix"></div>


</div>

<div class="footer">
<?php include 'footer.php' ?>
  </div>
 </body>    
</html>