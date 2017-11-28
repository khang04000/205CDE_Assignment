<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

	
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
	
</head>

<body>
	
	
	<div id="container">
	<?php 
	include('connection.php');
	include('nav_bar.php');

	?>
		

                <form data-toggle="validator" class="form-horizontal form1" method="post" action="contact_handle.php">
                    <fieldset>
				
                        <legend class="text-center header">
						
						<h3>Contact us</h3>
						
						<p>Fill in the form below to send us a message:</p>
						</legend>
					
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control"
								data-error="Please enter first name." required>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control"
								data-error="Please enter last name." required>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control"
								data-error="Please enter email address." required>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control"
								data-error="Please enter phone number." required>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control message" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"
								data-error="Please enter meesage." required></textarea>
							    <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>


	</div>
	<?php include('footer.php');?>
	
</body>
</html>











