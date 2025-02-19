<!doctype html>
<html>
	<head>
	  <title>TATA</title>
	</head>
	<style>
	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

	
	
	</style>
	
	
    <?php
include("header.php");
?>
<script language="javascript">
<!--//
/*This Script allows people to enter by using a form that asks for a
UserID and Password*/
function pasuser(form) {
if (form.id.value=="rjnadmin") { 
if (form.pass.value=="rjn1317") {              
location="adminframe.php" 
} else {
alert("Invalid Password")
}
} else {  alert("Invalid UserID")
}
}
//-->
</script>
<body bgcolor="#8c7373">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table bgcolor="lightgrey" cellpadding="12"> 
<tr>
	<td colspan="2"><center><h1><i><b>Admin Login</b></i></h1></center></td>
</tr>
<tr>
	<td><h1><i><b>UserID:</b></i></h1></td>
	<td><form name="login"><input name="id" type="text"></td>
	</tr>
<tr>
	<td><h1><i><b>Password:</b></i></h1></td>
	<td><input name="pass" type="password"></td>
</tr>
<tr>
	<td colspan="2"><center><input type="button" value="Login"onClick="pasuser(this.form)" class="button button2"></center></td>
</tr>

</body>
</html>
	