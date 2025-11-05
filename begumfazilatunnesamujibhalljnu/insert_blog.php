<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insert blog</title>

  
   <style media="screen">
   
       textarea{
             width:100%;
             height:100%;
             font-size:20px;
             padding-left:1.5%;
             padding-right:2%;
             padding-top:1.5%;
                }
      

        #tx1{
            width:100%;
            height:50px;
            font-size: 15px;
            padding-right: 1%;
        }
        #tx2{
            width:100%;
            height:330px;
            font-size: 16px;
            padding-right: 2%;
        }

       input[type=file]{
         font-size:18px;
                      }
      input[type=submit]
                        {
           font-size:18px;
           font-weight:bold;
                        }
        input[type=submit]:hover
                        {
           background-color: teal;
           color: #fff;
           font-size: 20px;
                        }
      </style>
                        
</head>

<body style="background-color:azure;"> 
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center"><?php include 'navbarStudents.php' ?></div><br>
<center><h2 style="color:teal;font-weight:bold">Blog Submission Form</h2></center><hr>
  <div class="" style=" border:2px solid black;  width:60%; background-color:darkcyan;
                                margin-left:22%;
                                margin-right:14%;
                                margin-top:3%;
                                margin-bottom:3%;
                                padding:2% 3.7%;">
    <form class="" action="insert_blog.php" method="post" enctype="multipart/form-data"><br>
    <textarea name="written_by" id="tx1"  rows="20" cols="20" required disabled>
     Name: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?> </textarea>
    <textarea name="writer_id" id="tx1"  rows="20" cols="20"required disabled>
    Id: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["id"] ;?> <?php } ?> </textarea>
    <textarea name="writer_department" id="tx1"  rows="20" cols="20"  required disabled>
    Department: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["department"] ;?> <?php } ?> </textarea>
    <textarea name="writer_session" id="tx1"  rows="20" cols="20" required disabled>
    Session: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["session"] ;?> <?php } ?> </textarea>

    <textarea name="headline" id="tx1"  rows="20" cols="20" placeholder="Enter headline" required></textarea>
    <textarea name="blog" id="tx2"  rows="20" cols="20" placeholder="Enter Blog and upload relevant image in the field felow" required></textarea><br><br>
    <input type="file" name="image" value=""required><br><br>
    <center><input type="submit" name="submit" value="Submit"></center>

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
       $headline=$_POST['headline'];
        $blog=$_POST['blog'];
        $written_by=$_SESSION["name"] ;
        $writer_id=$_SESSION["id"] ;
        $writer_department=$_SESSION["department"] ;
        $writer_session=$_SESSION["session"] ;
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO blogs(headline,blog,written_by,writer_id,writer_department,writer_session,image)
         values('$headline','$blog','$written_by','$writer_id','$writer_department','$writer_session','$image')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("Your Blog has been published Successfully!");
        window.location.href="blogs_students.php";
        </script>'
;

}

?>
</div><br>

<div class="footer"> <?php include 'footer.php' ?> </div>
 </body> 
</html>