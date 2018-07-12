<?php
/**
 * Created by PhpStorm.
 * User: Damien
 */


//print_r($_POST);

//echo "<img src='img/Apen/".$_POST['Monkeys'].".jpg'>";

//print_r($_POST['Monkeys']);

foreach($_POST['Monkeys'] as $monkey) {
    echo "<img src='img/Apen/".$monkey.".jpg'>";
}