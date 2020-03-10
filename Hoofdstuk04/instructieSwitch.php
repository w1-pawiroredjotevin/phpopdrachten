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
            echo $day = date("l");

            switch($day)
            {
                case "Monday":
                    echo "Het is vandaag Maandag";
                    break;
                case "Tuesday":
                    echo "Vandaag is het Dinsdag";
                    break;
                default:
                    echo "Het is vandaag geen dag";
                    break;
            }
        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>