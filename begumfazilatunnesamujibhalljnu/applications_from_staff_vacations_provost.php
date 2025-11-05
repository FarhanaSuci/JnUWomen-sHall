<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Applications from Staffs for Vacation</title>
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
    <script>
function myFunction() {
  document.getElementById("approve").value = "Approved";
}
function cancel() {
  document.getElementById("cancel").value = "Canceled";
}
</script>            
</head>

<body style=" background-color: azure;">
<div class="headr">
<?php include 'header.php' ?></div>
<div class="nv">
<?php include 'navbarProvost.php' ?>
</div><br>

<h2 style="text-align:center">Applications from Staffs for Vacation</h2><hr>
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
        $sql="SELECT * from staff_app_vacation where approval_status='Pending' order by serial desc ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?>
        <div class="card" style="margin-bottom:3%;">
        <div class="card-body">
         <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
         <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
         <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
         <strong>Id: </strong><?php echo $info['id'];?><br>
         <strong>Designation: </strong><?php echo $info['staffType']; ?><br>
         <strong>Need Vacation from: </strong><?php echo $info['startTime'];?>
         <strong>to </strong><?php echo $info['endTime'];?><br>
         <strong>Reason: </strong><?php echo $info['reason']; ?><br>
         <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
        </p>
         </div> 
         <form class= "" action="applications_from_staff_vacations_provost.php" method="post">
          <input type="submit" name="submit" id="approve" class="" onclick="myFunction()" value="Approve">
          <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden>
          <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
          <input type="text" name="stime" value="<?php echo $info['startTime']; ?>" hidden>
          <input type="text" name="etime" value="<?php echo $info['endTime']; ?>" hidden> 

          <input type="submit" name="cancel" id="cancel" class="" onclick="cancel()" value="Cancel">    
         <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden><br><br>
           </form>      
  <?php
  include 'db_conn.php';
  if(isset($_POST['submit']))
   {   
    $serial=$_POST['serial'];
    $sid=$_POST['id'];
    $stime=$_POST['stime'];
    $etime=$_POST['etime'];  
    $sql="UPDATE staffs
    Set had_last_vacction_from='$stime', had_last_vacction_to='$etime'  where id= '$sid' ";
    $query=mysqli_query($conn,$sql);
    $sql="UPDATE staff_app_vacation 
    Set approval_status='Approved' where serial= '$serial' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This application has been accepted and the vacation has been granted!");
    window.location.href="applications_from_staff_vacations_provost.php";
    </script>'
    ;
   }

   else if(isset($_POST['cancel']))
   {    
    $serial=$_POST['serial'];
    
    $sql="UPDATE staff_app_vacation 
    Set approval_status='Canceled' where serial= '$serial' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This application has been canceled!");
    window.location.href="applications_from_staff_vacations_provost.php";
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
  $sql="SELECT * from staff_app_vacation where approval_status='Approved' order by serial desc ";
  $query=mysqli_query($conn,$sql);
 while($info=mysqli_fetch_array($query)){  ?>
  <div class="card" style="margin-bottom:3%;">
  <div class="card-body">
   <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
   <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
   <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
   <strong>Id: </strong><?php echo $info['id'];?><br>
   <strong>Need Vacation from: </strong><?php echo $info['startTime']; ?>
   <strong>to </strong><?php echo $info['endTime']; ?><br>
   <strong>Reason: </strong><?php echo $info['reason']; ?><br>
   <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
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
$sql="SELECT * from staff_app_vacation where approval_status='Canceled' order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){  ?>
<div class="card" style="margin-bottom:3%;">
<div class="card-body">
 <h5 class="card-title"><strong> Serial: </strong><?php echo $info['serial']; ?><br>
 <?php echo  date('d-F-Y',strtotime($info['applied_at'])); ?></h5><hr>
 <p class="card-text"><strong>Name: </strong><?php echo $info['name']; ?><br>
 <strong>Id: </strong><?php echo $info['id'];?><br>
 <strong>Designation: </strong><?php echo $info['staffType']; ?><br>
 <strong>Need Vacation from: </strong><?php echo $info['startTime']; ?>
 <strong>to </strong><?php echo $info['endTime']; ?><br>
 <strong>Reason: </strong><?php echo $info['reason']; ?><br>
 <strong>Attached file: </strong><a target="_blank" href="file/<?php echo $info['file']; ?>"><?php echo $info['file']; ?></a><br>
</p>
 </div>  </div>         
          <?php  }   ?>
   </div> </div></div></div>

           </div>
           
           <div class="footer">
           <?php include 'footer.php' ?> </div>
            </body>
           </html>