<?php
/**
 * Created by PhpStorm.
 * User: Damien
 */


if ($_POST['FirstName'] == "") {
    echo "You need to fill in your name.";
    echo "<a href=\"Formulier.html\"> Back to the form </a>";
};
if ($_POST['address'] == "") {
    echo "You need to fill in your address.";
    echo "<a href=\"Formulier.html\"> Back to the form </a>";
};
if ($_POST['email'] == ""){
    echo "You need to fill in your email.";
    echo "<a href=\"Formulier.html\"> Back to the form </a>";
};
if ($_POST['password'] == ""){
    echo "You need to fill in your password.";
    echo "<a href=\"Formulier.html\"> Back to the form </a>";
};
