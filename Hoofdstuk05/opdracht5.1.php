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
            <form action="form_data.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="bedrijfsnaam">Bedrijfsnaam </label>
                            <br>
                            <input type="text" name="bedrijfsnaam" id="bedrijfsnaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="voornaam">Voornaam </label>
                            <br>
                            <input type="text" name="voornaam" id="voornaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="achternaam">Achternaam </label>
                            <br>
                            <input type="text" name="achternaam" id="achternaam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="telefoon">Telefoon </label>
                            <br>
                            <input type="text" name="telefoon" id="telefoon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">E-mail </label>
                            <br>
                            <input type="text" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="bericht">Bericht </label>
                            <br>
                            <input type="text" name="bericht" id="bericht">
                        </td>
                    </tr>
                </table>
                <input type="submit">

            <!-- Geen robot -->

        </form>
        </p>
        <a href="../index.php">Terug</a>
    </main>
<?php
include "../includes/footer.php";
?>