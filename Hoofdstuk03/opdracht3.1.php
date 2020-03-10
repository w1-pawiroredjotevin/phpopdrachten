<?php
/**
 * User: Tevin Pawiroredjo
 * Date: 5/2/2020
 * Time: 14:58
 * Bestand: index.php
 */
?>
<?php
$evenement = "Elfstedentocht";
$evenementF = "Alvestêdetocht";
$afstand = 200;
$tocht = "schaatstocht";
$grond = "natuurijs";
$vereniging = "Koninklijke Vereniging De Friesche Elf Steden";
$hoofdstad = "Leeuwarden";
$provincie = "Friesland";
$verreden = 15;
$jaar = 1909;
$perJaar = 1;

$verhaal = "De $evenement (Fries: $evenementF) is een $afstand kilometer
lange $tocht over $grond die wordt georganiseerd door
de $vereniging. $hoofdstad,
de hoofdstad van $provincie, is start- en aankomstplaats. De
$evenement is inmiddels $verreden maal verreden en werd voor het
eerst in $jaar gereden en wordt maximaal $perJaar keer per winter
gehouden.";

//?
$verhaal2 = "De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer
lange schaatstocht over natuurijs die wordt georganiseerd door
de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden,
de hoofdstad van Friesland, is start- en aankomstplaats. De
Elfstedentocht is inmiddels 15 maal verreden en werd voor het
eerst in 1909 gereden en wordt maximaal 1 keer per winter
gehouden. ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8" />
    <title>PHP Opdrachten</title>
</head>
<body>
<header><h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1></header>

<main id="wrapper">
    <h2>Uitwerking Opdracht 3.1</h2>
    <p>
        <?php
            echo "<p>" . $verhaal . "</p>";
        ?>
        <?php
            echo "<p>" . "De " . $evenement . "(Fries: " . $evenementF . ") is een " . $afstand . " kilometer
            lange " . $tocht . " over " . $grond . " die wordt georganiseerd door
            de " . $vereniging . ". " . $hoofdstad . ", " .
            " de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De
            " . $evenement . " is inmiddels " . $verreden . " maal verreden en werd voor het
            eerst in " . $jaar . " gereden en wordt maximaal " . $perJaar . " keer per winter
            gehouden." . "</p>";
        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
<?php
include "../includes/footer.php";
?>