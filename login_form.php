<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css1.css">	
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="login_form.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
		
</head>

<body>
	


	
	<div id="container">
	<?php include('connection.php');?>
	<?php include('nav_bar.php');?>
		

		
	<div class = "login">
		<div class = "login_container">
			<div class = "login_panel panel panel-default">
				<div class="panel-body">
				
					<?php
					
					if(isset ( $_GET['check_login']))
					{
						$_SESSION ['check_login'] = 2;
					}
					
					if( $_SESSION ['check_login'] == 1) {
					print '<div class="alert alert-danger">Please login before buy!</div>';
					}
					?>
	
					<h1 id="textHead" class = "text-center">Login Page</h1>
					
					<hr>
					<form data-toggle="validator" name="login_form" id="login_form" class = "form-horizontal"  method = "post" action="login.php">
					
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Username :</h4>
									<input type = "text" data-error="Please enter username field." class = "form-control" name = "username" placeholder = "Enter username" id="username" required >
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							
							
							<p id="username"></p>
							
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Password : </h4>
									<input type = "password" data-error="Please enter password field." class ="form-control" name = "password" placeholder = "Enter password" id="password" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<p id="password"></p>
							
							<div class = "form-group">
								<div class="col-sm-12">
									<input type = "Submit" class = "btn btn-block btn-default btn-info" value="Submit">
								</div>
							</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>

		
	</div>

	<?php include('footer.php');?>
</body>
</html>