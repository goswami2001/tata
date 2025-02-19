<?php
 $id = $_REQUEST['id'];

?>


<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>TATA MOTORS</title>
		<link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">
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
<body>
<?php $q= mysqli_query($mysqli,"select *from carbuy where id='$id'");
	$res = mysqli_fetch_array($q);
	?>

	<form action="update1.php" method="POST">
<center><font size="5px" color="black">
<table border="2px" >

	<tr>
		<td colspan="3"><center>TATA</center></td>
	</tr>
<tr><td><input type='hidden' name='id' value='<?php  echo $res['id']; ?>' ></td></tr>
	<tr>
		<td width="300PX">Your Full Name</td>
		<td><input type="text" placeholder="YourFullname" pattern="([A-Za-z])+( [A-Za-z]+)" Title="Minimum 2 words"maxlength="100"  name="fname" size="50" height="20px" required></td>
		<td><?php  echo $res['name']; ?></td>
	</tr>

	<tr>
		<td>State</td>
		<td>
			<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
            </td>
			<td><?php  echo $res['state']; ?></td>
	</tr>

<script language="javascript">print_state("sts");</script>

<script language="javascript">print_state("sts");</script>
	<tr>
		<td>City</td>
		<td>
			<select id ="state" class="form-control" name="city" required></select>

		</td>
		<td><?php  echo $res['city']; ?></td>
	</tr>

	<tr>
		<td>BirthDate</td>
		<td><input type="date" placeholder="BirthDate" name="date" size="50" required></td>
		<td><?php  echo $res['birthdate']; ?></td>
	</tr>

	<tr>
		<td>Mobile No</td>
		
		<td><input type="tel" id="phone" name="mobileno" placeholder="ONLY 10 DIGIT" pattern="[0-9]{10}" required></td>
		<td><?php  echo $res['mobileno']; ?></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="email" placeholder="Your Email" title="please use @" name="email" size="50"></td>
		<td><?php  echo $res['email']; ?></td>
	</tr>

	<tr>
		<td>Adhar No</td>
		<td><input type="tel" id="phone" name="adno" placeholder="ONLY 16 DIGIT" pattern="[0-9]{16}" required></td>
		<td><?php  echo $res['adharno']; ?></td>
	</tr>

	<tr>
		<td>Payment</td>
		<td><select name = "payment" required>
            <option name = "payment">Cash On Delivery</option>
            <option name = "payment">Loan</option>
            <option name = "payment">Check</option>
         </select>
			
		</td>
		<td><?php  echo $res['payment']; ?></td>
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
		<td><?php  echo $res['choosecatagory']; ?></td>
	</tr>

	<tr>
		<td>Choose Model</td> 
		<td><select name ="modal" required>
			
		
			<option name = "model">Tiago XE Rs 4,69,000</option>
            <option name = "model">Tiago XT Rs 5,33,000</option>
            <option name = "model">Tiago XZ Rs 5,83,000</option>
            <option name = "model">Tiago XZ+ Rs 6,12,000</option>
            <option name = "model">Tiago XZ+ DT NEW Rs 6,23,000</option>
            <option name = "model">Tiago XZA  NEW Rs 6,33,000</option>
            <option name = "model">Tiago XZA+NEW Rs 6,62,000</option>
            <option name = "model">Tiago XZA+DT New 6,73,000</option>
            
			<option name = "model">Tigor XE New 5,39,00</option>
            <option name = "model">Tigor XM New 5,99,00+</option>
            <option name = "model">Tigor XZ New 6,40,00</option>
            <option name = "model">Tigor XZ+ New 6,99,00</option>
            <option name = "model">Tigor XMA New 6,49,00</option>
            <option name = "model">Tigor XZA+ New 7,49,00</option>
            
			<option name = "model">Tigor EV XE + 15.01 lakh</option>
            <option name = "model">Tigor EV XM + 15.26 lakh</option>
            <option name = "model">Tigor EV XT + 15.40 lakh</option>
           
		   <option name = "model">
Altroz XE 5,44,000</option>
            <option name = "model">Altroz XE RHYTM 5,70,000</option>
            <option name = "model">Altroz XM 6,30,000</option>
            <option name = "model">Altroz XM Style 6,64,000</option>
            <option name = "model">Altroz XM Rhytm 6,69,000</option>
            <option name = "model">Altroz XM RHYTM+STYLE 6,94,000</option>
            <option name = "model">Altroz XT  6,99,000</option>
            <option name = "model">Altroz XT LUXE 7,38,000</option>
            <option name = "model">Altroz XZ 7,59,000</option>
            <option name = "model">Altroz XZ(0)  7,75,000</option>
            <option name = "model">Altroz XZ URBAN  7,89,000</option>
           
		   <option name = "model">Diesel Altroz XE 1.5D 6,99,000</option>
            <option name = "model">Diesel Altroz XE 1.5D RHYTM 7,27,000</option>
            <option name = "model">Diesel Altroz XM 1.5D 7,90,000</option>
            <option name = "model">Diesel Altroz XM 1.5D STYLE 8,24,000</option>
            <option name = "model">Diesel Altroz XM 1.5D RHYTM 8,29,000</option>
            <option name = "model">Diesel Altroz XM 1.5D RHYTM+STYLE 8,54,000</option>
            <option name = "model"> Altroz XT 1.5D RHYTM+STYLE 8,59,000</option>
            <option name = "model"> Altroz XT 1.5D Luxe 8,98,000</option>
            <option name = "model">Altroz XZ 1.5D  9,19,000</option>
            <option name = "model"> Altroz XZ(o) 1.5D  9,35,000</option>
            <option name = "model">Diesel Altroz XZ 1.5D  9,49,000</option>
            
			<option name = "model">Nexon XE 6,99,900</option>
            <option name = "model">Nexon Xm 7,84,500</option>
            <option name = "model">Nexon XM(S) 8,36,500</option>
            <option name = "model">Nexon XZ 8,84,500</option>
            <option name = "model">Nexon XZ+ 9,64,500</option>
            <option name = "model">Nexon XZ+DT9,84,500</option>
            <option name = "model">Nexon XZ+(S) 10,24,500</option>
            <option name = "model">Nexon XZ+DT(o) 10,74,500</option>
           
		   <option name = "model">Diesel Nexon XE 8,45,000</option>
            <option name = "model">Diesel Nexon XM 9,20,000</option>
            <option name = "model">Diesel Nexon XM (s) 9,70,000</option>
            <option name = "model">Diesel Nexon XZ 10,20,000</option>
            <option name = "model">Diesel Nexon XZ+ 11,00,000</option>
            <option name = "model">Diesel Nexon XZ+DT 11,20,000</option>
            <option name = "model">Diesel Nexon XZ+(s) 11,60,000</option>
            <option name = "model">Diesel Nexon XZ+DT(s) 11,80,000</option>
            <option name = "model">Diesel Nexon XZ(o) 11,90,000</option>
            <option name = "model">Diesel Nexon XZ+DT(o) 12,10,000</option>
            
			<option name = "model">Nexon AMT XMA 8,44,500</option>
            <option name = "model">Nexon AMT XMA(s) 8,96,500</option>
            <option name = "model">Nexon AMT XMA 9,80,000</option>
            <option name = "model">Nexon AMT XZA+ 10,24,500</option>
            <option name = "model">Nexon AMT XMA(s) 10,30,000</option>
            <option name = "model">Nexon AMT XZA+DT 10,44,500</option>
            <option name = "model">Nexon AMT XZA+(s) 10,84,500</option>
            <option name = "model">Nexon AMT XZA+DT(s) 11,04,500</option>
            <option name = "model">Nexon AMT XZA+(o) 11,14,500</option>
            <option name = "model">Nexon AMT XZA+DT(o) 11,34,500</option>
            <option name = "model">Nexon AMT XZA+ 11,60,000</option>
            <option name = "model">Nexon AMT XZA+DT 11,80,000</option>
            <option name = "model">Nexon AMT XZA+(S) 12,20,000</option>
            <option name = "model">Nexon AMT XZA+DT(s) 12,40,000</option>
            <option name = "model">Nexon AMT XZA+(o) 12,50,000</option>
            <option name = "model">Nexon AMT XZA+DT(o) 12,70,000</option>
            
			<option name = "model">Nexon EV XM 13,99 Lakh</option>
            <option name = "model">Nexon EV XZ Plus 14,99  Lakh</option>
            <option name = "model">Nexon EV XZ Plus 15,99 Lakh</option>
           
		   <option name = "model">Harrier XE 13,84,000</option>
            <option name = "model">Harrier XM 15,15,000</option>
            <option name = "model">Harrier XT 16,40,000</option>
            <option name = "model">Harrier XT+ 16,99,000</option>
            <option name = "model">Harrier XZ 17,65,000</option>
            <option name = "model">Harrier XZ DT 17,75,000</option>
            <option name = "model">Harrier XZ DARK EDITION 17,85,000</option>
            <option name = "model">Harrier XZ+ 18,90,000</option>
            <option name = "model">Harrier XZ+DT 19,00,000</option>
            <option name = "model">Harrier XZ+DARK EDITION 19,10,000</option>
           
		   <option name = "model">Harrier AMT XMA 16,40,000</option>
            <option name = "model">Harrier AMT XZA 18,95,000</option>
            <option name = "model">Harrier AMT XZA DT 19,05,000</option>
            <option name = "model">Harrier AMT XZA DARK EDITION 19,15,000</option>
            <option name = "model">Harrier AMT XZA+ 19,99,500</option>
            <option name = "model">Harrier AMT XZA+DT 20,20,000</option>
            <option name = "model">Harrier AMT XZA+ DARK EDITION 20,30,000option></option>
           
		   <option name = "model">Hexa(BOOKING OPEN NOTE:Prices will come down soon)</option>
 			</select>
		
		</td>
	<td><?php  echo $res['choosemodal']; ?></td>
	</tr>

	<tr>
		<td colspan="2"><center><input type="submit" name="Update"></center></td>
	</tr>
	
</table>
</center>
</font>
</center>
</form>

<?php

    if(isset($_POST['Update']))
    {
		$id = $_POST['id'];
		$name = $_POST['fname'];
		$state = $_POST['stt'];
		$city = $_POST['city'];
		$date = $_POST['date'];
		$mobileno = $_POST['mobileno'];
		$email = $_POST['email'];
		$adno = $_POST['adno'];
		$payment = $_POST['payment'];
		$cat = $_POST['cat'];
		$modal = $_POST['modal'];
		$query = "update carbuy set name='$name', state='$state ', city='$city', birthdate='$date', mobileno='$mobileno', email='$email', adharno='$adno', payment='$payment', choosecatagory='$cat', choosemodal='$modal' where id=$id ";
		
		//aa query kadhvani haok
		

		
		$data = mysqli_query($mysqli, $query);
		if($data)
		{
			echo "Record updated successfuly";
		}
		else
		{
			echo "Record not Updated";
		}
	}
	
	  

  ?>
</body>
</html>