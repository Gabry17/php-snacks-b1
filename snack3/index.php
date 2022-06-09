<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php 
//creare array
//chiave array data dd-mm-yyyy valore array post associati alla data
//stampare data e post

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);


for($i=0; $i < count($keys); $i++){
        $current_keys = $keys[$i];
        echo $current_keys;
        $current_key_posts = $posts[$current_keys];
        for ($e=0; $e < count($current_key_posts); $e++) { 
            $current_post = $current_key_posts[$e];
            echo "<br>" . $current_post['title'];
            echo "<br>" . $current_post['author'];
            echo "<br>" . $current_post['text'];
        }
}


?>
