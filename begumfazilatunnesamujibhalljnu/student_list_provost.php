<!DOCTYPE html>
<html lang="en">
<head>

<title>Students List</title>
<link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
 
</head>

<body style="background-color:azure;"> 
<div id="pr_cp">
<div class="headr"><?php include 'header.php' ?></div>
<div class="nv" style="align-content:center">
<?php include 'navbarProvost.php' ?></div>
<h2 style="margin-top:1.3%;color:black;margin-bottom:1%"><center>Student's List</center></h2><hr><br>
<div class="SearchBAR"style="align-content:center;margin-left:1.1%;"><?php include 'SearchBar_provost_stu.php' ?></div>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 12%;margin-right:10%;margin-bottom:3%;margin-top:1%">
<?php
include 'db_conn.php';
$sql="SELECT * from students where seatNo<>'canceled' order by floorNo asc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
 <div class="col">
    <div class="card h-100" style="width:98%">
      <img src="<?php echo $info['image']; ?>" class="card-img-top" style="height:330px"/>
      <div class="card-body">
        <h4 class="card-title"><b><?php echo $info['name']; ?></b></h4>
       <br>
        <p class="card-text">
        <ul class="list-group list-group-light list-group-small">
          <li class="list-group-item"><b>Department: </b><?php echo $info['department']; ?></li>
          <li class="list-group-item"><b>Id: </b><?php echo $info['id']; ?></li>
          <li class="list-group-item"><b>Floor no: </b><?php echo $info['floorNo'];  ?></li>
          <li class="list-group-item"><b>Room no: </b><?php echo $info['roomNo']; ?></li>
          <li class="list-group-item"><b>Seat no: </b><?php echo $info['seatNo'];  ?></li>
          <li class="list-group-item"><b>Contact no: </b><?php echo $info['phnNo']; ?></li>
          <li class="list-group-item"><b>Email: </b><?php echo $info['email']; ?></li>
          <li class="list-group-item"><b>Session: </b><?php echo $info['session']; ?></li>

        </ul></p>
        <div class="card-footer"><center>
        <form class="" action="student_list_provost.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Cancel Seat" class="btn btn-secondary" style=" margin-top:2%; margin-left:-8%">
        <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
</center>
        </form>
        <?php
  include 'db_conn.php';
  if(isset($_POST['submit']))
   {     
    $sid=$_POST['id'];
    $sql="UPDATE students 
    Set previous_seatNo=seatNo, previous_roomNo=roomNo,previous_floorNo=floorNo, floorNo='0', roomNo='0', seatNo='canceled'
     where students.id='$sid' ";
    $query=mysqli_query($conn,$sql);
    echo '<script type="text/JavaScript">
    alert("This seat for the student has been canceled!");
    window.location.href="student_list_provost.php";
    </script>';

   }
?>
      </div>



    </div>
   </div>
  </div>

<?php
}
?>
</div>

<div class="footer">
<?php include 'footer.php' ?>
         </div></div>
    </body>
    
</html>