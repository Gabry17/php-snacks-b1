<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
//creare array multidimensionale
//per ogni array:
//squadra casa/ avversaria/ punteggio squadre
//visualizzare a schermo
$basket = [
    [
        "team1" => "New York Knicks",
        "team2" => "Brooklyn Nets",
        "point1" => "40",
        "point2" => "70"
    ],
    [
        "team1" => "Madison Square Garden",
        "team2" => "Barclays Center",
        "point1" => "53",
        "point2" => "66"
    ],
    [
        "team1" => "Lakers",
        "team2" => "Chicago Bulls",
        "point1" => "78",
        "point2" => "67"
    ]
];

// for($i = 0; $i < count($basket); $i++){
//     $current_basket = $basket[$i];
//     //var_dump($current_basket);
//     echo $current_basket['team1'];
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK PHP</title>
</head>
<body>
    <div>
        <h2>Snack 1</h2>
        <?php for($i = 0; $i < count($basket); $i++){
                $current_basket = $basket[$i];?>
                <span> <?php echo $current_basket['team1'] . " - " . $current_basket['team2'] . " | " . $current_basket["point1"] . " - " . $current_basket["point2"] . "<br>" ?> </span>
        <?php } ?>        
    </div>
</body>
</html>
