<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
 
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: teal;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 10px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
  transition: 0.3s;
  margin-bottom: 5%;
}

.sidenav a:hover {
  color: teal;
  background-color: white;
  font-weight: bolder;
margin-right: 19%;
font-size: 18px;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 77px;
}
.sidenav .closebtn:hover {
font-weight: bolder;
margin-right: 0%;
margin-top: 1.7%;
font-size: 37px;
padding-bottom: 2.7%;

}

#mainht {
  transition: margin-left .5s;
  padding: 10px;
}



@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 8px;}
  .sidenav a:hover {
  
  font-weight: bolder;

font-size: 11px;
}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
<ol style="color:white">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
 <li><a href="insert_notice_by_ht.php">Insert Notice</a></li>    
 <li><a href="applications_for_seat_cancellations_HouseTutor.php">Applications from Students for Seat Cancellations&ensp;
 <i class="fas fa-envelope fa-1.5x"></i>
    <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
    <?php
      include 'db_conn.php';
      $floorNo= $_SESSION['assigned_floor_no'];
      $sql="SELECT count(approval_status) FROM seatcancellation_applications 
      where seatcancellation_applications.floorNo= $floorNo
        AND  approval_status='Waiting' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(approval_status)'];?><?php  }   ?></span>
 </a></li>

 <li><a href="complain_post_from_students_to_houseTutors.php">Complains from Students&ensp;
 <i class="fas fa-envelope fa-1.5x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $floorNo= $_SESSION['assigned_floor_no'];
      $sql="SELECT count(response_status) FROM complains_from_students_to_housetutor 
      where complains_from_students_to_housetutor.floorNo= $floorNo
        AND  response_status='Pending' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(response_status)'];?><?php  }   ?>
       </span> </a></li>

 <li><a href="replies_tohouseTutors_of_application_for_vacations.php">Your Applications for Vacation&ensp;
 </a></li>
    
<br><br>
</ol>    

</div>

<div id="mainht">
  
  <span style="cursor:pointer" onclick="openNav()">Control Pannel</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "26%";
  document.getElementById("mainht").style.marginLeft = "0%";
  document.getElementById("HT_cp").style.marginLeft = "19%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mainht").style.marginLeft= "0";
  document.getElementById("HT_cp").style.marginLeft = "0%";

}
</script>
   
</body>
</html> 