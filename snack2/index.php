<!-- ## Snack 2
Passare come parametri GET name, 
mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
//inserire parametri get in una variabile
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

//verificare tramite condizione se puo accedere
//a seconda della condizione stampare Accesso riuscito o negato
if( strlen($name) > 3 && strpos( $mail , '@') && strpos( $mail , '.') && is_numeric($age) ){
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}

 
?>