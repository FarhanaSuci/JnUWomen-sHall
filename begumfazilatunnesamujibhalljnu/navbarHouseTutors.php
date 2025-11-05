<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>navbar</title>
    <link rel="icon" href="jnu_logo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

    <style>
      nav {
        background-color:darkcyan;
        color:ghostwhite;
       align-content: center;
      }
     nav a:hover{
      background-color:darkslategray;
    }

    .dropdown-menu .dropdown-item{
       background-color:darkcyan;
       font-size: 15px;
       color: azure;
       width:210px;

      }
      .dropdown-menu .dropdown-item:hover{
       background-color: #004953;
       font-size: 16.8px;
       color: azure;
      }
  
nav #navHTCp:hover{
background-color: darkslategray;
}

#drdm{
  margin-top:0.20%;
}
 #drdm .dropdown-menu .dropdown-item{
       background-color:darkcyan;
       font-size: 16px;
       color: azure;
       width:340px;
      }
 #drdm .dropdown-menu .dropdown-item:hover{
       background-color: #004953;
       font-size: 17.4px;
       color: azure;
      }

</style>

    </head>
    

<body>

<nav class="navbar navbar-expand-lg navbar bg">

  <div class="container-fluid">
    <button class="navbar-toggler"type="button"data-mdb-toggle="collapse"data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"aria-expanded="false"aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
    <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" aria-current="page" href="home_houseTutor_without_alert.php" style="color:white">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery_house_tutor.php"style="color:white">Photo Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="news_houseTutors.php"style="color:white">News</a></li>
        <li class="nav-item"><a class="nav-link" href="notice_houseTutors.php"style="color:white">Notice</a></li>
        <li class="nav-item"><a class="nav-link" href="canteen_ht.php"style="color:white">Canteen</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
           aria-expanded="false" style="color:white" >Activities</a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
          <li> <a class="dropdown-item" href="events_houseTutors.php" style="height:40px;margin-top:2%">Events</a></li>
          <li> <a class="dropdown-item" href="blogs_houseTutors.php" style="height:43px;">Blogs</a></li>
          <li> <a class="dropdown-item" href="clubs_houseTutors.php" style="height:43px;">Clubs</a></li>
          <li><a class="dropdown-item" href="achivments_houseTutors.php" style="height:50px;">Achivements</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            About
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="history_house_tutors.php" style="height:40px;margin-top:2%">History</a></li>
            <li><a class="dropdown-item" href="all_provost_for_HouseTutors.php" style="height:50px;">All Provosts</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            Administration
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="current_provost_for_houseTutors.php" style="height:38px;margin-top:2%">Provost</a></li>
            <li><a class="dropdown-item" href="current_houseTutors_for_houseTutors.php" style="height:40px;">House-Tutors</a></li>
            <li><a class="dropdown-item" href="administrativeStaffs_for_houseTutors.php" style="height:50px;">Administrative Staffs</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="contact_houseTutors.php"style="color:white">Contact</a></li>

        <li class="nav-item" id="navHTCp" style="color:white;margin-top:-0.20%" ><?php include 'controlPannel_HT.php' ?>
      </li>


        <div class="dropdown" id="drdm"><a class="btn btn-primary dropdown-toggle" href="#" role="button"
         id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false"
        style="background-color:cadetblue; font-size:13px; color:white; margin-left:22%;" >
        <?php ?> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?> 
        </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="profile_ht.php" style="height:42px;margin-top:2%">
            View Profile</a></li>
            <li> <a class="dropdown-item" href="change3.php" style="height:44px;">
            Change Password</a></li>
            <li> <a class="dropdown-item" href="students_list_for_HouseTutors.php" style="height:44px;">
            View Student List</a></li>
            <li><a class="dropdown-item" href="houseTutor_apply_vaccation.php" style="height:44px;">
            Apply for Vacation</a></li>           
            <li><a class="dropdown-item" href="complain_ht.php" style="height:44px;">
            Send complain to Provost</a></li>
            <li><a target=”_blank” class="dropdown-item" href="govt_holidays.jpg" style="height:44px;">
            Government Holidays</a></li>            
            <li><hr class="dropdown-divider"/></li>
            <li><a class="dropdown-item" href="logout.php" style="height:54px;">Logout</a></li>
            </ul>
        </div>       
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

</body>
    
    </html>