<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 Basket</title>
</head>
<body style="text-align: center;">
    <h1> Giornata <?php echo rand(1,24) ?> del campionato </h1>
    <hr>
    <ul style ="list-style: none; text-align: center; margin: auto 0;">
        <?php
            $teams = ["AC Picchia", "The Drunkest", "Los Angeles Crackers", "Los Random", "Slam Drunk", "Gli Sbronzi di Riace", "Chicago Inside", "Sailor Rum", "Herta Vernello", "Le scarpe della LIDL", "Baston Celtics", "Miami Hut", "Pro Secco", "Quattordici"];
            $matchs = [];
            // Finchè ci sono ancora squadre da matchare
            while( count($teams) != 0 ) {
                // Prendo numero random per la squadra di casa
                $randHome = rand(0, count($teams) - 1);
                // Prendo la squadra di casa
                $home = $teams[$randHome];
                // tolglo la squadra di casa dal array
                array_splice($teams,$randHome,1);
                // Prendo numero random per la squadra in trasferta 
                $randAway = rand(0, count($teams) - 1);
                // ---
                $away = $teams[$randAway];
                // ---
                array_splice($teams,$randAway,1);
                // randomizzo i punti, la squadra di casa può fare più punti
                $randHomePoint = rand(40, 107);
                $randAwayPoint = rand(40, 104);
                // do i valori al array partita
                $match = [
                    "home" => $home,
                    "away" => $away,
                    "homePoints" => $randHomePoint,
                    "awayPoints" => $randAwayPoint,
                ];
                // aggiungo il valore della partita nel array di partite
                $matchs[] = $match;
            }
            foreach($matchs as $current) {
            ?>
                <li style="display: flex; width: 30%; height: 40px; margin: 30px auto;"> 
                    <section style = "text-align: center; width: 35%;">
                        <?php echo $current["home"]?>
                    </section>
                    <section style = "text-align: center; width: 5%;">
                        -
                    </section>
                    <section style = "text-align: center; width: 35%;">
                        <?php echo $current["away"]?>
                    </section> 
                    <section style = "text-align: center; width: 5%;">
                        |
                    </section>
                    <section style = "text-align: center; width: 20%;">
                        <?php echo $current["homePoints"] . " - " . $current["awayPoints"]?>
                    </section> 
                </li>
            <?php 
            } ?>
        </ul>

</body>
</html>