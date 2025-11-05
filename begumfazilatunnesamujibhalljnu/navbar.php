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
       background-color: darkcyan;
       font-size: 15px;
       color: azure;
       width:200px;

      }
      .dropdown-menu .dropdown-item:hover{
       background-color: #004953;
       font-size: 17px;
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
    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php" style="color:white">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="gallery.php"style="color:white">Photo Gallery</a></li>
    <li class="nav-item"><a class="nav-link" href="news.php"style="color:white">News</a></li>
    <li class="nav-item"><a class="nav-link" href="notice.php"style="color:white">Notice</a></li>
    <li class="nav-item"><a class="nav-link" href="canteen.php"style="color:white">Canteen</a></li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" name="nd"
     aria-expanded="false" style="color:white"> Activities</a>
     <!-- Dropdown menu -->
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
      <li> <a class="dropdown-item" href="events.php" style="height:40px;margin-top:2%;
     ">Events</a></li>
      <li> <a class="dropdown-item" href="blogs.php" style=" height:42px;
     ">Blogs</a></li>
      <li> <a class="dropdown-item" href="clubs.php" style="height:42px;
      ">Clubs</a></li>
      <li><a class="dropdown-item" href="achivments.php" style="height:50px;
     ">Achivements</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"
         style="color:white" >
            About
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="history.php" style="height:40px;margin-top:2%">History</a></li>
            <li><a class="dropdown-item" href="all_provost.php" style="height:50px;">All Provosts</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            Administration
          </a>
          <!-- Dropdown menu -->
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan">
         <li> <a class="dropdown-item" href="current_provost.php" style="height:40px;margin-top:2%">Provost</a></li>
         <li><a class="dropdown-item" href="current_houseTutors.php" style="height:42px;">House-Tutors</a></li>
         <li><a class="dropdown-item" href="administrativeStaffs.php" style=" height:50px;">Administrative Staffs</a></li> 
        </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php"style="color:white">Contact</a></li>

        <li class="nav-item"><a class="nav-link" href="login_options.php"
        style="color:white;font-size:17px">&nbsp;Login&nbsp;&nbsp;</a></li>
        

     
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

</body>
    
    </html>