<!-- dichiaro un array dei match (array di array) -->
<!-- l'array avrà nome prima squadra -->
<!-- nome seconda squadra -->
<!-- punteggio prima squadra -->
<!-- punteggio seconda squadra -->
<?php
$matches = [
    [
        "home" => "Brescia",
        "homePoints" => 87,
        "away" => "Trieste",
        "awayPoints" => 76
    ],
    [
        "home" => "Derthona",
        "homePoints" => 76,
        "away" => "Trento",
        "awayPoints" => 50
    ],
    [
        "home" => "Cremona",
        "homePoints" => 87,
        "away" => "Napoli",
        "awayPoints" => 90
    ],
    [
        "home" => "Brescia",
        "homePoints" => 87,
        "away" => "Trieste",
        "awayPoints" => 76
    ],
    [
        "home" => "Olimpia Milano",
        "homePoints" => 91,
        "away" => "VL Pesaro",
        "awayPoints" => 57
    ],
    [
        "home" => "Dinamo Sassari",
        "homePoints" => 70,
        "away" => "Virtus Bologna",
        "awayPoints" => 73
    ],
    [
        "home" => "Reggiana",
        "homePoints" => 67,
        "away" => "Trieste",
        "awayPoints" => 62
    ]
];
?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giornata 20/30 lega A</title>
</head>

<body>
    <h1>Match 20/30</h1>
    <!-- nell' html faccio un semplice for  che va da 0 alla lunghezza dell' array-->
    <!-- stampo dei paragrafi p che con concatenazione di stringhe  stampo il risultato richiesto ovvero -->
    <!-- es. Olimpia Milano - Cantù | 55-60 -->
    <?php for ($i=0; $i < count($matches); $i++) {
        echo '<p>' . $matches[$i]["home"] . '-' . $matches[$i]["away"] . '|' . $matches[$i]["homePoints"] . '-' . $matches[$i]["awayPoints"] . '</p>';
    }
    ?>

</body>

</html>