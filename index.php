<!DOCTYPE html>
<html>
    <head>
        <title>Rente berekenen</title>
        <link>
    </head>
    <body>
        <?php

        if (isset($_POST["submit"])) {
            
            //check for input in the radio buttons
            if (empty($_POST["radio1"]) && empty($_POST["radio2"])) {
                echo "Je moet een keuze maken.<br><br>";
            } 
            if (empty($_POST["ingVal"]) || empty($_POST["rntPercentage"])) {
                echo "Vul een waarde in.";
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
