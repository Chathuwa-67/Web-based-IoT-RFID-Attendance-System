<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM table_the_iot_projects where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
	
	$msg = null;
	if (null==$data['name']) {
		$msg = "The ID of your Card / KeyChain is not registered !!!";
		$data['id']=$id;
		$data['name']="--------";
		$data['gender']="--------";
		$data['email']="--------";
		$data['mobile']="--------";
	} else {
		$msg = null;
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<style>
		td.lf {
			padding-left: 15px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
			body{	
			 
			 background-color:#000000;
			 min-height:100vh;
			 font-family: courier, "courier new", monospace;
			 align-items:center;
			 justify-content:center;
			 color:#006400;
			 
			 
			 
		   
		 }
		 html {
			font-family: courier;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
		}
			tr{
			color:white;
			font-size: 1.5rem;
		}
		table{
			background-color: #16db65;
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
</head>
 
	<body>	
		<div>
			<form>
				<table  width="225" border="5" bordercolor="#006400" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="50" align="center"  bgcolor="#006400"><font  color="#FFFFFF">
						<b>User Data</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#006400">
							<table width="800"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr bgcolor="#006400">
									<td width="225" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['id'];?></td>
								</tr>
								<tr bgcolor="#006400">
									<td align="left" class="lf">Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['name'];?></td>
								</tr>
								<tr bgcolor="#006400">
									<td align="left" class="lf">Gender</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['gender'];?></td>
								</tr>
								<tr bgcolor="#006400">
									<td align="left" class="lf">Email</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['email'];?></td>
								</tr>
								<tr bgcolor="#006400">
									<td align="left" class="lf">Mobile Number</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['mobile'];?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p style="color:red;"><?php echo $msg;?></p>
		
		<footer>
		<p style="font-size:1rem">&copy; 2024 Gihan Chathuranga Gunathilaka. All rights reserved.</p>
		</footer>
		
	</body>
</html>