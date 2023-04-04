<?php 
   $jsonData = file_get_contents("planets.json");
   $planets = json_decode($jsonData, true);
?>