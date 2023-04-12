<!DOCTYPE html>
<html>
    <head>
        <title>Rente berekenen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
             $errorChoice = $errorval = $option = "";
             $ingVal = $rntPercentage = 0; 
             $output = 0.000;
        ?>
        <h1>Bereken uw rente.</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p class="error"><?php echo $errorval; ?></p>
            <label>Ingelegd bedrag: </label>
            <input name="ingVal" type="number" min="0" value="<?php echo $ingVal ?>"><br><br>
            <label>Rente percentage: </label>
            <input name="rntPercentage" type="number" step="0.0001" value="<?php echo $rntPercentage ?>"><br><br>
            <p class="error"><?php echo $errorChoice; ?></p>
            <input name="option" type="radio" value="option1" <?php if(isset($option) && $option == "option1") echo 'checked="checked"'; ?> ><label>Eindbedrag na 10 jaar</label><br><br>
            <input name="option" type="radio" value="option2" <?php if(isset($option) && $option == "option2") echo 'checked="checked"'; ?>><label>Eindbedrag verdubbeld</label><br><br>
            <button type="submit" name="submit">Bereken</button><br><br>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //check for input in the radio buttons & number input fields.
                if (empty($_POST["option"])) {
                    $errorChoice = "Je moet een keuze maken.<br>";
                }else {
                    $option = $_POST["option"];
                }
                if (empty($_POST["ingVal"]) || empty($_POST["rntPercentage"])) {
                        $errorVal = "Vul een waarde in.";
                } else {
                    $ingVal = $_POST["ingVal"];
                    $rntPercentage = $_POST["rntPercentage"];
                    //bereken hoeveel rente
                    if ($option == "option1") {
                       echo "<table>";
                        for ($i=1; $i<=10;$i++) {
                            $output += $ingVal * (1+$rntPercentage/100);
                            echo "<tr>"."<td> jaar: ".$i." </td>"."<td>€".$output."</td>"."</tr>";
                        }
                        echo "</table>";
                    }else if ($option == "option2") {
                        echo "<table>";
                        for ($i=1;$i<=2;$i++) {
                            $output += $ingVal * (1+$rntPercentage/100);
                            echo "<tr>"."<td> jaar: ".$i." </td>"."<td>€".$output."</td>"."</tr>";
                        }
                        echo "</table>";
                    }
                }
            }
        ?>
    </body>
</html>
