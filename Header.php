<!DOCTYPE html>
<html>
<head>
	<title>TATA</title>
<link rel = "icon" href =  "Logo\newLogo.jpg " 
        type = "image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: Blue;
  color: white;
}

.topnav .icon {
  display: none;
  background-color: black;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 18px;    
  border: none;
  outline: none;
  color: Blue;
  padding: 24px 26px;
  background-color:White;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;

  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: Black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: grey;
  color: white;
}

.dropdown-content a:hover {
  background-color: grey;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }

  
}
</style>
</head>
<body>
<script>
	
	
	function gel()
	{
		window.location.href="gallary.php"; 
	}
	
	function carshop()
	{
		window.location.href="Login.php"; 
	}
	function carservice()
	{
		window.location.href="Loginregister.php"; 
	}
	function home()
	{
		window.location.href="Index.php"; 
	}
	
  function admins()
  {
    window.location.href="Login.php"; 
  }	
	
	
</script>
<div class="topnav" id="myTopnav">
	<img src="Logo\Tatalogo.png" width="200px"></img>



  <div class="dropdown">
    <button class="dropbtn" onclick="admins()">Login 
      
    </button>
  </a>
  </div>


<div class="dropdown">
    <button class="dropbtn">About us 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ContactUs.html">Contact us</a>
      <a href="Safty.php">Safty</a>
      <a href="feedback1.php">FeedBack</a>
      
 
    </div>
   
  </div>
 

  
  
   <div class="dropdown">
    <button class="dropbtn" onclick="carservice()">CarService 
      
    </button>
	</a>
  </div>

  
  
    <div class="dropdown">
    <button class="dropbtn" onclick="carshop()">CarShop 
      
    </button>
	</a>
  </div>
  
    <div class="dropdown">
    <button class="dropbtn">Video
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     
      <a href="Video.php">Car Video</a>
      <a href="Car Walkround Video.php">Car Full Walkround</a>
      

      
    </div>
  </div>
  
 
  
  <div class="dropdown">
    <button class="dropbtn" onclick="gel()">Gallary 
      
    </button>
  </a>
  </div>

    <div class="dropdown">
    <button class="dropbtn">Product 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/TATA/CarModel/Tiago.php">Tiago</a>
      <a href="http://localhost/TATA/CarModel/Tiagor.php">Tigor</a>
      <a href="http://localhost/TATA/CarModel/tiagorev.php">TigorEV</a>
      <a href="http://localhost/TATA/CarModel/hexa.php">Hexa</a>
      <a href="http://localhost/TATA/CarModel/nexon.php">Nexon</a>
      <a href="http://localhost/TATA/CarModel/nexonev.php">NexonEV</a>
      <a href="http://localhost/TATA/CarModel/altroz.php">Altaroz</a>
      <a href="http://localhost/TATA/CarModel/harrier.php">Harrier</a>
	  </a>
	  
        </div>
  </div>
  
   <div class="dropdown">
    <button class="dropbtn" onclick="home()">Home 
      
    </button>
	</a>
  </div>
 
 

    


  
  

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9778;</a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
