<!DOCTYPE html>
<html lang="en">
<head>

<title>Slider</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
   <style>
    .carousel-control-prev-icon:hover {
  background-color: #ddd;
  color: black;
  border-radius: 50%;
}
.carousel-control-next-icon:hover {
  background-color: #ddd;
  color: black;
  border-radius: 50%;
 
}

#previous-round:hover{
  background-color:white;
  color: black;
  border-radius: 50%;
  height: 8.7%;
  width: 37%;
  
}

#next-round:hover{
  background-color:white;
  color: black;
  border-radius: 50%;
  height:8.7%;
  width: 37%;
}


    .carousel-item img{
      height:509px;
    }
   
 @media only screen and (max-width: 700px) {
      #previous-round{
      background-color:white;
      color: black;
      border-radius: 50%;
      height: 8.7%;
     width: 67%;
  
}

#next-round {
  background-color:white;
  color: black;
  border-radius: 50%;
  height:8.7%;
  width: 67%;
}
 }

    </style>
</head>
<body>
  <div class="slider" style="width:64%; margin-left:18% ; margin-right: 16%; margin-top:1%; margin-bottom:2%">
  <div id="carouselMaterialStyle" class="carousel slide " data-mdb-ride="carousel" >
 

  <div class="carousel-inner rounded-5 shadow-4-strong">
  <?php
  include 'db_conn.php';
        $sql="SELECT * from photoGallery order by serial desc LIMIT 1";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>
    <div class="carousel-item active" >
      <img src="image/<?php echo $info['image']; ?>" class="d-block w-100" alt="" style="height:550px"/>
      <div class="carousel-caption d-none d-md-block" >
        
      </div>
    </div>

    <?php
        }
        ?>

    <?php
            
        include 'db_conn.php';
        
        $sql="SELECT * from photoGallery order by serial desc LIMIT 1,10000";

        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>
    <div class="carousel-item" >

      <img src="image/<?php echo $info['image']; ?>" alt="" class="d-block w-100"/>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="background-color:white; color:black"></h5>
      </div>
        </div>


     
     

      <?php
        }
        ?>

    
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
  <span class="carousel-control-prev-icon" id="previous-round" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
  <span class="carousel-control-next-icon" id="next-round" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</body>
</html>