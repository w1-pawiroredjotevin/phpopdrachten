<?php
/**
 * User: Tevin Pawiroredjo
 * Date: 20-5-2020
 * Time: 14:58
 * Bestand: Opdracht7.2.php
 */

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt" . "<br>";


// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
// echo "<pre>";
// var_dump($aJokes);
// echo "</pre>";


// Onder elkaar (TAAK 3 Schrijven PHP script)
foreach($aJokes as $grap) {
    echo "<br>".$grap['joketext'] . "<br>" .$grap['jokeclou'] . "<br>";
}

// TAAK 4 Grappen in een <table> plaatsen
echo "<br>";
echo "<table> 
        <tr>
            <td class='kop'>ID</td>
            <td class='kop'>Joketext</td>
            <td class='kop'>Jokeclou</td>
            <td class='kop'>Jokedate</td>
        </tr>";

foreach($aJokes as $grap) {
    echo "<tr>" . "<td>" . $grap['id'] . "</td>". "<td>" . $grap['joketext'] . "</td>" . "<td>" .$grap['jokeclou'] . "</td>" . "<td>" .$grap['jokedate'] . "</td>";
}
echo "</table>";

?>
<link type="text/css" rel="stylesheet" href="H7style.css">