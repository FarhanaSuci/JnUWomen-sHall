<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <title>Insert image in Photo Gallery</title>
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <meta charset="utf-8">
     <style media="screen">
                        textarea{
                                width:98%;
                                height:100px;
                                font-size:20px;
                                padding-left:2%;
                                padding-right:2%;
                                padding-top:1%;


                        }
                      
                        input[type=file]{
                                font-size:20px;
                        }
                        input[type=submit]
                        {
                                font-size:20px;
                                font-weight:bold;
                                margin-left:46%;
                        }
                        </style>
                        
</head>

<body style="background-color:azure;"> 
<div id="AdminHome">
<div class="headr">
<?php include 'header.php' ?></div>
<div class="nv">
<?php include 'navbarAdmin.php' ?>
</div>

 <div class="" style=" border:2px solid black;
                                width:60%;
                                margin-left:20%;
                                margin-right:20%;
                                margin-top:50px;
                                padding:2%;" >
                <form class="" action="insert_in_photoGallery.php" method="post" enctype="multipart/form-data">
                        <textarea name="alt"  rows="20" cols="80" placeholder="Enter alter caption" ></textarea><br><br>
                        <input type="file" name="image" value=""required><br><br>
                        <input type="submit" name="submit" value="Submit">

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
        $alt=$_POST['alt'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO photoGallery(alt,image) values('$alt','$image')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("A new image has been added in Photo Gallery.");
        window.location.href="gallery_admin.php";
        </script>'
;

}

?>
</div>
</div>
</body>
</html>
