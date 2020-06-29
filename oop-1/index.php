<?php

require 'animal.php';
require 'ape.php';
require 'frog.php';

$sheep = new Animal("shaun");

echo "nama hewan: ".$sheep->name."<br>"; // "shaun"
echo "jumlah kaki: ".$sheep->legs."<br>"; // 2
echo "hewan berdarah dingin: ".$sheep->cold_blooded."<br><br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
$sungokong = new Ape('kera sakti');
echo "nama hewan: ".$sungokong->name."<br>"; // "shaun"
echo "jumlah kaki: ".$sungokong->legs."<br>"; // 2
echo "hewan berdarah dingin: ".$sungokong->cold_blooded."<br>"; // false
echo "suara teriakan: ".$sungokong->yell()."<br><br>"; // "Auooo"

$kodok = new Frog("buduk");
$kodok -> set_legs(4);
echo "nama hewan: ".$kodok->name."<br>"; // "shaun"
echo "jumlah kaki: ".$kodok->legs."<br>"; // 2
echo "hewan berdarah dingin: ".$kodok->cold_blooded."<br>"; // false
echo $kodok->jump()."suara lompatan: " ; // "hop hop"
?>