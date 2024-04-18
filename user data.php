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
		<style>
		html {
			font-family: courier;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #001E00;
			width: 100%;
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
			color: #00640;
			padding: 10px;
			text-align: center;
			
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
  
}
		ul.topnav li {float: left;}

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
		
		 tr{
			background-color: #006400;
			color:white;
			font-size: 20px;
		 }
		
		
		.table {
			margin: auto;
			width: 100%; 
		}
		
		thead {
			color: #000000;
		}
		</style>
		
		<title>User Data : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	
	<body>
		 
		<ul class="topnav">
			<li><a  href="home.php">HOME</a></li>
			<li><a class="active" href="user data.php">EMPLOYEE</a></li>
			<li><a href="registration.php">REGISTRATION</a></li>
			<li><a href="read tag.php">READ TAG</a></li>
		</ul>
		<br>
		<h1>USER DATA</h1>
		<div class="container">
             
            <div class="row"><br><br>
                <table class="table">
                  <thead>
                    <tr bgcolor="#004B00" >
                      <th>Name</th>
                      <th>ID</th>
					  <th>Gender</th>
					  <th>Email</th>
                      <th>Mobile Number</th>
					  <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM table_the_iot_projects ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
							echo '<td>'. $row['email'] . '</td>';
							echo '<td>'. $row['mobile'] . '</td>';
							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">&nbspEdit&nbsp</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
		<footer>
		<p style="font-size:1rem">&copy; 2024 Gihan Chathuranga Gunathilaka. All rights reserved.</p>
		</footer>
	</body>
</html>