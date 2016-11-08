<?php
include "connection.php";
class Card
{
    public $cardID = "";
    public $image = "";
    public $name = "";
    public $level = "";
    public $hp = "";
    public $skillTitle = "";
    public $content = "";
    public $color = "";

    /**
     * Card constructor.
     * @param string $cardID
     * @param string $image
     * @param string $name
     * @param string $level
     * @param string $hp
     * @param string $skillTitle
     * @param string $content
     * @param string $color
     */
    public function __construct($image, $name, $level, $hp, $skillTitle, $content, $color)
    {
        $this->image = $image;
        $this->name = $name;
        $this->level = $level;
        $this->hp = $hp;
        $this->skillTitle = $skillTitle;
        $this->content = $content;
        $this->color = $color;
    }

    public function printCard()
    {
        $html = <<<HTML
<div class='card' id='{$this->cardID}'>
    <div class="header">
        <div class="name">{$this->name}</div>
        <div class="circle" style="background-color: {$this->color};"></div>
        <div style="clear: both; margin-bottom: 10px"></div>
        <div class="scores">
            <div class="level">Level: {$this->level}</div>
            <div class="hp">HP: {$this->hp}</div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="image"><img src="{$this->image}"></div>
    <div class="bio">
    {$this->content}
</div>
</div>
HTML;
        return $html;
    }

    /**
     * @param $conn mysqli
     */
    public function Save()
    {

            
$sql = <<<SQL
INSERT INTO card (`image`,`name`,`level`,`hp`,`content`,`color`, `skillTitle`)
VALUES ('{$this->image}','{$this->name}','{$this->level}','{$this->hp}','{$this->content}','{$this->color}', '')
SQL;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cards";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->close();
    }
}

/*
 *
<?php
        include 'connection.php';
        $sql="SELECT * FROM games";
        $result=$conn->query($sql);

        if ($result->num_rows>0) {
            while($row=$result->fetch_assoc()) {
                echo "<tr>
                <td>".$row"Name"."</td>
                <td>".$row"Age"."</td>
                <td>
                    <a href='http://store.steampowered.com/search/?term=".$row"Name"."'>Go</a>
                </td>
                <td>
                    <a href='https://www.amazon.co.uk/s/?url=search-alias%3Daps&field-keywords=".$row"Name"."'>Go</a>
                </td>
                </tr>";
            }
        }
         ?> */