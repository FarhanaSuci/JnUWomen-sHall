<!DOCTYPE html>
<html>
    <head>
        <style>
                
                .div2{
                        width:66%;
                        margin-top:50px;
                        margin-bottom:70px;
        
                        
                }
                .div1{
                        
                        margin-top:60px;
                        

                }
               
                </style>
        <title>Full Blog</title>
        <link rel="stylesheet"href="font.css">
        <link rel="stylesheet"href="body.css">

</head>
<body style="background-color:azure;">
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbar.php' ?> </div>
 <?php 
 include 'db_conn.php';
        $serial=$_POST['serial'];
        $sql="SELECT * from blogs where serial='$serial'";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>
        <div class="div1">
        <p style="font-size:26px;font-weight:bold;margin-left:16%;margin-bottom:4%;margin-right:20%" >
         <?php echo $info['headline'];?><br><?php echo $info['date'];?></p>
        <img  src="image/<?php echo $info['image']; ?>" alt="" style="width:66%;margin-left:16%; height:16%;">
        <div class="div2" style="font-size:16px; margin-left:16%;margin-right:16%;white-space:pre-line; text-align:justify">
         <?php echo $info['blog']; ?>
        </div>
        <div class="div3" style="font-size:18px;font-weight:bold; margin-left:16%;margin-right:20%;margin-top:6%;margin-bottom:5%">
         <?php echo $info['written_by']; ?><br>
         <?php echo $info['writer_id']; ?><br>
          <?php echo $info['writer_department']; ?><br>
         <?php echo $info['writer_session']; ?><br>
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