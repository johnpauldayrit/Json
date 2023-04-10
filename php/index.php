<?php 
   header("Access-Control-Allow-Origin: *");
   $planets = [
      [
      "id" => 1,
      "name" => "Mercury",
      "type" => "Terrestrial",
      "mass" => "0.055 Earths",
      "distance_from_sun" => "57.9 million km",
      "atmosphere" => "Very thin atmosphere"
      ],
      [
      "id" => 2,
      "name" => "Venus",
      "type" => "Terrestrial",
      "mass" => "0.815 Earths",
      "distance_from_sun" => "108.2 million km",
      "atmosphere" => "Very thick atmosphere (mostly CO2)"
      ],
      [
      "id" => 3,
      "name" => "Earth",
      "type" => "Terrestrial",
      "mass" => "1.000 Earths",
      "distance_from_sun" => "149.6 million km",
      "atmosphere" => "Nitrogen, oxygen, argon, and other trace gases"
      ],
      [
      "id" => 4,
      "name" => "Mars",
      "type" => "Terrestrial",
      "mass" => "0.107 Earths",
      "distance_from_sun" => "227.9 million km",
      "atmosphere" => "Very thin atmosphere (mostly CO2)"
      ],
      [
      "id" => 5,
      "name" => "Jupiter",
      "type" => "Gas giant",
      "mass" => "318 Earths",
      "distance_from_sun" => "778.3 million km",
      "atmosphere" => "Hydrogen, helium, and other gases"
      ]
   ];
   $planets = json_encode($planets);
   echo $planets;
?>