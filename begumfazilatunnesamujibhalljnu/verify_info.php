<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification for Cancelling seat</title>
 <style>
  	@import url('https://fonts.googleapis.com/css?family=Lato:400,700,900');
		*{
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}
		body{
            background-color:#DEB3AD;
            
			margin: 0;
			padding: 0;
		}
		.mwb-form-main-wrapper{
			font-family: 'Rubik', sans-serif;
			line-height: 1.5;
			padding: 20px;
            padding-top: 2.3%;
		}
		.mwb-form-main-container {
			background-color: #DE847B;
			box-shadow: 1px 2px 10px rgba(0,0,0,.11);
			color: #3B0404;
			margin: 0 auto;
			max-width: 650px;
		}
		.mwb-form-main-container form{
      margin-top: 3%;
			padding: 23px;
		}
		.mwb-form-main-container h2 {
			background-color: #3B0404;
			color: #DEB3AD;
			font-size: 30px;
			font-weight: 500;
			margin: 0 0 10px 0;
			padding: 22px 15px;
			text-align: center;
      font-family: 'Rubik', sans-serif;

		}
		.mwb-form-group {
			font-size: 16px;
			margin-bottom: 30px;
			position: relative;
		}
		.mwb-form-text-label {
			left: 10px;
			position: absolute;
			top: 12px;
			transition: 0.2s linear all;
		}
		.mwb-form-group.focus-input .mwb-form-text-label {
			background-color: #ffffff;
			padding: 0 2px;
			top: -11px;
			transition: 0.2s linear all;
		}
		.mwb-form-control {
			background-color: #ffffff;
			border-radius: 4px;
			border: 2px solid #dddddd;
			font-size: 16px;
			padding: 13px;
			width: 100%;
      font-family: 'Rubik', sans-serif;

		}
		.mwb-form-submit-btn {
			background-color:#3B0404 ;
			border-radius: 4px;
			border: none;
			color: #DEB3AD;
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			min-width: 100px;
			padding: 16px 10px;      
		}
		
		.mwb-form-error {
			color: #f52626;
			display: none;
			font-size: 12px;
			padding-top: 2px;
		}
</style>

<script>
jQuery(document).ready(function($) {
			$(".mwb-form-control").focus(function(){
				var tmpThis = $(this).val();
				if(tmpThis == '' ) {
					$(this).parent(".mwb-form-group").addClass("focus-input");
				}
				else if(tmpThis !='' ){
					$(this).parent(".mwb-form-group").addClass("focus-input");
				}
			});
			$(".mwb-form-control").blur(function(){
				var tmpThis = $(this).val();
				if(tmpThis == '' ) {
					$(this).parent(".mwb-form-group").removeClass("focus-input");
					$(this).siblings('.mwb-form-error').slideDown("3000");
				}
				else if(tmpThis !='' ){
					$(this).parent(".mwb-form-group").addClass("focus-input");
					$(this).siblings('.mwb-form-error').slideUp("3000");
					
				}
			});
		}); 
  </script>
  
</head>
<body>
	<div class="mwb-form-main-wrapper">
		<div class="mwb-form-main-container">
			<h2><u>Begum Fazilatunnesa Mujib Hall</u><p style="font-size:18px">Verify Student's information to Cancel her Seat
		</p></h2>
      

			<form action="verify_info.php" method="post" enctype="multipart/form-data">
				<div class="mwb-form-group">
					<input type="text" class="mwb-form-control" value="" name="name"id="name"disabled>
					<label for="name" class="mwb-form-text-label">Name: 
						<?php echo $info['name'];  $sname=$info['name'];?></label>
					<div class="mwb-form-error">This Field Required*</div>
				</div>
				<div class="mwb-form-group">
					<input type="text" class="mwb-form-control" name="id" id="id"disabled>
					<label for="id"  class="mwb-form-text-label">Id: 
						<?php echo $info['id'];?></label>
					<div class="mwb-form-error">This Field Required*</div>
				</div>
        <div class="mwb-form-group">
        <input type="text" class="mwb-form-control" name="department" id="department"disabled>
					<label for="department"  class="mwb-form-text-label">Floor No: 
						<?php echo $info['floorNo'];?></label>
				</div>
				<div class="mwb-form-group">
        <input type="text" class="mwb-form-control" name="session" id="session"disabled>
					<label for="session"  class="mwb-form-text-label">Room No: 
						<?php echo $info['roomNo'];?></label>
				</div>
				<div class="mwb-form-group">
        <textarea name="headline" cols="30" rows="1" id="headline" placeholder="Enter Blog title here"
        class="mwb-form-control"required></textarea>				
					<div class="mwb-form-error">This Field Required*</div>
        </div>
        <div class="mwb-form-group">
					<textarea name="blog" cols="30" rows="8" id="blog" placeholder="Enter Full-blog here"
          class="mwb-form-control"required></textarea>
					<div class="mwb-form-error">This Field Required*</div>
				</div>
        <div class="mwb-form-group"style="margin-top:-2%;margin-bottom:5%">
        <label for="file" style="font-size: 16px;">Enter an image relevant to the Blog-</label><br>
        <input  type="file" name="image" id="file" value=""required>	

        </div>
				<div class="mwb-form-group">
					<input type="Submit" name="submit" class="mwb-form-submit-btn" value="Upload">
          <input  onclick="window.location.href='home_student_without_alert.php';"
           type="Submit" name="cancel" class="mwb-form-submit-btn" value="Cancel">
				</div>
			</form>
     <?php /*
  include 'db_conn.php';
  if(isset($_POST['submit']))
  {
       $headline=$_POST['headline'];
        $blog=$_POST['blog'];
        $written_by=$info['roomNo']; ;
        $writer_id=$info['roomNo'];;
        $writer_department=$info['roomNo']; ;
        $writer_session=$info['roomNo'];;
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);
        $sql="INSERT INTO blogs(headline,blog,written_by,writer_id,writer_department,writer_session,image)
         values('$headline','$blog','$written_by','$writer_id','$writer_department','$writer_session','$image')";
        $query=mysqli_query($conn,$sql);
        echo '<script type="text/JavaScript">
        alert("Your blog has been uploaded!");
        window.location.href="home_student_without_alert.php";
        </script>';

}*/

?>
		</div>
	</div>
</body>
</html>
