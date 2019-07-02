<?php


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

$sql = "SELECT * FROM chat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "User : Password";

    while($row = $result->fetch_assoc()) {
        echo "<ul>";
        echo "<li>".$row['name']. ":". $row['password']. "</li>";
        echo "</ul>";
        //$sql = "UPDATE chat SET chat = '$c' WHERE name = '$a'";
        //$result = $conn->query($sql);
      }
} else {
    echo "no value";
}
$conn->close();
?>
