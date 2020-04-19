<?php
/**
 * User: Tevin Pawiroredjo
 * Date: 5/2/2020
 * Time: 14:58
 * Bestand: index.php
 */
?>
<?php
include "../includes/header.php";

//10 users
$user = array("Pieter"=>"Post!","Al"=>"K0h0l");
$message="";

$x = $_POST["username"];
$y = $_POST["password"];


//Check if correct
foreach($user as $name => $password) {
    if($name = $x && $password = $y)
    {
        $message = "Welkom";
        // Openingstijdstijden
        // Do: 22:00
        // Vr: All day
        // Za: All day
        // Zo: 12:00

        // Adresgegevens
        // Am Wriezener Bahnhof
        // 10243 Berlin
        // Duitsland

        // Deze gegevens dien je ten alle geheim te houden!

    }
    else
    {
        $message = "Foutieve username en / of wachtwoord";

    }
}

//When empty
if (empty($_POST["username"] && $_POST["password"])){
    echo $message = "Vul uw gegevens in de velden a.u.b.";
}

?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <hr>
    <h1>Bergheen</h1>
    <p>
        Welkom!
    </p>
    <?php
        echo $message;
    ?>
    <p>
        Deze gegevens dien je ten alle tijden geheim te houden!
    </p>
    <br>
    <hr>
    </p>
    <a href="../index.php">Terug</a>
</main>
<?php
include "../includes/footer.php";
?>
