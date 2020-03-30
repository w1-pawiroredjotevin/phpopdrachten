<?php
//Vorige lessen - Wat hebben we besproken?
//strtotime
/*
echo strtotime("+1 days");
echo date("d-m-Y", strtotime("+1 days"));

for($counter = 0; $counter < 10; $counter++)
{
    echo $counter;
}
*/

//Counter add 1, same code:
//$counter++;
//$counter = $counter + 1;

//Instructie formuliergegevens verwerken
?>
<form action="form_data.php" method="get">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname">

    <label for="middlename">Middlename</label>
    <input type="text" name="middlename" id="middlename">

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname">

    <select name="subject">
        <option value="php">PHP</option>
        <option value="js">Javascript</option>
    </select>

    <input type="submit">
</form>
