<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thierryzard</title>
        <style>
            body {
                font-family: Arial;
            }
            input {
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Calculator a niffo</h1>

        <form action="calculator.php" method="post" target="">
            Eerste getal: <input type="text" name="getal1"><br>
            Tweede getal: <input type="text" name="getal2"><br>
            <input type="submit" value="Plus" name="operator">
            <input type="submit" value="Minus" name="operator">
            <input type="submit" value="Keer" name="operator">
            <input type="submit" value="Delen" name="operator">
            <input type="submit" value="Modulus" name="operator">
        </form>
        <?php
            //counter var
            $counter = 0;

            //input
            $getal1 = $_POST["getal1"];
            $getal2 = $_POST["getal2"];

            $operator = $_POST["operator"];

            //berekening
            switch ($operator) {
                case "Plus":
                    $counter += ($getal1 + $getal2);
                    break;
                case "Minus":
                    $counter += ($getal1 - $getal2);
                    break;
                case "Keer":
                    $counter += ($getal1 * $getal2);
                    break;
                case "Delen":
                    $counter += ($getal1 / $getal2);
                    break;
                case "":
                    $counter += ($getal1 % $getal2);
                    break;
            } 
        ?>
            
        <br>
            
        <?php
            //antwoord
            echo $counter;
        ?>

    </body>

</html>