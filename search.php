<?php
$conn = new mysqli("localhost", "root", "", "vulnerable_db");

$query = $_GET["query"];
$sql = "SELECT * FROM products WHERE name LIKE '%$query%'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Product: " . $row["name"] . "<br>";
}
?>
