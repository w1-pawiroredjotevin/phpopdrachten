<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
include "lesopdracht_functions53.php";
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
                //Toon hier de ingevulde naam
                echo $_POST["firstname"];
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td>
            <?php
                //Toon hier tussenvoegsel als deze bestaat
                $tussenvoegsel = $_POST["tussenvoegsel"];
                if(isset($POST["tussenvoegsel"]))
                {
                    echo $tussenvoegsel;
                }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>
            <?php
                //Toon hier de ingevulde achternaam
                echo $_POST["lastname"];
            ?>
        </td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
                //Laad hier de functie die de naam van de juiste docent toont
                echo getTeacherName();
            ?>
        </td>
    </tr>
</table>