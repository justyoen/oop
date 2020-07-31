<?php

require 'animal.php';
require 'Frog.php';
require 'Ape.php';


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo "<br>";

echo "<br>";
$sungokong = new Ape("kera sakti", 4);
echo $sungokong->name; // "kera sakti"
echo "<br>";
echo $sungokong->legs; // 4
echo "<br>";
echo $sungokong->cold_blooded; // false
echo "<br>";
$sungokong->yell(); // "Auooo"

echo "<br>";
echo "<br>";
$kodok = new Frog("buduk", 4);
echo $kodok->name; // "buduk"
echo "<br>";
echo $kodok->legs; // 4
echo "<br>";
echo $kodok->cold_blooded; // false
echo "<br>";
$kodok->jump(); // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>