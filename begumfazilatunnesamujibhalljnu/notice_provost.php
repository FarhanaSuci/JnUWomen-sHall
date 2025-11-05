<!DOCTYPE html>
<html lang="en">
<head>
<title>Notice</title>
<style>

#noticeTable:hover{
    background-color: aliceblue;
    color:#18A7B5;
   
  }
  .headlineNotice{
    color:solid black;
    font-size: 15px;
    text-align:center;

  }
.headlineNotice:hover{  
    font-weight: bolder;
    font-size: 18px;
}
#rowN{
  margin-top:2% ;
  margin-bottom:2%;
  margin-left:10% ;
  margin-right:10%;
}


#centered{
 font-size:34px;
 cursor:pointer;
 color:whitesmoke;
 position: absolute;
 top:54%;left: 50%;
 transform: translate(-50%, -50%);
}

@media only screen and (max-width: 700px) {
  #centered{
  font-size: 24px;
}
  #rowN{
        margin-left: 2%;      
        width: 96%;
        align-items:center;
        justify-items: center;
        align-content:center;
        justify-content: center;
        font-size: 12px;
    }
  #tnbody{
    margin-left: -3.5%;
    width: 107%;
  }
  
  .headlineNotice:hover{  
    font-weight: bolder;
    font-size: 16px;
}

}
@media only screen and (max-width: 500px) {
  #centered{
  font-size: 22px;
}
    #rowN{
      margin-left: 2%;      
        width: 96%;
        align-items:center;
        justify-items: center;
        align-content:center;
        justify-content: center;
        font-size: 12px;
    }
  #tnbody{
    margin-left: -3.5%;
    width: 107%;
  }
  .headlineNotice:hover{  
    font-weight: bolder;
    font-size: 14px;
}

  }
</style>
</head>

<body style="background-color:azure;"> 
<div class="headr"> <?php include 'header.php' ?></div>
<div class="nv"> <?php include 'navbarProvost.php' ?> </div>
<div class="img" style=" position: relative; text-align: center;">
<img src="noticeboard.png" alt="notice board image" style="height:492px; width:100%;opacity:0.9">
<a href="notice_provost.php"class="centered"id="centered">Notice Board</a></div>
 <div class="row" id="rowN" >

 <div class="card text-center">
  <div class="card-header"><h1 style="color:teal;margin-top:1%;font-size:46px">Notice Board</h1></div>
  <div class="card-body"id="tnbody">
    <h5 class="card-title">
    <table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col" style="font-size:22px">Date</th>
      <th scope="col" style="font-size:22px">Headline</th>
      <th scope="col" style="font-size:22px">Link</th>
    </tr>
  </thead>
 </h5>
 <?php
include 'db_conn.php';
$sql="SELECT  * from notice order by serial desc ";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
    <p class="card-text">
      <tbody>   
   <tr id="noticeTable">
   <td><a class="btn btn-info"style="font-size:15px;"><?php echo date('d-F-Y',strtotime($info['date'])); ?></a></td>
     <td class="headlineNotice"><?php echo $info['headline']; ?></td>
     <td><a target="_blank" href="<?php echo $info['image']; ?>" class="btn btn-info"style="font-size:15px;text-transform: capitalize">
     Read full notice</a></td>
   </tr>
 </tbody>
 <?php
}
?>
</table></p>
  </div>
</div>
</div>

<div class="footer">

<?php include 'footer.php' ?>
         </div>
    </body>
    
</html>