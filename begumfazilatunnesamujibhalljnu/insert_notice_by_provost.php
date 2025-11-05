<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insert Notice</title>
  <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

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
            height:60px;
            font-size: 16px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
        }
                           
       input[type=file]{
        margin-top: 5%;
         font-size:18px;
                      }
      input[type=submit]
                        {
           font-size:18px;
           font-weight:bold;
           margin-left:44%;
                        }
      </style>
      <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
                        
</head>

<body style="background-color:azure;"> 
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbarProvost.php' ?> </div>
  <div class="" style=" border:2px solid black; width:52%;
                                margin-left:25%;
                                margin-right:18%;
                                margin-top:3%;
                                margin-bottom:3%;
                                padding:2%;">
    <form class="" action="insert_notice_by_provost.php" method="post" enctype="multipart/form-data">
    <textarea name="headline" id="tx1"  rows="20" cols="20" placeholder="Enter headline" required></textarea>
    <input type="file" name="image" value=""><br><br>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
       $headline=$_POST['headline'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO notice(headline,image) values('$headline','$image')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("A new notice has been published.");
        window.location.href="#";
        </script>'
;

}

?>
</div>

<div class="footer">
<?php include 'footer.php' ?> </div>

</body>
</html>