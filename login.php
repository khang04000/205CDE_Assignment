<?php
	session_start(); 
	include('connection.php');
	
	

	if(!empty($_POST['username']) && !empty($_POST['password']) )
	{
		$res = array();
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "SELECT id,username,password FROM user WHERE username='$user' && password='$pass' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
		$id = $row['id'];
				
		
		if($row['username'] == $user && $row['password'] == $pass)
		{		
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $user;
			$_SESSION['user_pass'] = $pass;
			
			header( "refresh:0; url= index.php" );	
			echo '<script language="javascript">';
			echo 'alert("Login Successful")';
			echo '</script>';
			
			
		}
		else
		{
			//header('location:index.php');
			header( "refresh:0; url= login_form.php" );
			echo '<script language="javascript">';
			echo 'alert("Username or password does not exist")';
			echo '</script>';
		}
	}
	else
	{
			//header('location:index.php');
			header( "refresh:0; url= login_form.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all the column ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>