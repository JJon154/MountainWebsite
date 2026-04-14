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
<link rel="stylesheet" href="mountains.css"> 
</head>
<body>




<nav class="navbar">
<div class="nav-left">
<a href="index.php">Home</a>
</div>
<div class="nav-center">
<a href="mountains.php">Mountains</a>
<a href="map.php">Map</a>
</div>
</nav>
<h1>MOUNTAINS</h1>
<div class="grid">


    



<?php
       // get all mountains records
       $sql = "SELECT * FROM mountains ORDER BY id";
       $result = $conn->query($sql);


       // check if the table has any data
       if ($result->num_rows > 0) {

         // show one card for each individual mountain
           while ($row = $result->fetch_assoc()) {
               echo "<div class='card' onclick=\"showDescription(
                   '" . addslashes($row["Name"]) . "',
                   '" . addslashes($row["image"]) . "',
                   '" . addslashes($row["Height_ft"]) . "',
                   '" . addslashes($row["Location"]) . "',
                   '" . addslashes($row["Difficulty"]) . "',
                   '" . addslashes($row["Length_km"]) . "',
                   '" . addslashes($row["Description"]) . "'





               )\">";
               // card for the image and information
               echo "<img src='" . $row["image"] . "' alt='Mountain image'>";
               echo "<h3>" . $row["Name"] . "</h3>";
               echo "<strong>Height:</strong> " . $row["Height_ft"] . " FT.<br>";
               echo "<strong>Location:</strong> " . $row["Location"] . "<br>";
               echo "<strong>Difficulty:</strong> " . $row["Difficulty"] . "<br>";
               echo "<strong>Length:</strong> " . $row["Length_km"] . " Km<br>";
               echo "</div>";
           }
       } else {
           echo "<p>No mountains found.</p>";
       }
       $conn->close(); // close connection
       ?>



</div>
<div id="descriptionBox" class="popup">
<div class="popup-content">
<span class="close-btn" onclick="closeDescription()">&times;</span>
<img id="popupImage" style="width:30%; border-radius:10px; margin-bottom:10px;" alt="Mountain image">
<h2 id="popupName"></h2>
<p><strong>Height:</strong> <span id="popupHeight"></span></p>
<p><strong>Location:</strong> <span id="popupLocation"></span></p>
<p><strong>Difficulty:</strong> <span id="popupDifficulty"></span></p>
<p><strong>Length:</strong> <span id="popupLength"></span></p>
<p id="popupText"></p>
</div>
</div>


<script>
       // open popup and get the mountain details filled in
       function showDescription(name, image, height, location, difficulty, length, description) {
           document.getElementById("popupName").innerText = name;
           document.getElementById("popupImage").src = image;
           document.getElementById("popupHeight").innerText = height + " FT";
           document.getElementById("popupLocation").innerText = location;
           document.getElementById("popupDifficulty").innerText = difficulty;
           document.getElementById("popupLength").innerText = length + " Km";
           document.getElementById("popupText").innerText = description;
           document.getElementById("descriptionBox").style.display = "flex";
       }
       // close popup button x
       function closeDescription() {
           document.getElementById("descriptionBox").style.display = "none";
       }
</script>
</body>
</html>