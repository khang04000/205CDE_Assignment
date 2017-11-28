<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>

	<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img id="item_image" src="" class="img-responsive"  >
                    </div>
					
					    <div class="modal-body col-md-6" style="font-size:25px">
					
					    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						
						<div class="product_content">
						            
						<h3 class="modal-title" id="item_name" style="margin-bottom:10px;font-size:30px"></h3>
				

                        <div class="rating" style="margin-bottom:8px;font-size:17px;">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
						

                       		<hr style="margin-right:235px">
					    <h3 class="cost" id="item_price" style="margin-bottom:15px;font-size:28px"><span class="glyphicon glyphicon-usd"></span></h3>
							<hr style="margin-right:235px">
					   
					   <form method = "post" action="order_confirm.php">
                        <div class="row">
                         
       
                            <!-- end col -->
	
                            <div class="col-md-12 col-sm-12">
												<h4>Select quantity</h4>
												
								<input class="form-control" type="number" style="width:120px;" name="select" placeholder="Quantity" required>		

                            </div>
                            <!-- end col -->
                        </div>



                        <div class="space-ten"></div>
                        <div class="btn-ground">
						
							
										
                       	  <Button type="submit" class="identifyingClass2 btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Now</button>
         
                        </div>
						 </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
