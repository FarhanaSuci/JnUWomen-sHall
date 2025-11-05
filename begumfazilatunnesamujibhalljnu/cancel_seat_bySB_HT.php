<?php
session_start();
?>
<?php 
include 'db_conn.php';
if(isset($_POST['submitt']))
{ 
$sid=$_POST['id'];
$sql="UPDATE students 
Set previous_seatNo=seatNo, previous_roomNo=roomNo,previous_floorNo=floorNo, floorNo='0', roomNo='0', seatNo='canceled'
 WHERE students.id='$sid'";
$query=mysqli_query($conn,$sql);
echo '<script type="text/JavaScript">
alert("This seat for the student has been canceled!");
window.location.href="student_list_provost.php";
</script>';

}
?>