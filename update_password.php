<?php 
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			height: 650px;
			background-image: ;
			background-repeat: no-repeat;
			background-color: black;
		}
		.wrapper
		{
			width: 400px;
			height: 400px;
			margin:100px auto;
			background-color: black;
			opacity: .8;
			color: whitesmoke ;
			padding: 15px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>
		</div>
		<div style="padding-left: 30px; ">
		<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>

	</div>
	
	<?php
			if(isset($_POST['submit']))
			{
				 $count=0;
				 $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && email= '$_POST[email]';");
				 $count=mysqli_num_rows($res);
				 if($count==0)
				 {
				   ?>
						 
						 <script type="text/javascript">
						   alert("The username doesn't match.");
						 </script> 
					   <br>
					 <div class="alert alert-danger" style="width: 400px; position:float ; margin :350 px; background-color: #de1313; color: white">
					   <strong>The Username and Email doesn't match</strong>
					 </div>    
				   <?php
				  }
			  else
			  {
			   mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]'
			   AND email='$_POST[email]' ;")

			
			
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
                </script> 
			  <?php
			
			}

		}
		
			?>
			</div>
</body>
</html>