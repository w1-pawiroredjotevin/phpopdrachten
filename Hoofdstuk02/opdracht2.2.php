<?php
/**
 * User: Tevin Pawiroredjo
 * Date: 5/2/2020
 * Time: 14:58
 * Bestand: index.php
 */
?>
<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
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
    <h2>Uitwerking Opdracht 2.2</h2>
    <?php
        echo "<p>" . $text1 . $text10 . " " . $text4 . " " . $text5 . " " . $text3 . $text10 . $text12 .
            $text7 . $text10 . " " . $text8 . " " . $text15 . $text9 . $text12 .
            $text6 . " " . $text5 . " " . $text3 . " " . $text13 . $text10 . "</p>";
    ?>
    <?php
        echo "<p>" . $text1 . $text11 . $text12 .
            $text8 . " " . $text15 . " " . "dat " . $text5 . " " . "zo'n makkelijke taal is" . $text10 . $text12 .
            $text7 . $text10 . " " . $text14 . $text9 . "</p>";
    ?>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>
