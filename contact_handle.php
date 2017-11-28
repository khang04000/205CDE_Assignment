<?php
	session_start(); 
	include('connection.php');
	
	

	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']))
	{
		$res = array();
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO contact_us(first_name,last_name,email,phone,message)VALUES ('$first_name', '$last_name', '$email', '$phone','$message')";		
		mysqli_query($conn, $sql);
					
		header( "refresh:0; url= contact.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
		

	}
	else
	{
			//header('location:contact.php');
			header( "refresh:0; url= contact.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column... ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>