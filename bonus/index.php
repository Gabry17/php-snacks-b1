<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$array = [];

while(count($array) < 15){
    $number = rand(1,10);  
    if(!in_array($array, $number)){
        $array[] = $number;
    }
}

var_dump($array);



?>