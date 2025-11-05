<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for vacation</title>
<style>
* {
  box-sizing: border-box;
}
body {
  background: #37BEB0;
  color: #0C6170;
  line-height: 1.6;
  font-family: 'Segoe UI', serif;
  padding: 1em;
}
.container {
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
ul {
  list-style: none;
  padding: 0;
  
}
.brand {
  text-align: center;
  margin-top: -0.7%;;
  
}
.wrapper {
  box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.7);
}
.wrapper > * {
  padding: 1em;
}
.company-info{
  background: #A4E5E0;
}
.company-info h3 {
  text-align: center;
}
.company-info ol{
  margin-top: 3%;
  margin-left: 17%;
}
.contact {
  background: #37BEB0;
}
.contact form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  
}
.contact form label {
  display: block;
  font-weight: bold;
}
.contact form p{
  margin: 0;
}

.contact form .full {
  grid-column: 1/3;
}
 .contact form input {
  width: 100%;
  padding-left: 2%;
  border: 1px solid #c9e6ff;
  height: 41px;

}
.contact form input[type=file]{
  padding-top: 0.7em;
 }
 .contact form input[type=submit]{
  background: #c9e6ff;
  border: 0;
  text-transform: uppercase;
  width: 100%;
  padding-left: 2%;
  border: 1px solid #c9e6ff;
  height: 41px;
  text-align: center;

 }

.contact form textarea
{
  width: 100%;
  padding-top: 2%;
  padding-left: 2%;
  border: 1px solid #c9e6ff;
  font-size: 15px;
  font-family: 'Rubik', sans-serif;
  color: black;
 
}

.contact form input[type=submit]:hover, .contact form input[type=submit]:focus{
  background: teal;
  color: #fff;
  outline: 0;
  transition: all 0.5s ease-out;
}
@media(min-width: 700px){
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }
  .wrapper > * {
    padding: 2em;
  }
}
</style>
    
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
<div class="container">
  <h1 class="brand"><u>Begum Fazilatunnesa Mujib Hall</u></h1>
  <h2 class="brand">Vacation request form</h2>
  <div class="wrapper animated bounceInLeft">
    <div class="company-info">
      <h3>Rules and Restristrictions</h3>
      <ol >
        <li>4 land street</li>
        <li>(555)-555-5555</li>
        <li>test@email.com</li>
      </ol>
    </div>
    <div class="contact">
      <h3>Check your information, enter necessary data and press "Submit" button to send your request</h3>

      <form class="" action="student_app_for_vacation.php" method="post"id="add_form_stdnv" enctype="multipart/form-data">

        <p>
          <textarea  id="name"name="name"required disabled> <?php ?> <?php echo $query = "Name: ".$_SESSION["name"] ;?> 
          <?php ?> </textarea>
        </p>
        <p>
          <textarea name="id"id="id"required disabled><?php  ?> <?php echo $query = "Id: ".$_SESSION["id"] ;?> 
          <?php ?> </textarea>
        </p>
        <p>
          <textarea name="floorNo"id="floorNo"required disabled><?php  ?> <?php echo $query = "Floor no: ".$_SESSION["floorNo"] ;?> 
          <?php ?> </textarea>
        </p>
        <p>
          <textarea name="roomNo"id="roomNo"required disabled><?php ?> <?php echo $query = "Room no: ".$_SESSION["roomNo"] ;?>
           <?php ?> </textarea>
        </p>
        <p>
          <textarea name="seatNo"id="seatNo"required disabled><?php ?> <?php echo $query = "Seat no: ".$_SESSION["seatNo"] ;?>
           <?php ?> </textarea>
        </p><br>
        <p>
          <label>Vacation starting Date & Time</label>
          <input type="datetime-local" name="startTime" id="startTime"required>
        </p><p>
          <label>Vacation ending Date & Time</label>
          <input type="datetime-local" name="endTime" id="endTime"required>
        </p>
        <p class="full">
          <label>Explain why do you need Vacation</label>
          <textarea name="reason"id="reason" rows="5" required></textarea>
        </p>
        
        <p>
          <label>Enter necessary documents(if needed)</label>
          <input type="file" id="file"name="file">
        </p>
        <br>
         <input  type="submit" name="submit" id="" value="Submit">
         <input onclick="window.location.href='home_student_without_alert.php';" type="submit" value="Cancel">
       
       
      </form>

 <?php
    
    if(isset($_POST['submit'])){
          
      include 'db_conn.php';   
      $reason=$_POST["reason"];       
      $name=$_SESSION["name"] ;
      $id=$_SESSION["id"] ;
      $floorNo=$_SESSION["floorNo"] ;
      $roomNo=$_SESSION["roomNo"] ;
      $seatNo=$_SESSION["seatNo"] ;
      $startTime=$_POST["startTime"];
      $endTime=$_POST["endTime"];
      $file=$_FILES['file']['name'];
      $file_type=$_FILES['file']['type'];
      $file_size=$_FILES['file']['size'];
      $file_tem_loc=$_FILES['file']['tmp_name'];
      $file_store="file/".$file;

      move_uploaded_file($file_tem_loc,$file_store);
      $sql="INSERT INTO students_app_vacation(name,id,floorNo,roomNo,seatNo,startTime,endTime, reason,file)
      values('$name','$id','$floorNo','$roomNo','$seatNo','$startTime','$endTime','$reason','$file')";
     $query=mysqli_query($conn,$sql);
     echo '<script type="text/JavaScript">
     alert("Your request has been recorded!");
     window.location.href="home_student_without_alert.php";
     </script>';

}
?>


    </div>
  </div>
</div> 


</body>
</html>