<?php
$a = $_REQUEST["q"];
$b = $_REQUEST["n"];
$c= $_REQUEST["chat"];



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

$sql = "SELECT * FROM chat where name='$a' ";

echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $sql = "SELECT * FROM chat where name='$a' AND password='$b' ";

    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        $sql = "UPDATE chat SET chat = '$c' WHERE name = '$a'";
        $result = $conn->query($sql);
    }
    else{
      echo "no value";

    }
} else {
    $sql = "INSERT INTO chat(name, password, chat) VALUES ('$a', '$b', '$c')";
    $result = $conn->query($sql);


}
$conn->close();
?>
