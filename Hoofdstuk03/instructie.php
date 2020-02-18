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
            $profession = "ICT"; //String
            $year = 2019;        //Integer
            $percentage = 11.1;  //Float
            $subjects = ["PHP","SQL","ASP"]; //Array
            $skills = false;

            if($skills==true || $year == 2019)
            {
                echo "Skill is true";
            }
            else
            {
                echo "Skill is false";
            };
        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>