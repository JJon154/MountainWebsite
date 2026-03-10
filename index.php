<?php
include "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountain Website</title>
</head>
        <link rel="Stylesheet" href="index.css" >
<nav>

</nav>
<body>
    <h1> MOUNTAINS </h1>
    <div class='grid'>
 <?php
    $sql = "SELECT * FROM mountains ORDER BY id";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo"<img src='" . $row["image"] . "' alt='mountain image'>";
   echo "<h3>" . $row["Name"] . "</h3>";
   echo "<strong>Height: </strong>" . $row["Height_ft"] . " FT. <br>";
   echo "<strong>Location: </strong>" . $row["Location"] . "<br>";
   echo "<strong>Difficulty: </strong>" . $row["Difficulty"] . "<br>";
   echo "<strong>Length: </strong>" . $row["Length_km"] . " Km <br>";
   echo "<h5> Description: </h5>" . $row["Description"] . "<br><br>";
   echo "</div>";
 }

} else {
 echo "<p> No results <p>";
}
$conn->close();
?>
</div>
</body>
</html>