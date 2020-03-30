<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/


function getTeacherName(){
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
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
    return $teacherName;
}
?>