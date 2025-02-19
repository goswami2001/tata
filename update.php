
<!DOCTYPE html>
<html>
<head>
	
	<title>TATA MOTORS</title>
	<script src="cities.js"></script>
<link rel = "icon" href =  "Logo\title.png " 
        type = "image/x-icon">
        <style>
        	 table 
         { 
         margin-top: 50px;
         margin-right: 80px;
         margin-left: 50px; 
         border:20px solid ; 
         padding:10px; 
         border-color: YELLOW;
         } 

         button {
  border: none;
  color: blue;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: white;
}

input
{
	width: 600px;
	height: 30px;
	border-radius: 10px;
	border-color: blue;
	
}


        </style>
</head>
<body >
    <?php
include("header.php");
?>

	<form action=" " method="POST">
<center><font size="5px" color="black">
<table border="2px" >

	<tr>
		<td colspan="2"><center>TATA</center></td>
	</tr>

	<tr>
		<td width="300PX">Your Full Name</td>
		<td><input type="text" placeholder="YourFullname" maxlength="100" name="name" size="50" height="20px" 
		 required></td>
		 <td><?php  echo $_GET['nm']; ?></td>
	</tr>

	<tr>
		<td>State</td>
		<td>
			<select  onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
			
		   </td>
		   <td><?php  echo $_GET['st']; ?></td>
	</tr>

<script language="javascript">print_state("sts");</script>

<script language="javascript">print_state("sts");</script>
	<tr>
		<td>City</td>
		<td>
			<select id ="state" class="form-control" name="city" required></select>
			

		</td>
		
		<td><?php  echo $_GET['ci']; ?></td>
	</tr>

	<tr>
		<td>BirthDate</td>
		<td><input type="date" placeholder="BirthDate"  name="date" size="50" required></td>
		<td><?php  echo $_GET['bd']; ?></td>
	</tr>

	<tr>
		<td>Mobile No</td>
		
		<td><input type="tel" id="phone" name="mobileno"  placeholder="ONLY 10 DIGIT" pattern="[0-9]{10}" required></td>
		<td><?php  echo $_GET['mb']; ?></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="email" placeholder="Your Email" title="please use @" name="email"  size="50"></td>
		<td><?php  echo $_GET['em']; ?></td> 
	</tr>

	<tr>
		<td>Adhar No</td>
		<td><input type="tel" id="phone" name="adno" placeholder="ONLY 16 DIGIT" pattern="[0-9]{16}"  required></td>
		<td><?php  echo $_GET['adno']; ?></td>
	</tr>

	<tr>
		<td>Payment</td>
		<td><select name = "payment" required>
            <option name = "payment">Cash On Delivery</option>
            <option name = "payment">Loan</option>
            <option name = "payment">Check</option>
         </select>

		</td>
		<td><?php  echo $_GET['pay']; ?></td>
	</tr>

	<tr>
		<td>Choose Catagory</td>
		<td style="display: inline-flex;"><input type="radio" required style="width: 20px;height: 20px"  name="cat" value="HatchBack">
  			HatchBack &emsp;<input type="radio" style="width: 20px;height: 20px"  name="cat" value="Suv">
  			Suv&emsp;
  			<input type="radio" style="width: 20px;height: 20px" name="cat" value="Mpv">
  			Mpv
  			<input type="radio" style="width: 20px;height: 20px" name="cat" value="Mpv">
  			Sedan
		</td>
		<td><?php  echo $_GET['cat']; ?></td>
	</tr>

	<tr>
		<td>Choose Model</td> 
		<td><select name = "model" required>
			
			<option name = "model">Tiago XT</option>
            <option name = "model">Tiago XM</option>
            <option name = "model">Tiago XZ</option>
            <option name = "model">Tiago XZA</option>
            <option name = "model">Tiago XZ+</option>
 			</select>
		
		</td>
		
		<td><?php  echo $_GET['modal']; ?></td>
	</tr>

	<tr>
		<td colspan="2"><center><input type="submit" name="submit" value="Update"></center></td>
	</tr>
	
</table>
</center>
</font>
</center>
</form>

<?php

    if(isset($_POST['submit']))
    {
		$id=$_GET['id'];
		$fname=$_GET['name'];
		$query = "update carbuy set name='$fname', state='$state', city='$city', date='$date', mobileno='$mobileno', email='$email', adharno='$adno', payment='$payment', cat='$cat', model='$model' where id='$id'";  
		$data=mysqli_query($mysqli,$query);
		if($data)
		{
				echo"Record update";
		}

	else
	{
		echo"bhadva record nakh";
	}					
      
  ?>
</body>
</html>