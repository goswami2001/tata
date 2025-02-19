<?php include("config.php"); 

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$q = mysqli_query($mysqli,"select *from register where username = '$uname' AND password = '$pass'");
	$n = mysqli_num_rows($q);
	if( $n > 0)
	{
		header("location:carbuy.php");
	}
	else
	{
		echo "<script>alert('Username or Password Incorrect !!'); 
		window.location.href = 'Login.php'; </script>";
	}
?>