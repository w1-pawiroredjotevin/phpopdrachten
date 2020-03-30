<?php
    //Opdracht 3.3
    include "variabelen.php";


    //Opdracht 4.1
    //Taak 2
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    //Taak 3
    if ($uur > 0 && $uur < 5)
    {
        echo "Goedennacht ";
    }
    else if ($uur >= 5 && $uur < 12)
    {
        echo "Goedenochtend ";
    }
    else if ($uur >= 12 && $uur < 17)
    {
        echo "Goedenmiddag ";
    }
    else if ($uur >= 17 && $uur < 24)
    {
        echo "Goedenavond ";
    }

    echo "bezoeker, &copy";
    echo $name . "&nbsp" . $year;
?>
</body>
</html>