<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
			html {
			font-family: courier;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #001E00;
			width: 100%;
		}

		ul.topnav li {float: left;}

		 

		ul.topnav li a {
			display: block;
			color: WHITE;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-family: courier, "courier new", monospace;
		}

		ul.topnav li a:hover:not(.active) {background-color: #003400;}

		ul.topnav li a.active {background-color: #004B00;}

		ul.topnav li.right {float: right;}
		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		body{	
			 
			 background-color:#000000;
			 min-height:100vh;
			 font-family: courier, "courier new", monospace;
			 align-items:center;
			 justify-content:center;
			 color:#006400;
			 
			 
			 
			 
		   
		 }

		 
		 footer {
    		background-color: #001E00;
			color: #006400;
			padding: 10px;
			text-align: center;
			
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
  
}
		</style>
		
		<title>Registration : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	
	<body>

		 
	<ul class="topnav">
			<li><a  href="home.php">HOME</a></li>
			<li><a href="user data.php">EMPLOYEE</a></li>
			<li><a class="active" href="registration.php">REGISTRATION</a></li>
			<li><a href="read tag.php">READ TAG</a></li>
		</ul>
		

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #004B00;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div align="center">
						<button type="submit" class="btn btn-success"  >Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
		<footer>
		<p style="font-size:1rem">&copy; 2024 Gihan Chathuranga Gunathilaka. All rights reserved.</p>
		</footer>
	</body>
</html>