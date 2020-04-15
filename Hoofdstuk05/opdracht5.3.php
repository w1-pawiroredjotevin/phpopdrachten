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
?>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <p>
            <h2>Corona enquete:</h2>
            <?php

            ?>
            <hr>
            <form action="form_data53.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="naam">Wat is je naam: </label>
                    </td>
                    <td>
                        <input type="text" name="naam" id="naam">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="leeftijd">Wat is je leeftijd: </label>
                    </td>
                    <td>
                        <input type="text" name="leeftijd" id="leeftijd">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gemeente">Gemeente: </label>
                    </td>
                    <td>
                        <select name="gemeente">
                            <option value="denbosch">Den Bosch</option>
                            <option value="tilburg">Tilburg</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="inwoners">Aantal inwoners gemeente: </label>
                    </td>
                    <td>
                        <input type="text" name="inwoners" id="inwoners">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="aantalinfected">Ken je mensen die besmet zijn in je woonplaats? </label>
                    </td>
                    <td>
                        <input type="radio" value="ja">Ja</input>
                        <input type="radio" value="nee">Nee</input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="aantal">Aantal mensen besmet in je gemeente?*</label>
                    </td>
                    <td>
                        <input type="text" name="aantal" id="aantal">
                    </td>
                </tr>
            </table>
            <input type="submit">
            <p>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/">site RIVM</a></p>
            </form>
        </p>
        <a href="../index.php">Terug</a>
    </main>
<?php
include "../includes/footer.php";
?>