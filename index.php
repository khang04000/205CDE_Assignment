<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>M-Store Online Shopping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css1.css">	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
#user_account:hover {
	color:white;
}

/* Drop down menu */

.dropdown {
    width:150px;    
}

.dropdown-menu li a {
    color:black;
}
.dropdown ul {
    border-radius:4px;
    box-shadow:none;
    margin-top:20px;
    width:300px;
}
.dropdown ul:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -10px;
    right: 16px;
    z-index: 10;
}
.dropdown ul:after {
    content: "";
    border-bottom: 12px solid #fff;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    right: 14px;
    z-index: 9;
}


</style>

</head>

<body>
	

	<div id="container">
	<?php include('connection.php');?>

	
	
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="category.php">Categories</a></li>
				<li><a href="about_us.php">About us</a></li>
				<li><a href="contact.php">Contact us</a></li>
			</ul>
				
				

		<div class="container-fluid">
		<ul class="nav navbar-nav navbar-right">
		

<?php if (isset($_SESSION['user_id'])):?>


    <ul class="nav navbar-nav">
        <li class="dropdown">
	
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome,  <?php echo $_SESSION['user_name'] ?> <span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="purchase_history.php">Purchase History<span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="log_out.php">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
    </ul>
	  
				<!--<p id="user_account" class="navbar-text">Welcome,  <?php echo $_SESSION['user_name'] ?></p>-->


<?php else:?>
				<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login_form.php?check_login=1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

<?php endif; ?>

		</ul>
		</div>
		
	</nav>
	
	
	
	
	
		
	<div class="content">
		<h1 id="home_text">Welcome to M-Store Online Shopping Website</h1>
		<p id="home_btn"><a href="category.php"><button type="button" class="btn btn-default btn-lg black-background white">Shop Now</button></a></p>
	</div>	
	</div>	

	


</body>
</html>