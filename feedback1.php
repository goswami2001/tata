<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>TATA</title>
</head>
  <link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">
<style>
	table{
		border-color: yellow;
    background-color: white;
    font-size: 25px;
    height: 200px;
    margin-top: 100px;
    width: 550px;
    margin-left: 450px;
	}
	
	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button{
	-webkit-appearance: none;
	margin: 0;
	maxlength:10;
	}
	
	 .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: red;
  background-color: pink;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: lightblue}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 


</style>
<script>

function phonenumber(inputtxt)
{
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if((inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
}

</script>

<body bgcolor="black">
    <?php
include("header.php");
?>
	<form action="" method="POST">
		<table border="20px">
		<tr>
			<td colspan="2"><center>TATA</center></td>
		<tr>
		<tr>	
		<td>Name</td>
			<td><input type="text" name="name"size="72" pattern="([A-Za-z])+( [A-Za-z]+)" placeholder="Your Name"maxlength="50" required></td>
		</tr>
		
		<tr>
			<td>Email</td>
				<td><input type="email" name="email" max="100" size="72" placeholder="Email" required></td>
			</tr>
		<tr>
			<td>PhoneNo</td>
				<td><input type="tel" id="phone" name="phoneno" size="72" placeholder="ONLY 10 DIGIT" pattern="[0-9]{10}" required></td>
			</tr>
		<tr>
			<td>FeedBack</td>
			<td><textarea id="subject" style="height: 100px;width:520px;" name="feedback" placeholder="Write something.."  size="50" required></textarea><br></td>
		</tr>
		
		<tr>
			<td colspan="2"><center><input type="submit" name="submit" class="button" value="Submit your feedback" required></center></td> 
		</tr>
</table>

	</form>

	<?php

		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phoneno=$_POST['phoneno'];
			$feedback=$_POST['feedback'];

			$res=mysqli_query($mysqli,"INSERT into feedback values('','$name','$email','$phoneno',
				'$feedback')");
			if($res)
			{
				echo"<script>alert('Your feedback is taken into account. You will receive a call within 48 hours. Tell us your problem in detail '); </script>";
		 echo"<script>window.location.href = 'http://localhost/TATA/';</script>";
			}
			else
			{
				echo "failed";
			}
		}

	?>

	

</body>
</html>

