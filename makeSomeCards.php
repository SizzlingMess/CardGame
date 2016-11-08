<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
include 'connection.php';
include 'Card.php';

$sql = "SELECT * FROM card";
$result = [];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $cardID = $row["cardID"];
        $image = $row["image"];
        $name = $row["name"];
        $level = $row["level"];
        $hp = $row["hp"];
        $skillTitle = $row["skillTitle"];
        $content = $row["content"];
        $color = $row["color"];

        $card = new Card(
            $image,
            $name,
            $level,
            $hp,
            $skillTitle,
            $content,
            $color);
        print $card->printCard();
    }

    ?>
    <div class="card newcard">
        <form>
            <h2>Name:</h2>
            <input name="name" type="text" title="name">
            <h2>Level:</h2>
            <input name="level" type="number" title="level">
            <h2>HP:</h2>
            <input name="hp" type="number" title="hp">
            <h2>Image path</h2>
            <input name="image" type="text" title="image">
            <h2>BIO</h2>
            <textarea name="bio" rows="5" cols="22" title="bio"></textarea>
            <h2>Circle color</h2>
            <input name="color" type="text" title="color">
            <br>
            <br>
            <button name="submit">Submit</button>
        </form>
    </div>
    <?php

    print $sql;


    if (isset($_GET["name"]) && $_GET["name"] != "") {
        $card2 = new Card(
            urldecode($_GET["image"]),
            urldecode($_GET["name"]),
            urldecode($_GET["level"]),
            urldecode($_GET["hp"]),
            "",
            urldecode($_GET["bio"]),
            urldecode($_GET["color"])
        );
        $card2->Save();
    }


}
