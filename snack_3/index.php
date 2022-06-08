<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body style="text-align: center;">
    <h1>Snack 3 stampa post in base alla data</h1>
    <hr>
    <?php
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Le scimmie pelose',
                    'author' => 'Michele Papagni',
                    'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatibus ipsa? Cupiditate, quaerat iure! Quas, repudiandae! Ut quibusdam magni amet nam consectetur voluptates, pariatur quis laboriosam possimus eaque ullam adipisci!'
                ],
                [
                    'title' => 'Le lontre carine',
                    'author' => 'Carlo Magno',
                    'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatibus ipsa? Cupiditate, quaerat iure! Quas, repudiandae! Ut quibusdam magni amet nam consectetur voluptates, pariatur quis laboriosam possimus eaque ullam adipisci!'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'I gatti petalosi',
                    'author' => 'Paolino Paperini',
                    'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatibus ipsa? Cupiditate, quaerat iure! Quas, repudiandae! Ut quibusdam magni amet nam consectetur voluptates, pariatur quis laboriosam possimus eaque ullam adipisci!'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'I delfini curiosi',
                    'author' => 'Vittorio Sgarbi',
                    'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatibus ipsa? Cupiditate, quaerat iure! Quas, repudiandae! Ut quibusdam magni amet nam consectetur voluptates, pariatur quis laboriosam possimus eaque ullam adipisci!'
                ],
                [
                    'title' => 'Atalanta ritirati',
                    'author' => 'Carlo Mazzone',
                    'text' => 'Terenta settembre duemila uno un giovane allenatore di calcio si trovò a disputare il derby molto sentito tra Brescia ed atalanta, il brescia passa in vantaggio con un gol del suo begnamino il divin codino. neanche si finisce il primo tempo e la dea fa tre gol. Partono i cori verso il mister del Brescia da parte degli atalantini per tutto il secondo tempo, al settantacinquesimo Baggio fa il secondo gol "Se famo il terzo vengo sotto la curva" il resto è storia'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatibus ipsa? Cupiditate, quaerat iure! Quas, repudiandae! Ut quibusdam magni amet nam consectetur voluptates, pariatur quis laboriosam possimus eaque ullam adipisci!'
                ]
            ],
        ];
        foreach($posts as $key => $list) {
            echo "<h2>". $key . "</h2>";
            foreach($list as $post) {
                // var_dump($post);
                echo "<h3>" . $post['title'] ."</h3>" . "<strong>" .$post['author']. "</strong> <br>" . "<em>" . $post['text'] . "</em>";
            }

        }
    ?>
</body>
</html>