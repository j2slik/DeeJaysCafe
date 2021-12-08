<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DeeJay's Cafe Home Page</title>
	<link rel="stylesheet" href="style.css" type="text/css" />

<style>
body {
  font-family: "Lato", sans-serif;
	background-color: sienna;
}

.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: burlywood;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="https://cs.csub.edu/~jparks/3420/djcafe/home.php">Home</a>
  <a href="https://cs.csub.edu/~jparks/3420/djcafe/menu/menu.php">Menu</a>
  <a href="#order">Order</a>
  <a href="#clients">Clients</a>
  <a href="#staff">Staff</a>
  <a href="#signin">Sign In</a> 
</div>

<div class="main">
  <h2>Welcome to DeeJay's Cafe</h2>
  <p>Relax with us</p>
 </div>  

</body>
</html> 


