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

#mainap {
  transition: margin-left .5s;
  padding: 10px;
}



@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 10px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <ol style="color:white">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <li><a href="insert_notice.php">Insert Notice</a></li>
 <li><a href="insert_news.php">Insert News</a></li>
 <li><a href="insert_in_photoGallery.php"> Add image in Photo Gallery</a></li>
 <li><a href="insert_students.php">Insert in Student List</a></li>
 <li><a href="student_list_admin.php">View Student List</a></li>
 <li><a href="insert_current_houseTutors.php">Insert House-Tutor's Information</a></li>
 <li><a href="insert_current_provost.php"> Insert Current Provost Information</a></li>
 <li><a href="insert_provost_list.php">Add new Provost information in Provost list</a></li>
 <li><a href="insert_staff_list.php">Insert Staff list</a></li>
 <li><a href="insert_events.php">Insert Event information</a></li>
 <li><a href="insert_facilities.php">Insert facility information</a></li>
 <li><a href="insert_clubs.php">Insert club information</a></li>
 <li><a href="insert_achivments.php"> Insert Achivements information</a></li>
 <li><a href="insert_in_slider.php">Insert Image in Homepage Carousel</a></li>
 <li><a href="insert_in_canteen_slider.php">Insert Image in Canteen Carousel</a></li>
 <li><a href="insert_intro.php">Change Introduction</a></li> 
 <li> <a href="insert_history.php">Change History</a></li>
 <li><a href="applications_from_ht_vacations_admin.php">Applications by House-tutors for Vacation</a></li>
 <li><a href="applications_from_staff_vacations_admin.php">Applications by Staffs for Vacation</a></li>
 <li><a href="applications_from_students_vacations_admin.php">Applications by Students for Vacation</a></li>
 <li><a href="complain_post_from_HouseTutors_to_provost_admin.php">Complains from House-tutors</a></li>
 <li><a href="complain_post_from_students_to_provost_admin.php">Complains from Students</a></li>
 <li><a href="complain_post_from_staffs_provost_admin.php">Complains from Staffs</a></li>
 <br><br><br>
</ol>    

</div>

<div id="mainap">
  
  <span style="cursor:pointer" onclick="openNav()">Admin Pannel</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mainap").style.marginLeft = "0%";
  document.getElementById("AdminHome").style.marginLeft = "18.5%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mainap").style.marginLeft= "0";
  document.getElementById("AdminHome").style.marginLeft = "0%";

}
</script>
   
</body>
</html> 
