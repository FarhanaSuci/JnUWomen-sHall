<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application for Seat Cancellation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* { box-sizing: border-box; }
@import url('https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap');

body {
  font-family: 'Rubik', sans-serif;
  background-color: darkblue;
}

.containerSeat {
  display: flex;
  height: 100vh;
}

.leftSeat {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  animation-name: left;
  animation-duration: 1s;
  animation-fill-mode: both;
  animation-delay: 1s;
  background-color: darkblue;
}

.rightSeat {
  flex: 1;
  background-color: black;
  transition: 1s;
  background-image: url(seat_cancel_img.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.header{
  align-items: center;
  text-align: center;
  margin-bottom: 2%;

}

.header > h2 {
  margin: 0;
  color: #de48b5;
  font-weight: bolder;
 

}
.header > h3 {
  margin: 0;
  color: #de48b5;
  font-weight: bold;
}

.header > h4 {
  margin-top: 2%;
  font-weight: normal;
  font-size: 13px;
  color: #de48b5;
}

.f {
  width: 50%;
  max-width: 72%;
  display: flex;
  flex-direction: column;
}



.f > p > a {
  color: #fff;
  font-size: 12px;
}

.f-field {
  height: 45px;
  padding: 3.6% 4%;
  border: 2px solid #de48b5;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .2s;
  margin-top: 1.5%;
  width: 177%;
  font-size: 13.5px;
}

.f-field:focus {
  border-color: #0f7ef6;
}

 
form > textarea {
 
  padding-top:1%;
  padding-left: 2%;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0000D1 100%); 
  border-radius: 3px;
  margin-top: 2.3%;
  margin-left: 7%;
  color: #fff;
  letter-spacing: 0.7px;
  font-family: 'Rubik', sans-serif;
 
}

form> #reason{
      height:128px;
      font-size: 14px;
 margin-top: 4%;
 
}

form> #reason::placeholder{
      color: whitesmoke;          
}
form > input {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0000D1 100%); 
  border-radius: 3px;
  margin-top: 7%;
  margin-left: 49%;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
  width: 34%;
  font-size: 14px;
  cursor: pointer;
  margin-right: -35%;
  
}

form > input[type=submit]:hover {
 
  background: #de48b5; 
  font-weight: bold;
  color: darkblue;
  cursor: pointer;

}

form > button:hover {
 
 background: #de48b5; 
 font-weight: bold;
 color: darkblue;
 cursor: pointer;
}

form > button {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0000D1 100%); 
  border-radius: 3px;
  margin-top: 7%;
  margin-left: 47%;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
  width: 34%;
  font-size: 14px;
  cursor: pointer;
  margin-right: -35%;
  
}

form > input[type=file] {
  padding: 7.5px 9px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0000D1 100%); 
  border: 2px solid #de48b5;
  margin-top: 3%;
  margin-left:7% ;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
  width: 177%;
  font-size: 13px;
  cursor: pointer;
  margin-right: -35%;
  height: 37px;
}


.animation {
  animation-name: move;
  animation-duration: .4s;
  animation-fill-mode: both;
  animation-delay: 2s;
}

.a1 {
  animation-delay: 2s;
}

.a2 {
  animation-delay: 2.1s;
}

.a3 {
  animation-delay: 2.2s;
}

.a4 {
  animation-delay: 2.3s;
}

.a5 {
  animation-delay: 2.4s;
}

.a6 {
  animation-delay: 2.5s;
}
.a7 {
  animation-delay: 2.6s;
}.a8 {
  animation-delay: 2.7s;
}.a9 {
  animation-delay: 2.8s;
}.a10 {
  animation-delay: 2.9s;
}
.a11 {
  animation-delay: 2.10s;
}
.a12 {
  animation-delay: 2.11s;
}
.a13 {
  animation-delay: 2.12s;
}

@keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }

  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes left{
  0% {
    opacity: 0;
    width: 0;
  }

  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 610px;
  }
}
</style>
</head>
<body>

<div class="containerSeat">
  <div class="leftSeat">
    <div class="header">

    <h2 class="animation a1"><u>Begum Fazilatunnesa Mujib Hall</u></h3>

      <h3 class="animation a2">Seat Cancellation form</h2>
      <h4 class="animation a3">Check your information and Enter the reason to confirm your application</h4>
    </div>
    <div class="f">
    <form class="" action="seatCancel_form.php" method="post"id="add_form_sc" enctype="multipart/form-data">

<textarea class="f-field animation a4" name="student_name" id="tx1"  rows="20" cols="20" required disabled>
 Name: <?php  ?> <?php echo $query = "".$_SESSION["name"] ;?> <?php  ?> </textarea>
<textarea class="f-field animation a5" name="id" id="tx1" rows="20" cols="20"required disabled>
Id: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["id"] ;?> <?php } ?> </textarea>
<textarea class="f-field animation a6" id="tx1" name="floorNo"  rows="20" cols="20"  required disabled>
Floor no: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["floorNo"] ;?> <?php } ?> </textarea>
<textarea class="f-field animation a7" id="tx1" name="roomNo" rows="20" cols="20" required disabled>
Room no: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["roomNo"] ;?> <?php } ?> </textarea>
<textarea class="f-field animation a8" id="tx1" name="seatNo" rows="20" cols="20" required disabled>
Seat no: <?php if($_SESSION["id"]) { ?> <?php echo $query = "".$_SESSION["seatNo"] ;?> <?php } ?> </textarea>

<textarea class="f-field animation a9" name="reason" id="reason"  rows="20" cols="20"
 placeholder="Explain why you want to cancel your seat and enter necessary documents in the box below(if needed)" required >
</textarea>

<input class="f-field animation a10"type="file" id="file"name="file">   
<script>
  function showAlert() {  

    alert("You must enter your reason in the text field!");
   }


  </script>
  <br><br>
<input type="submit" name="submit" id="" class="animation a11" onclick="setTimeout(showAlert, 333);" value="Submit">
 <button  class="animation a12" onclick="window.location.href='home_student_without_alert.php';">Cancel</button>

 </form>
    <?php  
    
    if(isset($_POST['submit'])){
        if(isset($_POST['reason'])){        
        include 'db_conn.php';   
        $reason=$_POST['reason'];       
        $student_name=$_SESSION["name"] ;
        $id=$_SESSION["id"] ;
        $floorNo=$_SESSION["floorNo"] ;
        $roomNo=$_SESSION["roomNo"] ;
        $seatNo=$_SESSION["seatNo"] ;
        $file=$_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_tem_loc=$_FILES['file']['tmp_name'];
        $file_store="file/".$file;
  
        move_uploaded_file($file_tem_loc,$file_store);
        $sql="INSERT INTO seatCancellation_applications(name,id,floorNo,roomNo,seatNo, reason,file)
         values('$student_name','$id','$floorNo','$roomNo','$seatNo','$reason','$file')";
        $query=mysqli_query($conn,$sql);}
        echo '<script type="text/JavaScript">
        alert("Your response has been recorded!");
        window.location.href="home_student_without_alert.php";
        </script>'
;
  }
?>
    </div>
  </div>
  <div class="rightSeat"></div>
</div>


   
</body>
</html> 
