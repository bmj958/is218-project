<?php
$a = $_REQUEST["q"];


$servername = "anitikaphp.c04ehxpsv4e3.us-east-2.rds.amazonaws.com";
$username = "root";
$password = "anitikag21";
$dbname = "ag2329";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT chat FROM chat where name='$a' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["chat"];

      }
} else {
    echo "no value";
}
$conn->close();
?>
