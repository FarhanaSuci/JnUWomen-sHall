<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="stylesheet"href="font.css">

<style>
.oforms{
background-color: azure;
margin-top: 7% ;
margin-left: 30%;
margin-right: 30%;
margin-bottom: 4%;
height:556px;
width:38%;
text-align: center;
border-radius: 10px;
}
.oforms >p {
 margin-top: 3%;
 color:  rgb(0,116,116);
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-weight: bolder;
 font-size: 28px;
 margin-bottom: 3%;

  
}

.oforms >.cancel {
  margin-top: 2%;
  color:  rgb(0,116,116);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: bolder;
  font-size: 24px;
  margin-bottom: 1%;

  
}

.oforms >.cancel:hover{
    background-color: rgb(0,73,83);
    color: #fff;
  font-weight: bold;
  
}

.oforms >.links {
    margin-top: -2%; 
    margin-bottom: 6%;
}

.oforms >.links>a:link, a:visited {
  background-color: rgb(10,126,140);
  color: #fff;
  padding: 13px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 16px;
  line-height: 22px;
  font-size: 18px;
  width: 52%;
  
}

.oforms >.links>a:hover, a:active {
  background-color: rgb(0,73,83);
  font-weight: bold;
}

@media only screen and (max-width: 1300px) {
  .oforms{
margin-top: 110px ;
margin-bottom: 60px;
height:536px;
width:50%;
margin-left: 26%;
}

.oforms >p {
  margin-top: 16px;
 font-size: 26px;
 margin-bottom: 15px;

}
.oforms >.cancel {
  
  font-size: 22px;
  margin-top: 18px;

  
}
}


@media only screen and (max-width: 900px) {
  .oforms{
margin-top: 114px ;
margin-bottom: 60px;
height:546px;
width:50%;
margin-left: 26%;
}

.oforms >p {
  margin-top: 16px;
 font-size: 26px;
 margin-bottom: 15px;

}
.oforms >.cancel {
  
  font-size: 22px;
  margin-top: 18px;

  
}
}
@media only screen and (max-width: 520px) {
  .oforms{
margin-top: 104px ;
margin-bottom: 60px;
height:546px;
width:86%;
margin-left: 7%;
}

.oforms >p {
  margin-top: 16px;
 font-size: 26px;
 margin-bottom: 15px;

}
.oforms >.cancel {
  
  font-size: 22px;
  margin-top: 18px;

  
}
}

</style>

</head>


<body style="background-color:rgb(0,73,83)">

<div class="oforms">
<br><p>
Select your role<hr>
</p>
<div class="links">
<a href="login2.php">Provost</a>
<br><br>
<a href="login3.php">House-tutor</a>
<br><br>
<a href="login1.php">Student</a>
<br><br>
<a href="login4.php">Administrative Staff</a>
<br><br>
<a href="login5.php">IT Admin</a>
<br>
</div><hr>
<a href="index.php"class="cancel">&laquo;&nbsp;Back to Homepage</a>

</div>

 </body>    
</html>