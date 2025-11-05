<!DOCTYPE html>
<html lang="en">
<head>
<title>Notice</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
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
    font-weight: bold;
    font-size: 16px;
}


@media only screen and (max-width: 700px) {
    .rowN{
        margin-left: -15%;
        margin-right: -10%;
        width: 130%;
        align-items:center;
        justify-items: center;
        align-content:center;
        justify-content: center;
        font-size: 16px;
    }

}
@media only screen and (max-width: 500px) {
    .rowN{
        margin-left: -15%;
        margin-right: -10%;
        width: 130%;
        align-items:center;
        justify-items: center;
        align-content:center;
        justify-content: center;
        font-size: 16px;
    }

}
</style>
</head>
<body>


 <div class="rowN" >

 <div class="card text-center">
  <div class="card-header"><h3 style="color:teal;margin-top:1%;">Notice Board</h3></div>
  <div class="card-body">
    <h5 class="card-title">
    <table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col" style="font-size:18px">Date</th>
      <th scope="col" style="font-size:18px">Headline</th>
      <th scope="col" style="font-size:18px">Link</th>
    </tr>
   </h5>
 <?php
include 'db_conn.php';
$sql="SELECT  * from notice order by serial desc limit 5";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){
?>
    <p class="card-text">
      <tbody>   
   <tr id="noticeTable">
   <td><a class="btn btn-info"style="font-size:15px;">
   <?php echo date('d-F-Y',strtotime($info['date'])); ?></a></td>
     <td class="headlineNotice"><?php echo $info['headline']; ?></td>
     <td><a target="_blank" href="<?php echo $info['image']; ?>" class="btn btn-info"style="font-size:15px;text-transform: capitalize">
     Read full notice</a></td>
   </tr>
 </tbody>
 </thead>
 <?php
}
?>
</table></p>
<a target="_blank" href="notice_students.php" class="btn btn-lg btn-info">Read All notices</a>

</div>
 
</div>
</div>

    </body>
    
</html>