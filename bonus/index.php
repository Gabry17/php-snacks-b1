<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$array = [];

while(count($array) < 15){
    $number = rand(1,100);  
    if(!in_array($number, $array)){
        $array[] = $number;
    }
}

var_dump($array);



?>