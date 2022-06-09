<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4 di bonus</title>
</head>
<body>
    <h1> Array casuale di 15 numeri che non si ripetono </h1>
    <hr>
    <ul style ="list-style: none; width: 800px; display: flex; flex-wrap: wrap;">
        <?php
            $numbers = [];
            while( count($numbers) < 15 ) {
                $num = rand (0 , 50);
                if (! (in_array($num , $numbers))) {
                    $numbers[] = $num;
                }
            }
            foreach ($numbers as $number) {
        ?>
        <li style = "text-align: center; width:160px; height: 160px; line-height: 160px; box-sizing: border-box; border: 1px solid black;">
                <?php echo $number; ?>
        </li>
        <?php }?>
        
</body>
</html>