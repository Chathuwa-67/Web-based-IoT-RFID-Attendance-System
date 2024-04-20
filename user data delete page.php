<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM table_the_iot_projects  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: user data.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<title>Delete : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>

    <style>
        html {
			font-family: courier;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
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

.delete-confirm{
    font-size:1.5rem;
    color:red;
    border:red solid;
    padding:10px;
}
    </style>
</head>
 
<body>
 

    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h1 align="center">Delete User</h1>
			</div>

			<form   action="user data delete page.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				<p class="delete-confirm">Are you sure to delete user details ?</p>
				<div  >
					<button type="submit" class="btn btn-danger">Yes</button>
					<a class="btn btn-success" href="user data.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
    <footer>
		<p style="font-size:1rem">&copy; 2024 Gihan Chathuranga Gunathilaka. All rights reserved.</p>
		</footer>
  </body>
</html>