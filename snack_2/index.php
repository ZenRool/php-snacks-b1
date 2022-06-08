<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body style="text-align: center;">
    <h1>Email Name and age check</h1>
    <hr>
    <?php
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        $can = true;
        if(strlen($name) < 3) {
            echo "<p style='color: red;'> Il nome " . $name . " deve essere almeno di 3 cifre </p>";
            $can = false;
        }
        else {
            echo "<p style = 'color: green';> Il nome " . $name . " va bene</p>";
        }
        if(!(strpos($mail,'@') && strpos($mail,'.'))) {
            echo "<p style='color: red;'> La mail " . $mail . " deve contenere sia la @ che un . </p>";
            $can = false;
        }
        else {
            echo "<p style='color: green;'> La mail " . $mail . " va bene </p>";
        }
        if(!is_numeric($age)) {
            echo "<p style='color: red;'> L'eta " . $age . " deve essere un numero</p>";
            $can = false;
        }
        else {
            echo "<p style='color: green;'> L'eta " . $age . " va bene</p>";
        }
        echo "<h2> Accesso " . ($can ? "riuscito" : "negato") . "</h2>";
    ?>
    
</body>
</html>