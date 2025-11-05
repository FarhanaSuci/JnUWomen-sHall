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
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 10px 8px 10px;
  text-decoration: none;
  font-size: 15.5px;
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
font-size: 17px;
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

#mainpr {
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
    
 <li><a href="insert_notice_by_provost.php">Insert Notice</a></li>
 <li><a href="student_list_provost.php">View Students List</a></li>    
 <li><a href="applications_from_admin_vacations_provost.php">Applications by Admin for Vacation&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(approval_status) FROM admin_app_vacation 
      where approval_status='Pending' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(approval_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="applications_from_ht_vacations_provost.php">Applications by House-tutors for Vacation&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(approval_status) FROM ht_app_vacation 
      where approval_status='Pending' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(approval_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="applications_from_staff_vacations_provost.php">Applications by Staffs for Vacation&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(approval_status) FROM staff_app_vacation 
      where approval_status='Pending' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(approval_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="applications_from_students_vacations_provost.php">Applications by Students for Vacation&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(approval_status) FROM students_app_vacation 
      where approval_status='Pending' ";
        $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(approval_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="complain_post_from_HouseTutors_to_provost.php">Complains from House-tutors&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(response_status) FROM complains_from_housetutors where response_status='Pending' ";
      $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(response_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="complain_post_from_students_to_provost.php">Complains from Students&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(response_status) FROM complains_from_students_to_provosts where response_status='Pending' ";
      $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(response_status)'];?><?php  }   ?>
       </span></a></li>

 <li><a href="complain_post_from_staffs_provost.php">Complains from Staffs&ensp;
 <i class="fas fa-envelope fa-1.7x"></i>
 <span class="badge rounded-pill badge-notification bg-danger" style="font-size: 12px;">
 <?php
      include 'db_conn.php';
      $sql="SELECT count(response_status) FROM complains_from_staff where response_status='Pending' ";
      $query=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){  ?><?php echo $info['count(response_status)'];?><?php  }   ?>
       </span></a></li>

    
<br><br>
</ol>    

</div>

<div id="mainpr">
  
  <span style="cursor:pointer" onclick="openNav()">Control Pannel</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mainpr").style.marginLeft = "0%";
  document.getElementById("pr_cp").style.marginLeft = "23%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mainpr").style.marginLeft= "0";
  document.getElementById("pr_cp").style.marginLeft = "0%";

}
</script>
   
</body>
</html> 