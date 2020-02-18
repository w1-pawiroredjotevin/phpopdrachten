<?php
/**
 * User: Tevin Pawiroredjo
 * Date: 5/2/2020
 * Time: 14:58
 * Bestand: index.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8" />
    <title>PHP Opdrachten</title>
</head>
<body>
<header>
    <h1>
        <?php echo "Uitwerking van PHP-opdrachten"; ?>
    </h1>
</header>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>
        <?php
            //Taak 1 Deel 1: Doorrijden of stoppen bij stoplicht?
            $trafficLightColor = "groen";
            $ambulanceComing = true;

            if($trafficLightColor == "groen" && $ambulanceComing == false)
            {
                $driveOn = true;
                echo "<p class='go'> U mag doorijden</p>";
            }
            else if($trafficLightColor == "rood" || $trafficLightColor == "oranje" || $ambulanceComing == true)
            {
                $driveOn = false;
                echo "<p class='stop'> U moet stoppen</p>";
            };
        ?>
        <?php
            //Taak 3 Deel 2: Vanaf welke leeftijd mag je drinken in verschillende landen?
            $countryName = "België";
            $currentAge = 17;

            //België
            if($countryName == "België" && $currentAge < 16)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag geen alcohol drinken";
            }
            else if($countryName == "België" && $currentAge >= 16 && $currentAge < 18)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alleen zwakke alcohol drinken";
            }
            else if($countryName == "België" && $currentAge >= 18)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alle soorten alcohol drinken";
            }
            //Zweden
            else if($countryName == "Zweden" && $currentAge < 18)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag geen alcohol drinken";
            }
            else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alleen zwakke alcohol drinken";
            }
            else if($countryName == "Zweden" && $currentAge >= 20)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alle soorten alcohol drinken";
            }
            //Cyprus
            else if($countryName == "Cyprus" && $currentAge < 17)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag geen alcohol drinken";
            }
            else if($countryName == "Cyprus" && $currentAge >= 17)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alle soorten alcohol drinken";
            }
            //Bulgarije en Nederland
            else if($countryName == "Bulgarije" || $countryName == "Nederland" && $currentAge < 18)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag geen alcohol drinken";
            }
            else if($countryName == "Bulgarije" || $countryName == "Nederland" && $currentAge >= 18)
            {
                echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar oud.";
                echo " Je mag alle soorten alcohol drinken";
            };

        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>
