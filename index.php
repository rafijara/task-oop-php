<?php

require_once 'frog.php';
require_once 'ape.php';
require_once 'animal.php';

$sheep = new Animal("Shaun");
$kodok = new kodok("buduk"); // Menggunakan kelas Frog
$sungokong = new sungokong("kera sakti"); // Menggunakan kelas Ape

echo "Name: " . $sheep->name . "<br>"; 
echo "legs: " . $sheep->legs . "<br>"; 
echo "cold blooded: " . ($sheep->cold_blooded) . "<br>";
echo "<br>";

echo "Name: " . $kodok->name . "<br>"; 
echo "legs: " . $kodok->legs . "<br>"; 
echo "cold blooded: " . ($kodok->cold_blooded) . "<br>"; 
echo "Jump: " . $kodok->jump() . "<br>"; // Memanggil metode jump() dari objek Frog
echo "<br>";

echo "Name: " . $sungokong->name . "<br>"; 
echo "legs: " . $sungokong->legs . "<br>"; 
echo "cold blooded: " . ($sungokong->cold_blooded) . "<br>"; 
echo "Yell: " . $sungokong->yell() . "<br>"; // Memanggil metode yell() dari objek Ape
echo "<br>";

?>