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
            date_default_timezone_set("Europe/Amsterdam");

            echo date("d-m-y H:i");

            echo $day = date("l");

            if($day == "Monday")
            {
                echo "Het is de eerste dag van de week.";
            }
            elseif ($day == "Tuesday")
            {
                echo "Het is vandaag" . $day;
            }

            //Toevoeging: Les 10-3-2020
            //Datum omzetten naar timestamp
            //Aantal secondes vanaf Januari 1970 (32 bit waarde?)
            //"now","tomorrow", "+1 day", "+1 month", "10 september 2021" etc.
            $date = strtotime("now");
            echo date("d-m-Y", $date);

        ?>
    </p>
    <a href="../index.php">Terug</a>
</main>
</body>
</html>