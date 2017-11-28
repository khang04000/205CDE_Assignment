
<html>
<body>

<?php

	session_start(); 
	include('connection.php');
	

	if(!empty($_POST['user_name']) && !empty($_POST['user_address']) && !empty($_POST['user_contact']))
	{
		$res = array();
		$name = $_POST['user_name'];
		$address = $_POST['user_address'];
		$contact = $_POST['user_contact'];
		$product_id =  $_POST['product_id'];
		$product_qty = $_POST['product_qty'];

				
		$sql = "INSERT INTO item_order(user_id,name,contact,address,item_id,quantity)VALUES ('" . $_SESSION['user_id'] . "', '$name', '$contact', '$address', '$product_id', '$product_qty')";		

		mysqli_query($conn, $sql);
			
		$sql2 = "SELECT quantity FROM item where id = $product_id";
		
		$result = mysqli_query($conn, $sql2);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
		$current_qty = $row['quantity'];		
		$current_qty = $current_qty-$product_qty;	
		
		$sql3 = "UPDATE item SET quantity = $current_qty WHERE id= $product_id";
					
		mysqli_query($conn, $sql3);		


					
		header( "refresh:0; url= index.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
	}
	
	
	else
	{	
			//header('location:order_confirm.php');
			header( "refresh:0; url= order_confirm.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>
</body>
</html>