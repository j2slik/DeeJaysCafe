<?php
//Menu Page - sorting menu items
require_once "connect.php";
define("IMG_DIR", "https://cs.csub.edu/~jparks/3420/djcafe/menu/images/");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DeeJay's Cafe Menu Page</title>
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

div.wrapper{
    position:relative;  /* body */
    margin:0px auto; /* center a webpage */
    text-align: center;
    border: solid black 1px;
    width: 800px;
    height:410px;
}
div.image{
    position:absolute;
    top:5px;
    left:5px;
    height:400px;
    width:300px;
    border:solid black 1px;
}

div.content{
    position:absolute;
    top: 5px;
    right:5px;
    height:400px;
    width:480px;
    border:solid black 1px;
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
</div>

<div class="main">
  <h2>Welcome to DeeJay's Cafe</h2>
  <h3>Menu</h3>
	<form method="GET" action="menu.php">
  <label for="sortby">Sort By</label>
  <select name="sortby" id="sortby" onchange="this.form.submit()">
	<option value=""></option>
	<option value="ABC">ABC Order</option>
	<option value="priceHighToLow">Price High to Low</option>
	<option value="priceLowToHigh">Price Low to High</option>
  </select>
</form>
<?php
$stmt='';
if (isset($_GET["sortby"])) {
	switch ($_GET["sortby"]) {

	case "ABC":
		$stmt = $conn->prepare("SELECT * FROM MenuItem ORDER BY MenuItemName");
		$stmt->bind_param("si", $_GET["sortby"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			echo "<div class='wrapper'>";
			echo "<br>";
			echo "<div class='image'>";
			echo '<img src="'.IMG_DIR.$row["Img"].'"alt="HTML5 Icon" style="width:295px;height:395px">';
			echo "</div>";
			echo "<br>";
			echo "<div class='content'>";
			echo "<br> <h4>" . $row["MenuItemName"] . "</h4>";
			echo "<br> <p> Price: $" . $row["Price"] . "</p>";
			echo "</div>";
			echo "<br>";
			/* echo "<div class='description'>";
			echo "<br> <p>" . $row["description"] . "</p>";
			echo "</div>"; */
			echo "</div>";
			echo "<br><br>";
		}
		$result->free();
		break;

	case "priceHighToLow":
		$stmt = $conn->prepare("SELECT * FROM MenuItem ORDER BY Price DESC");
		$stmt->bind_param("si", $_GET["sortby"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			echo "<div class='wrapper'>";
			echo "<br>";
			echo "<div class='image'>";
			echo '<img src="'.IMG_DIR.$row["Img"].'"alt="HTML5 Icon" style="width:295px;height:395px">';
			echo "</div>";
			echo "<br>";
			echo "<div class='content'>";
			echo "<br> <h4>" . $row["MenuItemName"] . "</h4>";
			echo "<br> <p> Price: $" . $row["Price"] . "</p>";
			echo "</div>";
			echo "<br>";
			echo "</div>";
			echo "<br><br>";
		}
		$result->free();
		break;

	case "priceLowToHigh":
		$stmt = $conn->prepare("SELECT * FROM MenuItem ORDER BY Price ASC");
		$stmt->bind_param("si", $_GET["sortby"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			echo "<div class='wrapper'>";
			echo "<br>";
			echo "<div class='image'>";
			echo '<img src="'.IMG_DIR.$row["Img"].'"alt="HTML5 Icon" style="width:295px;height:395px">';
			echo "</div>";
			echo "<br>";
			echo "<div class='content'>";
			echo "<br> <h4>" . $row["MenuItemName"] . "</h4>";
			echo "<br> <p> Price: $" . $row["Price"] . "</p>";
			echo "</div>";
			echo "<br>";
			echo "</div>";
			echo "<br><br>";
		}
		$result->free();
		break;

	case '':
	default:
	$stmt = $conn->prepare("SELECT * FROM MenuItem");
	$stmt->bind_param("si", $_GET["sortby"]);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
		echo "<div class='wrapper'>";
		echo "<br>";
		echo "<div class='image'>";
		echo '<img src="'.IMG_DIR.$row["Img"].'"alt="HTML5 Icon" style="width:295px;height:395px">';
		echo "</div>";
		echo "<br>";
		echo "<div class='content'>";
		echo "<br> <h4>" . $row["MenuItemName"] . "</h4>";
		echo "<br> <p> Price: $" . $row["Price"] . "</p>";
		echo "</div>";
		echo "<br>";
		echo "</div>";
		echo "<br><br>";
	}
	$result->free();
	break;
	}
}
else {
	echo "0 results";
}

$conn->close();

?>

 </div>  

</body>
</html> 


