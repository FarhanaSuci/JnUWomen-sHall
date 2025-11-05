<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>News</title>
  <link rel="icon" href="jnu_logo2.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <style media="screen">
    #newsStart{
        margin-left:14%;
        margin-top:5%;
        margin-right:14%;   
     }

   .div1{
       border: 1px solid black;
       float: left;
       width:96%;
       padding:5px;
       margin-top:8px;
       height:136px;
     }
    
   .div1>img{       
     width:22%;
     height:120px;
     float:left;
     margin-left:6px;
     margin-top:4px;
     
    }
   
   .div2{
     width:480px;
     border:1px solid white;
     max-height:68px;
     overflow:hidden;
     margin-top:10px;
     margin-left:10px;
     padding:5px;
     font-size:18px;
     font-weight:bold;
     float:left;
      }
      
    .divmain{
    margin-left:20px;
    }    
    
    .div3{
     float:right;
     border:1px solid white;
     margin-top: 10px;
     margin-left:-200px;
       }
               
form{
    margin-top:80px;
    float:right;
}

#label2{
    font-size:19px;
    font-weight:bold;
}

#readfullnews{
    font-size:18px;
    font-weight:bold;

}


@media only screen and (max-width: 1300px) {
#newsStart{
   margin-left:8%;
   margin-top:2%;
   margin-right:8%;   
     }         
       
.div1{
   border: 1px solid black;
   float: left;
   width:100%;
   padding:5px;
   margin-top:8px;
   height:150px;
   }

.div1>img{
   width:28%;
   height:130px;
   float:left;
   margin-left:1.5px;
   margin-top:3px;
}

.div2{
   width:360px;
   border:1px solid white;
   max-height:130px;
   overflow:hidden;
   margin-top:2px;
   margin-left:4px;
   padding:1px;
   font-size:15px;
   font-weight:bold;
   float:left;
  }

  .divmain{
    margin-left:3px;
     }

  .div3{
   float:right;
   border:1px solid white;
   margin-top: 5px;
   margin-left:-200px;
   }
               
form{
    margin-top:90px;
    float:right;
}


#label2{
    font-size:15px;
    font-weight:bold;
}

#readfullnews{
    font-size:14px;
    font-weight:bold;

}
}



@media only screen and (max-width: 900px) {
#newsStart{
   margin-left:8%;
   margin-top:2%;
   margin-right:8%;   
     }         
       
.div1{
   border: 1px solid black;
   float: left;
   width:100%;
   padding:5px;
   margin-top:8px;
   height:180px;
   }

.div1>img{
   width:25%;
   height:160px;
   float:left;
   margin-left:1.5px;
   margin-top:3px;
}

.div2{
   width:140px;
   border:1px solid white;
   max-height:160px;
   overflow:hidden;
   margin-top:2px;
   margin-left:4px;
   padding:1px;
   font-size:13px;
   font-weight:bold;
   float:left;
  }

  .divmain{
    margin-left:3px;
     }

  .div3{
   float:right;
   border:1px solid white;
   margin-top: 5px;
   margin-left:-200px;
   }
               
form{
    margin-top:90px;
    float:right;
}


#label2{
    font-size:15px;
    font-weight:bold;
}

#readfullnews{
    font-size:14px;
    font-weight:bold;

}
}



@media only screen and (max-width: 520px) {
#newsStart{
   margin-left:6%;
   margin-top:2%;
   margin-right:6%;   
     }         
       
.div1{
   border: 1px solid black;
   float: left;
   width:98%;
   padding:5px;
   margin-top:8px;
   height:146px;
   }

.div1>img{
   width:26%;
   height:128px;
   float:left;
   margin-left:1.5px;
   margin-top:2.5px;
}

.div2{
   width:136px;
   border:1px solid white;
   max-height:120px;
   overflow:hidden;
   margin-top:1px;
   margin-left:2px;
   padding:1px;
   font-size:12px;
   font-weight:bold;
   float:left;
  }

  .divmain{
    margin-left:3px;
     }

  .div3{
   float:right;
   border:1px solid white;
   margin-top: 5px;
   margin-left:-200px;
   }
               
form{
    margin-top:100px;
    float:right;
}


#label2{
    font-size:13px;
    font-weight:bold;
}

#readfullnews{
    font-size:12px;
    font-weight:bold;

}
}
</style>
<link rel="stylesheet"href="font.css">
</head>  

<body style="background-color:azure;"> 
<div id="AdminHome">  
<div class="headr"> <?php include 'header.php' ?></div>

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
       width:200px;

      }
      .dropdown-menu .dropdown-item:hover{
       background-color: #004953;
       font-size: 17px;
       color: azure;
      }
  
nav #navAdminP:hover{
background-color: darkslategray;
}
#drdm .dropdown-menu .dropdown-item{
       background-color:darkcyan;
       font-size: 15.5px;
       color: azure;
       width:334px;

      }
#drdm .dropdown-menu .dropdown-item:hover{
       background-color: #004953;
       font-size: 17.5px;
       color: azure;
      }

    </style>



<nav class="navbar navbar-expand-lg navbar bg">

  <div class="container-fluid">
    <button
      class="navbar-toggler"type="button"data-mdb-toggle="collapse"data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"aria-expanded="false"aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">

      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" aria-current="page" href="home_admin_without_alert.php" style="color:white">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery_admin.php"style="color:white">Photo Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="news_admins.php"style="color:white">News</a></li>
        <li class="nav-item"><a class="nav-link" href="notice_admins.php"style="color:white">Notice</a></li>
        <li class="nav-item"><a class="nav-link" href="canteen_admin.php"style="color:white">Canteen</a></li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            Activities
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
          <li> <a class="dropdown-item" href="events_admins.php" style="height:40px;margin-top:2%">Events</a></li>
            <li> <a class="dropdown-item" href="blogs_admin.php" style="height:43px;">Blogs</a></li>
            <li> <a class="dropdown-item" href="clubs_admins.php" style="height:43px;">Clubs</a></li>
            <li><a class="dropdown-item" href="achivments_admins.php" style="height:50px;">Achivements</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            About
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="history_admins.php" style="height:40px;margin-top:2%">History</a></li>
            <li><a class="dropdown-item" href="all_provost_for_admin.php" style="height:50px;">All Provosts</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" 
            aria-expanded="false" style="color:white" >
            Administration
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan;">
            <li> <a class="dropdown-item" href="current_provost_for_admins.php" style="height:40px;margin-top:2%">Provost</a></li>
            <li><a class="dropdown-item" href="current_houseTutors_for_admins.php" style="height:42px;">House-Tutors</a></li>
            <li><a class="dropdown-item" href="administrativeStaffs_for_admins.php" style="height:50px;">Administrative Staffs</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="contact_admins.php"style="color:white">Contact</a></li>

        <li class="nav-item" id="navAdminP" style="color:white;margin-right:-0.50%;margin-top:-0.22%" ><?php include 'adminPannel.php' ?></li>
     

        <div class="dropdown" id="drdm"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
        data-mdb-toggle="dropdown" aria-expanded="false"
        style="background-color:cadetblue; font-size:14px; color:white; margin-left:20%;margin-top:1%" >
        <?php ?> <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php } ?> 
        </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="background-color:darkcyan; ">
            <li> <a class="dropdown-item" href="profile_admin.php" style="height:42px;margin-top:2%">
            View Profile</a></li>
            <li> <a class="dropdown-item" href="change5.php" style="height:44px;">
            Change Password</a></li>
            <li> <a class="dropdown-item" href="replies_toAdmins_of_application_for_vacations.php" style="height:44px;">
            Your Applications for Vacation</a></li>
            <li> <a class="dropdown-item" href="admin_apply_vaccation.php" style="height:44px;">
            Apply for Vacation</a></li>
            <li><a target=”_blank” class="dropdown-item" href="govt_holidays.jpg" style="height:44px;">
            Government Holidays</a></li>
            
            <li><hr class="dropdown-divider"/></li>
            <li><a class="dropdown-item" href="logout.php" style=" height:54px">Logout</a></li>
            </ul>
        </div>  
    
    
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>




<div class="img" style=" position: relative; text-align: center;">
<img src="news.png" alt="contact information" style="height:480px; width:100%">
<a href="#"class="centered"style="font-size:40px;color:#3B3B3B;
 position: absolute;top:41%;left: 50%;transform: translate(-50%, -50%);">
</a>
</div> 

<div class="row" id="newsStart">
<div class="card w-72"style="margin-bottom:4%">
  <div class="card-body"><br>
    <h1 class="card-title"style="margin-left:2%;">News</h1>  
    <div class="row">
  <div class="divmain">
<?php
   include 'db_conn.php';
   $sql="SELECT * from news order by serial desc";
   $query=mysqli_query($conn,$sql);
   while($info=mysqli_fetch_array($query)){
    ?>
  <div class="div1">
   <img src="image/<?php echo $info['image']; ?>"alt=""style="">
 <div class="div2">
  <?php echo $info['headline']; ?></div>
    <div class="div3">
      <label id="label2"> <?php echo $info['date']; ?> </label><br><br></div>

        <form class= "" action="full_news_admins.php" method="post">
        <input type="text" name="serial" value="<?php echo $info['serial']; ?>" hidden>
        <input id="readfullnews"type="submit" name="fullnews" value="view full news">
        </form>
       </div>
 <?php   }?>

     </div>
   </div>
  </div>
 </div>
</div>


<div class="footer">
<?php include 'footer.php' ?> </div></div>
 </body>
</html>