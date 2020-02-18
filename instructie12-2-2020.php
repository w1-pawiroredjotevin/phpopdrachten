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
    <link type="text/css" rel="stylesheet" href="css/style.css">
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
            //String
            $name = "Remco";

            //Boolean
            $teacher = true;

            //Integer
            $age = 32;

            //Float (decimal always with dot .)
            $length = 1.91;

            //Toon tekst
            echo "<p>" . $name . " is " . $age . " jaar oud.</p>";

        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>