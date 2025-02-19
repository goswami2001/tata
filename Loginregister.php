<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>TATA</title>
<link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: Black ;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: YELLOW;
  color: BLACK;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
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
</head>
<body>
    <?php
include("header.php");
?>
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
  
    <div class="row">
      <h2 style="text-align:center">TATA<br>Service Your Car & Enjoy Life</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

<div class="col">
        <a href="https://www.facebook.com/TataMotorsGroup/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Facebook
         </a>
        <a href="https://twitter.com/tatamotors?lang=en" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Twitter
        </a>
        <a href="https://www.youtube.com/user/TataMotorsGroup" class="google btn"><i class="fa fa-youtube-play" style="font-size:20px;color:red">&nbsp;&nbsp;
          </i>YouTube
        </a>
      </div>


      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
		<form action = "Loginregister.php" method= 'POST' >
        <input type="text" name="uname" placeholder="Username" required>
        <input type="password" name="pass" placeholder="Password" required>
        
        <input type="submit" value="Login" class="button" name = "submit">
    	</form>

      </div>
      
    </div>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
        <a href="registerService.php" style="color:#F7FF4D" class="btn"><h3>Sign up</h3></a>
    </div>
    <div class="col">
        <a href="admin login.php" style="color:#7DFF33" class="btn"><h3>Admin</h3></a>
    </div>
  </div>
</div>





</body>
</html>
<?php if(isset($_POST['submit']))
{
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$q = mysqli_query($mysqli,"select *from register where username = '$uname' AND password = '$pass'");
	$n = mysqli_num_rows($q);
	if( $n > 0)
	{
		echo "<script>window.location.href = 'Serviceemail.php'; </script>";
	}
	else
	{
		echo "<script>alert('Username or Password Incorrect !!'); 
		window.location.href = 'Login.php'; </script>";
	}
}
?>