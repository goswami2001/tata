<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>TATA</title>
  <link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">
</head>
<style>
  table{
    border-color: 	#00ffff;
    background-color: white;
    font-size: 35px;
    height: 200px;
    margin-top: 100px;
    width: 550px;
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
 
 input {
  height:50px;
  border-color: 	#00ffff;
  border-width: 5px;
}
  
 
</style>
<body bgcolor="black">
    <?php
include("header.php");
?>
  <center>
    <form action="" method="POST">
      <table border="20px">
        <tr>
          <td colspan="2"><center><h2>TATA</h2></center></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" placeholder="Your Name" pattern="([A-Za-z])+( [A-Za-z]+)" size="50" required></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type="email" name="email" size="50" placeholder="Email" maxlength="60"  title="Only lowercase latter allow " required></td>
        </tr>
        
        <tr>
          <td>username</td>
          <td><input type="text" name="username" maxlength="100" placeholder="username" size="50" required></td>
        </tr>
        
        <tr>
          <td>password</td>
          <td><input type="password" name="password" placeholder="Tata@123" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 
				or more characters"	size="50" required></td>
        </tr>

        <tr>
            <td colspan="2"><center><input type="submit" class="button" name="submit" value="register me" size="50"></center></td>
        </tr>
		
		<td colspan="2">You need to make a note of your username and password.</td>
        
        
      </table>
    </form>
    <?php

    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $username=$_POST['username'];
      $password=$_POST['password'];

      $res=mysqli_query($mysqli,"INSERT into register values('','$name','$email','$username',
        '$password')");
      if($res)
      {
        echo"<script>window.location.href = 'Serviceemail.php'; </script>";;
      }
      else
      {
        echo "failed";
      }
    }

  ?>
  </center>

</body>
</html>



