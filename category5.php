<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Women's Fashion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css1.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
        .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
		
		.product_img {height:100%;width:100%;max-width:100%;max-height:100%;}
		#item_image{vertical-align:middle;width:370px;height:450px;}

</style>
	
	
<script type="text/javascript">
	$(document).on("click", ".identifyingClass", function () {

     var id = $(this).data('id');
     var name = $(this).data('name');
     var price = $(this).data('price');
     var quantity = $(this).data('quantity');
     var image = $(this).data('image');
	 
	 sessionStorage.setItem('name', name);
	 sessionStorage.setItem('price', price);
	 sessionStorage.setItem('quantity', quantity);
	 sessionStorage.setItem('id', id);
	 
	 //alert("id="+id+"name="+name+"price="+price+"quantity="+quantity+"image="+image);

	 document.getElementById("item_name").innerHTML = name;
	 document.getElementById("item_price").innerHTML = "RM "+price;
	 document.getElementById("item_image").src = "picture/Category_5/" + image;


});
	
	
</script>	
	
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
	<?php 
	include('connection.php');
	
	$sql = "SELECT id, item_name, quantity, price,image FROM item where category='womens_fashion'";
	$result = $conn->query($sql);
	?>

	
	
	
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
	
	
	
	
	
	
	
	
	
	
	<div class="container-fluid category_title">
		<hr>
		<h1>Women's Fashion</h1>
		<hr>
	</div>
	

	
	<section class="products container-fluid">
	<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
	

	<div class="product-card">	
	
	<div class="thumbnail">
	  <img id="product-image" class="identifyingClass img-responsive scale" src="picture/Category_5/<?php echo $row['image']; ?>"
	   data-id="<?php echo $row['id'];?>" 
		data-name="<?php echo $row['item_name'];?>"
		data-price="<?php echo $row['price'];?>"
		data-quantity="<?php echo $row['quantity'];?>"
		data-image="<?php echo $row['image'];?>"
		data-toggle="modal" data-target="#product_view"
		style="cursor: pointer;">
    </div>
	
	<div class="product-info">
	
	<div class="title">
		<a href="home.php">
			<?php echo $row['item_name'];?>
		</a>
	</div>
	
	<div class="price">
	<?php echo "RM",$row['price'];?>
	</div>
	
	<button type="button"  
		data-id="<?php echo $row['id'];?>" 
		data-name="<?php echo $row['item_name'];?>"
		data-price="<?php echo $row['price'];?>"
		data-quantity="<?php echo $row['quantity'];?>"
		data-image="<?php echo $row['image'];?>"
		class="identifyingClass btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>Quick View
	</button>
	
	</div>
	
	</div>

	<?php }?>
	
	</section>
	

	</div>
	<?php include('footer.php');?>

	<?php  include('product_modal.php');?>	
</body>
</html>