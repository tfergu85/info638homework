<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>week10video</title>
</head>
<body>
<?php
require_once("examplelogin.php");

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM items";
$result = $conn->query($query);
if (!$result) die($conn->error);
  
$rows = $result->num_rows;

while ($row = $result->fetch_assoc()) {
	echo $row["item_id"]." ".$row["item_name"]." ".$row["item_type"]." ";
	echo $row["item_date"]."<br>";
}

$result->close();
$conn->close();

?>
</body>
</html>