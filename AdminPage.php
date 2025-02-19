<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a  href="index.php" target="new">HOME PAGE</a></li>
  <li><a  href="CarShopList.php" target="main">CarShopList</a></li>
  <li><a  href="registerdisplay.php" target="main">UserRegisterList</a></li>
  <li><a href="feedbacklist.php" target="main">UserFeedBack</a></li>  
</ul>


</body>
</body>
</html>
