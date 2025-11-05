<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report problem</title>
    <style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #afafaf;
  --red: #e31b23;
 
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}


* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}

a {
  color: inherit;
}

input,
textarea{
  font-family: inherit;
  font-size: 100%;
}


label {
  cursor: pointer;
}

textarea {
  resize: none;
}

ul {
  list-style: none;
}

body {
  font: 17px/1.5 "Open Sans", sans-serif;
  background: url(http://img6.uploadhouse.com/fileuploads/17737/17737075bdad5cfa9423bb2c3c2beee695c72bb8.jpg);
  color: var(--white);
  margin: 3rem 0;
}

.containerComplain {
  max-width: 847px;
  margin: 0 auto;
  padding: 0 1.5rem;
}


/* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form h1 {
    margin-top: 4%;
  margin-bottom: 1rem;
}

.my-form li,
.my-form .grid > *:not(:last-child) {
  margin-bottom: 1.5rem;
}


.my-form input,
.my-form textarea {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);
  background: var(--bgFormEls);
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form #big {
  height: 170px;
}

.my-form #tiny {
  height: 77px;
  font-size: 14px;
  text-align: left;
  line-height: 1.5;
  width: 100%;
}

.my-form ::placeholder {
  color: inherit;
  /*Fix opacity issue on Firefox*/
  opacity: 1;
}

.my-form input:focus,
.my-form textarea:focus,
.my-form input[type="submit"]:focus + label {
  background: var(--bgFormElsFocus);
}

.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}

.my-form *:required {
  background-repeat: no-repeat;
  background-position: top 10px right 12px;
  background-size: 15px 15px;
}

.my-form *:required {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
}


.my-form input[type=submit]:hover, .my-form input[type=submit]:focus{
  background: lightgray;
  color: #000;
  outline: 0;
  transition: all 0.5s ease-out;
}
.my-form input[type=file]{
  padding-top: 1rem;
  width: 100%;
  height: 67px;
 }

/* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form .required-msg {
  display: none;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
    no-repeat center left / 15px 15px;
  padding-left: 20px;
}

.my-form .btn-grid {
  position: relative;
  overflow: hidden;
  transition: filter 0.2s;
}

/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
footer {
  font-size: 1rem;
  text-align: right;
  backface-visibility: hidden;
}

/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (min-width: 600px) {
  .my-form .grid {
    display: grid;
    grid-gap: 1.3rem;
  }

  .my-form .grid-2 {
    grid-template-columns: 1fr 1fr;
  }

  .my-form .grid-3 {
    grid-template-columns: auto auto auto;
    align-items: center;
  }

  .my-form .grid > *:not(:last-child) {
    margin-bottom: 0;
  }

  .my-form .required-msg {
    display: block;
  }

}

  </style>


</head>
<body>



	<form class="my-form" action="complain_ht.php" id="cHT" method="post" enctype="multipart/form-data">
  <div class="containerComplain">
  <center> <h1><u>Begum Fazilatunnesa Mujib Hall</u></h1>
    <h2>Complain Submission Form</h2></center><br>
    <ul>
           <li>
        <div class="grid grid-3">
        <textarea id="tiny" name="name" disabled> <?php ?> <?php echo $query = "Name: ".$_SESSION["name"] ;?> 
          <?php ?> </textarea> 
          <textarea id="tiny" name="id" disabled><?php  ?> <?php echo $query = "Id: ".$_SESSION["id"] ;?> 
          <?php ?> </textarea>
        
        
        <textarea id="tiny" name="assigned_floor_no" disabled><?php  ?>
         <?php echo $query = "Assigned Floor No: ".$_SESSION["assigned_floor_no"] ;?> 
          <?php ?> </textarea>
        </div>
      </li>   
      <li>
      <input name="complain"id="complain" type="text" placeholder="Enter your complain headline"required>
      </li>  
      <li>
        <textarea id="big" name="detail"placeholder="Explain your complain in detail"></textarea>
      </li>   
      <li><label>Enter necessary documents relevant to the Compalin(if needed)-</label>
          <input type="file" name="file"></li>
      <li>
      <li>
        <textarea id="big" type="text"name="result"placeholder="Desired outcome" required></textarea>
      </li> 
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
        
           
         <input  type="submit" name="submit" value="Submit">
         <input onclick="window.location.href='home_houseTutor_without_alert.php';" type="submit" value="Cancel">
        
        </div>
      </li>    
    </ul>
  </div>
</form>

<?php
    
    if(isset($_POST['submit'])){
          
      include 'db_conn.php';   
      $complain=$_POST["complain"]; 
      $detail=$_POST["detail"];
      $result=$_POST["result"];         
      
      $name=$_SESSION["name"] ;
      $id=$_SESSION["id"] ;
      $assigned_floor_no=$_SESSION["assigned_floor_no"] ;
     
    
      $file=$_FILES['file']['name'];
      $file_type=$_FILES['file']['type'];
      $file_size=$_FILES['file']['size'];
      $file_tem_loc=$_FILES['file']['tmp_name'];
      $file_store="file/".$file;

      move_uploaded_file($file_tem_loc,$file_store);
      $sql="INSERT INTO complains_from_housetutors(name,id,assigned_floor_no,complain,detail,result,file)
      values('$name','$id','$assigned_floor_no','$complain','$detail','$result','$file')";
     $query=mysqli_query($conn,$sql);
     echo '<script type="text/JavaScript">
     alert("Your complain has been recorded!\nThanks for letting us know about the problem🤍");
     window.location.href="home_houseTutor_without_alert.php";
     </script>';

}
?>

<footer>
  <div class="containerComplain">
    <small>Thanks for letting us know about the problem<span>🖤</span></small>
  </div>
</footer>
</body>
</html>