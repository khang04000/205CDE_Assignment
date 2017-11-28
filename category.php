<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Category</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css1.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	

	<div id="container">
		<?php include('connection.php');?>
		<?php include('nav_bar.php');?>
		
		<div class="category_header">
		<div class="container-fluid">
			  <h1 class="category_header_text">Categories</h1>
		</div>
		</div>
		
		<div id="category_content">
		<div class="container-fluid">
		
		<div class="row">
		
			<div class="col-sm-4"><img src="picture/Category/category_1.jpg" class="img-rounded img-responsive" alt="image1">
				<a href="category1.php"><button type="button" class="btn btn-lg">Electric Appliances</button></a>
			</div>
			
			<div class="col-sm-4"><img src="picture/Category/category_2.jpg" class="img-rounded img-responsive" alt="image2">
				<a href="category2.php"><button type="button" class="btn btn-lg">Home & Living</button></a>
			</div>
	
			<div  class="col-sm-4"><img src="picture/Category/category_3.jpg" class="img-rounded img-responsive" alt="image3">
				<a href="category3.php"><button type="button" class="btn btn-lg">Health & Beauty</button></a>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-4"><img src="picture/Category/category_4.jpg" class="img-rounded img-responsive" alt="image4">
				<a href="category4.php"><button type="button" class="btn btn-lg">Men's Fashion</button></a>
			</div>
			<div class="col-sm-4"><img src="picture/Category/category_5.jpg" class="img-rounded img-responsive" alt="image5">
				<a href="category5.php"><button type="button" class="btn btn-lg">Women's Fashion</button></a>
			</div>
			<div class="col-sm-4"><img src="picture/Category/category_6_2.jpg" class="img-rounded img-responsive" alt="image6">
				<a href="category6.php"><button type="button" class="btn btn-lg">Sport</button></a>
			</div>
		</div>
	
		</div>
		</div>
		
				</div>
		<?php include('footer.php');?>
</body>
</html>