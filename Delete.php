<?php
include("config.php");
$no=$_GET['id'];
$query = "Delete from register where id='$no'"; 
$data=mysqli_query($mysqli,$query);
if($data)
{
	echo"<font color='green'> <script>alert('Record deleted')</script>";
	?>
		<meta HTTP-EQUIV="Refresh" content="0; url=http://localhost/TATA/display.php">
	
	
	<?php
}
else
{
	echo"<font color='red'>Sorry,Delete process failed";
}
?>