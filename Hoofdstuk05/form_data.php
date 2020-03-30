<?php
//Ophalen formulier gegevens
//print_r($_GET); //haalt alle waardes van GET op, wordt meestal gebruikt bij het debuggen

//echo $_GET["firstname"];
//echo $_GET["lastname"];

echo $_GET["firstname"] . " " . $_GET["lastname"];
$subject = $_GET["subject"]; //Waarde van "subject" ophalen en opslaan in een variabele

if($subject == "js")
{
    echo "Dit is uitleg over het vak Javascript";
}
elseif($subject == "php")
{
    echo "Dit is uitleg over het vak PHP";
}

$firstname = $_POST["firstname"];
if (!empty($_POST["firstname"])){
    echo "firstname: " . $firstname;
}

?>