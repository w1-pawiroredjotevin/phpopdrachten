<?php
//Ophalen formulier gegevens
session_start();

echo $_SESSION["firstname"] = $_POST["firstname"];
echo $_SESSION["lastname"] = $_POST["lastname"];
?>