<?php 
require 'config.php';
try {
	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/*echo "Connected successfully";*/

} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

if (isset($_GET['delete'])) {
	
	$sql = "DELETE FROM product_list WHERE ID=" . $_GET['delete'];
	$conn->exec($sql);
	
}


if (isset($_POST['submit'])) {
	$conn->exec("INSERT INTO product_list (Title, Description, Price) VALUES ('".$_POST['Title']."','" . $_POST['Description']."','" . $_POST['Price']."')");
}

$query = $conn->prepare("SELECT * FROM product_list");
$query->execute();

$products = $query->fetchAll(PDO::FETCH_ASSOC);



// print_r($_GET['delete']);






 ?>