<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Insert Current House-Tutors</title>
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
            height:50px;
            font-size: 16px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
        }
       
        #tx2{
            width:48%;
            height:40px;
            font-size: 14px;
            padding-left: 1%;
            padding-right: 1%;
            padding-top: 1%;
            margin-top: 1%;
        }

       .lebel{
         margin-top:4%;
         font-size:18px;

       } 
        
        input[type=date]{
        margin-top:5%;
        font-size:16px;
                      }


       input[type=file]{
        margin-top:6%;
         font-size:18px;
                      }
      input[type=submit]
                        {
           font-size:20px;
           font-weight:bold;
           margin-left:42%;
                        }
      </style>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
                        
</head>

<body style="background-color:azure;"> 
<div id="AdminHome">
<div class="headr">
<?php include 'header.php' ?></div>
<div class="nv">
<?php include 'navbarAdmin.php' ?>
</div>
  <div class="" style=" border:2px solid black;   width:60%;
                                margin-left:22%;
                                margin-right:14%;
                                margin-top:3%;
                                margin-bottom:3%;
                                padding:2%;">
    <form class="" action="insert_current_houseTutors.php" method="post" enctype="multipart/form-data">
    <textarea name="name" id="tx1"  rows="20" cols="20" placeholder="Enter Name" required></textarea>
    <textarea name="id" id="tx1"  rows="20" cols="20" placeholder="Enter Id" required></textarea>
    <textarea name="department" id="tx1"  rows="20" cols="20" placeholder="Enter Department" required></textarea>
    <textarea name="designation" id="tx1"  rows="20" cols="20" placeholder="Enter Designation" required></textarea>
    <textarea name="phnNo" id="tx1"  rows="20" cols="20" placeholder="Enter Contact no" required></textarea>
    <textarea name="email" id="tx1"  rows="20" cols="20" placeholder="Enter Email" required></textarea>
    <textarea name="house_tutor_designation" id="tx1"  rows="20" cols="20" placeholder="Enter House-Tutor Designation" required></textarea>
    <textarea name="roomNo" id="tx1"  rows="20" cols="20" placeholder="Enter Room no" required></textarea>
    <textarea name="seatNo" id="tx1"  rows="20" cols="20" placeholder="Enter Seat no" required></textarea>
    <textarea name="assigned_floor_no" id="tx1"  rows="20" cols="20" placeholder="Enter Assigned floor no" required></textarea>

    <textarea name="fblink" id="tx2"  rows="20" cols="20" placeholder="Enter Facebook Profile Link" ></textarea>
    <textarea name="instalink" id="tx2"  rows="20" cols="20" placeholder="Enter Instragram Profile Link" style="margin-left:1%;"></textarea>
    <textarea name="linkdnlink" id="tx2"  rows="20" cols="20" placeholder="Enter Linkedin Profile Link" ></textarea>
    <textarea name="twitterlink" id="tx2"  rows="20" cols="20" placeholder="Enter Twitter Profile Link"  style="margin-left:1%;"></textarea>
    <textarea name="googleScholarlink" id="tx2"  rows="20" cols="20" placeholder="Enter Google Scholar Profile Link" ></textarea>    
<br>
    <lebel>Date of Birth- </lebel>
    <input type="date" name="date_of_birth" value=""><br>

    <lebel>Tenure from- </lebel>
    <input type="date" name="tenure_from" value=""required>

    <lebel style="margin-left:6%">Tenure to- </lebel>
    <input type="date" name="tenure_to" value=""required><br><br>

    <lebel style="margin-top:6%">Upload profile image- </lebel>
    <input type="file" name="image" value=""required><br><br><br>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
include 'db_conn.php';
if(isset($_POST['submit']))
{
        $name=$_POST['name'];
        $id=$_POST['id'];
        $department=$_POST['department'];
        $designation=$_POST['designation'];
        $phnNo=$_POST['phnNo'];
        $email=$_POST['email'];
        $house_tutor_designation=$_POST['house_tutor_designation'];
        $roomNo=$_POST['roomNo'];
        $seatNo=$_POST['seatNo'];
        $assigned_floor_no=$_POST['assigned_floor_no'];
        $date_of_birth=$_POST['date_of_birth'];
        $tenure_from=$_POST['tenure_from'];
        $tenure_to=$_POST['tenure_to'];

        $fblink=$_POST['fblink'];
        $instalink=$_POST['instalink'];
        $linkdnlink=$_POST['linkdnlink'];
        $twitterlink=$_POST['twitterlink'];
        $googleScholarlink=$_POST['googleScholarlink'];

        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO current_house_tutors(name,id,password,department,designation,phnNo,email,house_tutor_designation,roomNo,seatNo,
        assigned_floor_no,date_of_birth,tenure_from,tenure_to,image,fblink,instalink,linkdnlink,twitterlink, googleScholarlink)
         values('$name',' $id',' $id','$department','$designation','$phnNo','$email','$house_tutor_designation','$roomNo','$seatNo',
         '$assigned_floor_no','$date_of_birth','$tenure_from','$tenure_to','$image','$fblink','$instalink','$linkdnlink','
         $twitterlink','$googleScholarlink')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("A new house-tutor information has been added in house-tutor list.");
        window.location.href="#";
        </script>'
;

}

?>
</div>

<div class="footer">
<?php include 'footer.php' ?> </div>
</div>
</body>
</html>