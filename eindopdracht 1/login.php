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
        <hr>
        <h1>Bergheen</h1>
        <p>Login om onze adresgegevens + openingstijden te zien</p>
        <p>
            <?php
            //Melding $message

            ?>
        </p>
        <p>
        <form action="script.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">username </label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">password </label>
                </td>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
        </table>
        <input type="submit" value="Login">
        </form>
        <br>
        <hr>
        </p>
        <a href="../index.php">Terug</a>
    </main>
<?php
include "../includes/footer.php";
?>