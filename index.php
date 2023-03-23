<!DOCTYPE html>
<html>
    <head>
        <title>Rente berekenen</title>
        <link>
    </head>
    <body>
        <?php
        $ingVal = $rntPercentage = 0;

        if (isset($_POST["submit"])) {
            $ingVal = $_POST["ingVal"];
            $rntPercentage = $_POST["rntPercentage"];
        
            //check for input in the radio buttons
            if (!isset($_POST["radio1"]) && !isset($_POST["radio2"])) {
                echo "Je moet een keuze maken.";
            }
            //check for input in de nummer invoer velden.
            if (!isset($_POST["ingVal"]) || !isset($_POST["rntPercentage"])) {
                echo "Je moet een waarde invullen.";
            }
        }
        ?>
        <h1>Bereken uw rente.</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Ingelegd bedrag: </label>
            <input name="ingVal" type="number" min="0" ><br><br>
            <label>Rente percentage: </label>
            <input name="rntPercentage" type="number" min="0"><br><br>
            <input name="radio1" type="radio"><label>Eindbedrag na 10 jaar</label><br><br>
            <input name="radio2" type="radio"><label>Eindbedrag verdubbeld</label><br><br>
            <button name="submit">Bereken</button><br><br>
            
        </form>
       
    </body>
</html>
