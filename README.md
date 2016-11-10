# Card Game

## Current Functionality: 

* Show all cards (In beautiful purple :S )
* Add a new card to the database
* Make a connection with the database (see below)
* Create the table if it doesn't alreasdy exist 

## TODO: 
* Simple virtual machine, vagrant possibly. Just so that the database can have only one possible set of values
* Make an android and iOS app that can use the api
* Better styling (see seperate list)
* Login functionality
* Trade cards with friends 
* Remove unused fields from the database and code 
* Different types of cards
* Use javascript to raise methods on the different types of cards using ` call_user_func(){} `
* make an index page 
* make a login page 

### TODO - STYLES: 
* Remove purple background
* Set background based on card type

# Setting up 
Clone the repo
`git clone https://github.com/jamesanderson9182/CardGame.git`
Make a file called connection.php in the project root
Paste this in and save it. (This is so that you can have your own database credentials until I get vagrant set up)
`<?php
// ToDo: Put your details here Dan
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cards";

$conn = new mysqli($servername, $username, $password, $dbname);
/*
if ($conn->connect_error) {
 	die("Connect Failed: ".$conn->connect_error);

 }
 else{
 	echo "Connected Sucessfully";
 }
 */ 
`

Make a database called cards
Enter your project root directory 
`php setup.php`

Or navigate to it in your browser if you already have apache set up. WAMP, XAMP (and MAMP if you're using mac) are really handy if you're testing this out.

#Fork Me!
To submit some of your own changes
Make a fork and then submit a pull request for review. I'll likely approve it :)