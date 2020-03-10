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

$courseName = "SQL";

switch($courseName)
    {
    case "SQL":
        $teacherName = "Van de Wetering";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "ASP":
        $teacherName = "Van Meer";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "PHP":
        $teacherName = "Evers";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "Engels":
        $teacherName = "Mitrovisch";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "Nederlands":
        $teacherName = "Bos";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "Loopbaan en Burgerschap":
        $teacherName = "De Ruiter";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "Digitale Vaardigheden":
        $teacherName = "Pielage";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    case "Computertekenen":
        $teacherName = "Van den Berg";
        echo "Voor het vak " . "<span>" . $courseName . "</span>" . " heb je " . "<span>" . $teacherName . "</span>" . " als docent.";
        break;
    }
?>