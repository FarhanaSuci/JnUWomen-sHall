
<!DOCTYPE html>
<html>
    <head>
        <title>Student Profile Page</title>
        
        <link rel="icon" href="jnu_logo2.png">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <style media="screen">
       
                .div1{
                        border: 1px solid black;
                        float: left;
                        width:600px;
                        padding:5px;
                        margin-top:8px;


                }
               
                .div2{
                        width:200px;
                        border:1px solid white;
                        max-height:70px;
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
    
    </head>
    
    

    <body style="background-color:azure;"> 
     
        
       <div class="header">

<?php include 'navbar.php' ?>
         </div>
            
     
    <div class="row" style="margin-left: 150px;">
                        <div class="col-md-4 mt-1">
                                <div class="card text-center sidebar">
                                <div class="left" style="margin-top: 50px;">
                                        
                                <img src="rahim.png" alt="user" width="250">
                                        <h3> 

</h3>
                                        <br>
                                        <h5> Provost haguuuuuuuuuuuuuuuuuuuuuuuuuu
             </h5>
                                        <br>
                                        <br>
                                        <br>
</div>
</div>
</div>




<div class="col-md-8 mt-1">
        <div class ="card mb-3 content" style="margin-right: 210px;">
        <h1 class="m-3 pt-3">News</h1>
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-3">
                
                                       
</div>

<div class="divmain">
        <?php
        
        include 'dbb.php';

        $sql="SELECT * from news order by id desc";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
                ?>

                <div class="div1">
                        <img src="image/<?php echo $info['image']; ?>" alt="" style="width:120px;
                        height:70px;
                        float: left;
                        margin-left:10px;
                        margin-top:10px">


                <div class="div2">
                        <?php echo $info['news']; ?>>
                </div>
                <div class="div3">
                        
                        <label id="label2"> <?php echo($info['date']); ?> </label><br><br>
                        

                  </div>
                  <form class= "" action="full_news.php" method="post">
                  <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
                  <input id="readfullnews"type="submit" name="fullnews" value="view full news">
                  </form>




                </div>





        <?php
        


        }
        ?>

</div>
</div>
</div>

</body>

</html>

</div>
</div>
</div>
</div>
</div>



<div class="footer">

<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>