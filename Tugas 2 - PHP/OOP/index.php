<?php

    require('animal.php');
    require('ape.php');
    require('frog.php');


    $sheep = new Animal("Shaun");

    echo "Name : $sheep->name <br>";
    echo "Legs : $sheep->legs <br>";
    echo "Cold blooded : $sheep->cold_blooded <br><br>";


    $kodok = new Frog("Buduk");

    echo "Name : $kodok->name <br>";
    echo "Legs : $kodok->legs <br>";
    echo "Cold blooded : $kodok->cold_blooded <br>";
    $kodok->jump();
    echo "<br><br>";

    $sungokong = new Ape("Kera Sakti");

    echo "Name : $sungokong->name <br>";
    echo "Legs : $sungokong->legs <br>";
    echo "Cold blooded : $sungokong->cold_blooded <br>";
    $sungokong->yell(); 
    echo "<br><br>";

?>