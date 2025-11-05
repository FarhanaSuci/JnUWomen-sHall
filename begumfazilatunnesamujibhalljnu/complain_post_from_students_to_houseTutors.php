<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Complains from Students</title>
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
         margin-top:6%;
         font-size:18px;

       } 
        
        input[type=date]{
        margin-top:2%;
        font-size:16px;
                      }


       input[type=file]{
        margin-top:6%;
         font-size:18px;
                      }
      input[name=submit]
                        {
           font-size:16px;
           font-weight:bold;
           margin-left:40%;
                                }
        input[name=cancel]
         {
           font-size:16px;
           font-weight:bold;
           margin-left:1.2%;
          
          }
      </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
           
</head>

<body style="background-color:azure;"> 
<div id="HT_cp">
<div class="headr">
<?php include 'header.php' ?></div>
<div class="nv">
<?php include 'navbarHouseTutors.php' ?>
</div><br>

<h2 style="text-align:center">Complains from Students</h2><hr>
<div class="row" style="margin-left: 16%;margin-right: 16%;">

<div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">New Complains</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">

  <?php
include 'db_conn.php';
$floorNo= $_SESSION['assigned_floor_no'];
$sql="SELECT * from complains_from_students_to_housetutor where complains_from_students_to_housetutor.floorNo= $floorNo AND
response_status='Pending' order by serial desc";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>

      <div class="card" style="margin-bottom:3%;">
      <div class="card-body">
       <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial'];?><br>
       <?php echo  date('d-F-Y',strtotime($info['complained_at'])); ?></h5><hr>
       <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
       <strong>Id: </strong><?php echo $info['id'];?><br>
       <strong>Room no: </strong><?php echo $info['roomNo']; ?><br>
       <strong>Seat no: </strong><?php echo $info['seatNo']; ?><br>
       <strong>Complain title: </strong><?php echo $info['complain']; ?><br>
       <strong>Detail: </strong><?php echo $info['detail']; ?><br>
       <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
       <strong>Desired Outcome: </strong><?php echo $info['result']; ?><br>
      </p>
         </div> 
         <form class= "" action="complain_post_from_students_to_houseTutors.php" method="post">
          <input type="submit" name="submit" id="approve" class="" value="Solved">
          <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden>

          <input type="submit" name="cancel" id="cancel" class=""value="Cancel">
          <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden><br><br>
           </form>      
  <?php
  include 'db_conn.php';
  if(isset($_POST['submit']))
   { 
    $serial=$_POST['serial'];           
    $sql="UPDATE complains_from_students_to_housetutor 
    Set response_status='Approved' where serial= '$serial' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This complain has been proven and the actions are taken!");
    window.location.href="complain_post_from_students_to_houseTutors.ph";
    </script>'
    ;
   }

   else if(isset($_POST['cancel']))
   {
    $serial=$_POST['serial'];              
    $sql="UPDATE complains_from_students_to_housetutor 
    Set response_status='Canceled' where serial= '$serial' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This complained has been canceled!");
    window.location.href="complain_post_from_students_to_houseTutors.ph";
    </script>'
    ;
   }
?>
</div> <?php  }   ?>
</div></div> </div> </div>


 <div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">Previous Complains(proved and action taken)</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">
   <?php
  include 'db_conn.php';
  $sql="SELECT * from complains_from_students_to_housetutor where complains_from_students_to_housetutor.floorNo= $floorNo AND 
  response_status='Approved' order by serial desc ";
  $query=mysqli_query($conn,$sql);
 while($info=mysqli_fetch_array($query)){  ?>
  <div class="card" style="margin-bottom:3%;">
  <div class="card-body">
   <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
   <?php echo  date('d-F-Y',strtotime($info['complained_at'])); ?></h5><hr>
   <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
   <strong>Id: </strong><?php echo $info['id']; $sid=$info['id'];?><br>
   <strong>Room no: </strong><?php echo $info['roomNo']; ?><br>
   <strong>Seat no: </strong><?php echo $info['seatNo']; ?><br>
   <strong>Complain title: </strong><?php echo $info['complain']; ?><br>
   <strong>Detail: </strong><?php echo $info['detail']; ?><br>
   <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
   <strong>Desired Outcome: </strong><?php echo $info['result']; ?><br>

  </p>
   </div>  
</div>
 <?php  }   ?>
 </div></div></div></div>


<div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">Previous Complains(Unproved and Canceled)</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">
   <?php
include 'db_conn.php';
$sql="SELECT * from complains_from_students_to_housetutor where complains_from_students_to_housetutor.floorNo= $floorNo AND
 response_status='Canceled' order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){  ?>
<div class="card" style="margin-bottom:3%;">
<div class="card-body">
 <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
 <?php echo  date('d-F-Y',strtotime($info['complained_at'])); ?></h5><hr>
 <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
 <strong>Id: </strong><?php echo $info['id']; $sid=$info['id'];?><br>
 <strong>Room no: </strong><?php echo $info['roomNo']; ?><br>
 <strong>Seat no: </strong><?php echo $info['seatNo']; ?><br>
 <strong>Complain title: </strong><?php echo $info['complain']; ?><br>
 <strong>Detail: </strong><?php echo $info['detail']; ?><br>
 <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
 <strong>Desired Outcome: </strong><?php echo $info['result']; ?><br>

</p>
 </div>  </div>         
          <?php  }   ?>
   </div> </div></div></div>

           </div>
           
           <div class="footer">
           <?php include 'footer.php' ?> </div></div>
            </body>
           </html>