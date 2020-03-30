<?php
//Opdracht 4.2 Script

//SQL
//ASP
//PHP
//Engels
//Nederlands
//Loopbaan en Burgerschap
//Digitale Vaardigheden
//Computertekenen

$courseName = "PHP";

switch($courseName)
    {
    case "SQL":
        $teacherName = "Van de Wetering";
        break;
    case "ASP":
        $teacherName = "Van Meer";
        break;
    case "PHP":
        $teacherName = "Evers";
        break;
    case "Engels":
        $teacherName = "Mitrovisch";
        break;
    case "Nederlands":
        $teacherName = "Bos";
        break;
    case "Loopbaan en Burgerschap":
        $teacherName = "De Ruiter";
        break;
    case "Digitale Vaardigheden":
        $teacherName = "Pielage";
        break;
    case "Computertekenen":
        $teacherName = "Van den Berg";
        break;
    }
    echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
?>