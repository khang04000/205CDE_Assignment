<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About us</title>
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
	
	<?php include('connection.php');?>
	<?php include('nav_bar.php');?>
		
	<div class="container-fluid about_us">	
	<img src="picture/About_us/main.png" class="img-rounded img-responsive" alt="image1"><br/>
	
	<p><h1>About Us</h1></p>
	
	<p class="text">ABC Online Shopping is part of ABC Group which operates Southeast Asia’s number one online shopping and selling destination in Indonesia, Malaysia, Philippines, Singapore, Thailand and Vietnam. Pioneering eCommerce in the region, ABC Online Shopping provides customers with an effortless shopping experience and retailers with simple and direct access to the largest customer base in Southeast Asia.
	</p>
	
	<br/>
	
	<p><h3>One-Stop Shopping Destination</h3></p>
	
	<p class="text">With hundreds of thousands of products across categories including health and beauty, home and living, fashion, mobiles and tablets, consumer electronics and home appliances among others, Lazada is the place to visit for all your shopping needs.

	Besides an extensive selection of international and local brands, you’ll also find exciting products that are available exclusively on Lazada.
	</p>
	
	<br/>
	
	
	<p><h3>Easy and Accessible Shopping</h3></p>
	
	<p class="text">No more traffic jams, crowds and long queues! Shop anytime, anywhere via your computer and mobile phone.

	With our quick and reliable delivery service, just sit back, relax and your package will come to you.
	</p>
	
	<br/>
	
	<p><h3>Safe and Secure Shopping</h3></p>
	
	<p class="text">Understanding the importance of safe and secure shopping, we provide our customers with a broad range of secure payment options including cash-on-delivery, where you pay in cash only when you receive your package.

Be assured of product quality and authenticity: All purchases on Lazada are guaranteed to be genuine products, new, not defective or damaged. If it is, simply return it within 7 days for a full refund under our Buyer Protection Program.
	</p>
	
	<br/>
	
	</div>	

	<?php include('footer.php');?>
</body>
</html>