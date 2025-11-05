<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet"href="font.css">

        <style>
                
                .div2{
                        width:750px;
                        margin-top:50px;
                        margin-bottom:70px;
        
                        
                }
                .div1{
                        
                        margin-top:60px;
                        

                }
               
                </style>
                <link rel="stylesheet"href="body.css">

        <title>Full news</title>
</head>
<body style="background-color:azure;"> 
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbar.php' ?> </div>
 <?php 
 include 'db_conn.php';
        $serial=$_POST['serial'];
        $sql="SELECT * from news where serial='$serial'";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>
        <div class="div1">
        <p style="font-size:26px;font-weight:bold;margin-left:26%;margin-bottom:4%;margin-right:20%" >
         <?php echo $info['headline'];?><br><?php echo $info['date'];?></p>
        <img  src="image/<?php echo $info['image']; ?>" alt="" style="width:50%;margin-left:26%; height:20%;">
        <div class="div2" style="font-size:20px;font-weight:bold; margin-left:26%;margin-right:20%;white-space:pre-line">
         <?php echo $info['news']; ?>
        </div>
        </div>
                <?php
        }
        
        ?>
        <div class="footer">

<?php include 'footer.php' ?>
         </div>
</body>
</html>