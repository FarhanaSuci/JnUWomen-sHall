<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Applications for Vacation</title>
  <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

   <style media="screen">
      
       input[name=cancel]
         {
         background-color: teal;
            color: whitesmoke;
           font-size:16px;
             
        }
      input[name=cancel]:hover
         {
            background-color: white;
            color: teal;
           font-size:18px;
           font-weight:bold;
                    
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

<h2 style="text-align:center">Applications for Vacation</h2><hr>
<div class="row" style="margin-left: 16%;margin-right: 16%;">

<div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">Pending Applications</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">
   <?php
      include 'db_conn.php';
        $id=$_SESSION['id'];
        $sql="SELECT * from ht_app_vacation where approval_status='Pending' AND id='$id' order by serial desc ";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){  ?>
        <div class="card" style="margin-bottom:3%;">
        <div class="card-body">
         <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
         <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
         <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
         <strong>Id: </strong><?php echo $info['id'];?><br>
         <strong>Assigned Floor no: </strong><?php echo $info['assigned_floor_no']; ?><br>
         <strong>Need Vacation from: </strong><?php echo $info['startTime'];?>
         <strong>to </strong><?php echo $info['endTime'];?><br>
         <strong>Reason: </strong><?php echo $info['reason']; ?><br>
         <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
        </p>
         </div> <center>
         <form class= "" action="replies_tohouseTutors_of_application_for_vacations.php" method="post">
         <input type="submit" name="cancel" id="cancel" class=""  value="Cancel Application">
         <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden><br><br>
           </form>      </center>
  <?php
  include 'db_conn.php';
  if(isset($_POST['cancel']))
   {
    $serial=$_POST['serial'];        
    $sql="DELETE FROM ht_app_vacation 
    where serial= '$serial' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This application has been deleted!");
    window.location.href="home_houseTutor_without_alert.php";
    </script>'
    ;
   }
?>
</div> <?php  }   ?>
</div></div> </div> </div>


 <div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">Approved Applications</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">
   <?php
  include 'db_conn.php';
  $sql="SELECT * from ht_app_vacation where approval_status='Approved' AND id='$id' order by serial desc ";
  $query=mysqli_query($conn,$sql);
 while($info=mysqli_fetch_array($query)){  ?>
  <div class="card" style="margin-bottom:3%;">
  <div class="card-body">
   <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
   <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
   <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
   <strong>Id: </strong><?php echo $info['id']; $sid=$info['id'];?><br>
   <strong>Assigned Floor no: </strong><?php echo $info['assigned_floor_no']; ?><br>
   <strong>Need Vacation from: </strong><?php echo $info['startTime']; ?>
   <strong>to </strong><?php echo $info['endTime']; ?><br>
   <strong>Reason: </strong><?php echo $info['reason']; ?><br>
   <strong>Attached file: </strong><a target="_blank" href="<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
  </p>
   </div>  
</div>
 <?php  }   ?>
 </div></div></div></div>


<div class ="card mb-1 content" style=" width:100%;background-color:darkcyan;">
<h2 class="m-3 pt-3" style="color:whitesmoke">Canceled Applications</h2>
<div class="card-body">
 <div class="row">
 <div class="col-md-3">
  </div>

  <div class="divmain">
   <?php
include 'db_conn.php';
$sql="SELECT * from ht_app_vacation where approval_status='Canceled' AND id='$id' order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){  ?>
<div class="card" style="margin-bottom:3%;">
<div class="card-body">
 <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
 <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
 <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
 <strong>Id: </strong><?php echo $info['id']; $sid=$info['id'];?><br>
 <strong>Assigned Floor no: </strong><?php echo $info['assigned_floor_no']; ?><br>
 <strong>Need Vacation from: </strong><?php echo $info['startTime']; ?>
 <strong>to </strong><?php echo $info['endTime']; ?><br>
 <strong>Reason: </strong><?php echo $info['reason']; ?><br>
 <strong>Attached file: </strong><a target="_blank" href="<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
</p>
 </div>  </div>         
          <?php  }   ?>
   </div></div></div></div></div>
 <div class="footer"><?php include 'footer.php' ?> </div>
</div></body>
</html>