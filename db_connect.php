
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mountains_db";
//created
$conn = new mysqli($servername, $username, $password, $dbname);
//making sure it works 
if ($conn-> connect_error){
    die("connection failed: ".$conn-> connect_error);

}
?>