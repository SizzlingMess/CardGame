<?php

include '../connection.php';
if (isset($_POST["image"]) && $_POST["image"] != "")
{
$sql = <<<SQL
        INSERT INTO cards (`image`,`name`,`score`,`hp`,`content`,`color`, `skillTitle`)
        VALUES ('$_POST["image"]','$_POST["name"]','$_POST["level"]','$_POST["hp"]','$_POST["content"]','$_POST["color"]', '')
SQL;
$conn->query($sql);

}


