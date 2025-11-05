<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insert Club Information</title>
  
   <style media="screen">
       textarea{
             width:98%;
             height:100%;
             font-size:20px;
             padding-left:2%;
             padding-right:2%;
             padding-top:1%;
                }

        #tx1{
            width:98%;
            height:50px;
            font-size: 16px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
        }
        #tx2{
            width:98%;
            height:340px;
            font-size: 16px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
            margin-top: 1%;
        }

       input[type=file]{
         font-size:18px;
                      }
      input[type=submit]
                        {
           font-size:20px;
           font-weight:bold;
           margin-left:44%;
                        }
      </style>
                        
</head>

<body style="background-color:azure;"> 
<div id="AdminHome">
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarAdmin.php' ?></div>

  <div class="" style=" border:2px solid black;  width:60%;
                                margin-left:22%;
                                margin-right:14%;
                                margin-top:3%;
                                margin-bottom:3%;
                                padding:2%;">
    <form class="" action="insert_clubs.php" method="post" enctype="multipart/form-data">
    

    <textarea name="club_name" id="tx1"  rows="20" cols="20" placeholder="Enter club name" required></textarea>
    <textarea name="about" id="tx2"  rows="20" cols="20" placeholder="Enter about club" ></textarea>
    <textarea name="link_read_more" id="tx1"  rows="20" cols="20" placeholder="Enter related link" ></textarea><br><br>
<br><br>
    <input type="file" name="image" value=""><br><br>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
        $club_name=$_POST['club_name'];
        $about=$_POST['about'];
        $link_read_more=$_POST['link_read_more'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO clubs(club_name,about,link_read_more,image)
         values('$club_name','$about','$link_read_more','$image')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("A new club information has been added in club-list.");
        window.location.href="#";
        </script>'
;

}

?>
</div><br>

<div class="footer"> <?php include 'footer.php' ?> </div>
</div>
 </body> 
</html>