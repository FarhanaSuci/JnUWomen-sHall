
<!DOCTYPE html>
<html>
 <head>
  <title>Blogs</title>   
    <style media="screen">
      .div1{
        border: 1px solid black;
        float: left;
        width:96%;
        padding:5px;
        margin-top:8px;
        height:40%
             }
               
       .div2{
         width:200px;
         border:1px solid white;
         max-height:90px;
         overflow:hidden;
         margin-top:10px;
         margin-left:10px;
         padding:5px;
         font-size:15px;
         font-weight:bold;
         float:left;
                }
       .divmain{
         margin-left:5px;
         height:320px;
                }
       .div3{
          float:right;
          border:1px solid white;
          margin-top: 20px;
          margin-left:-200px;
            }
               
#label2{
    font-size:18px;
    font-weight:bold;
}
form{
    margin-top:50px;
    float:right;
}
#readfullnews{
    font-size:15px;
    font-weight:bold;

}

#label2{
    font-size:18px;
    font-weight:bold;
}
form{
    margin-top:50px;
    float:right;
}
#readfullnews{
    font-size:15px;
    font-weight:bold;

}

 </style>
   <link rel="stylesheet"href="font.css">

</head>
    
<body style="background-color:azure;">     
<div id="HT_cp">      
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbarHouseTutors.php' ?> </div>
     
<div class="img" style=" position: relative; text-align: center;">
<img src="blog.png" alt="contact information" style="height:480px; width:100%">
<a href="#"class="centered"style="font-size:40px;color:#3B3B3B;
 position: absolute;top:34%;left: 50%;transform: translate(-50%, -50%);"></a>
</div>


<div class="row" style="margin-left: 24%;margin-top:4%"><div class="col-md-8 mt-1">
        <div class ="card mb-3 content" style="margin-right: 8%; width:98%">
        <h1 class="m-3 pt-3">Blogs</h1>
         <div class="card-body">
         <div class="row">
          <div class="col-md-3">
                
                                       
</div>

<div class="divmain">
 <?php  include 'db_conn.php';
  $sql="SELECT * from blogs order by serial desc";
  $query=mysqli_query($conn,$sql);
  while($info=mysqli_fetch_array($query)){ ?>
  <div class="div1">
   <img src="image/<?php echo $info['image']; ?>" alt="" style="width:30%; height:86%; float:left; margin-left:10px; margin-top:10px">
    <div class="div2">
     <?php echo $info['headline']; ?>
    </div>
    <div class="div3">
    <label id="label2"> <?php echo $info['date']; ?> </label><br><br>        
    </div>
   <form class= "" action="full_blog_houseTutors.php" method="post">
   <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden>
   <input id="readfullnews"type="submit" name="blog" value="Read full blog">
   </form>
     </div>
    <?php  } ?>

            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
<br>
<div class="footer">

<?php include 'footer.php' ?>
         </div></div>
    </body>
    
</html>