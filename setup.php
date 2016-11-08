<?php
include "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS cards(
cardID INTEGER,
name VARCHAR(255),
hp VARCHAR(255),
score VARCHAR(255),
content VARCHAR(255),
image VARCHAR(255),
skillTitle VARCHAR(255),
color VARCHAR(255)
);
";

if($conn->query($sql)){
echo "success";
} else {
echo $conn->error;
}

$conn->close();
?>
