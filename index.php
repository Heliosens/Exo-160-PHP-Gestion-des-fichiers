<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$lorem = "Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.";
file_put_contents('monLorem.txt', $lorem);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$arrString = [
    'perspiciatis ',
    'voluptatem ',
    'accusantium ',
    'doloremque ',
    'laudantium',
    'totam ',
    'aperiam ',
    'eaque ',
    'inventore ',
    'architecto ',
];

foreach ($arrString as $string){
    file_put_contents('monLorem.txt', $string, FILE_APPEND);
}


/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$file = 'monLorem.txt';
$info = pathinfo($file);

echo "Extension : " . $info['extension'] . "<br>";


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
$file = 'toto.txt';
if(!file_exists($file)){
    echo "le fichier n'existe pas";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.

$file = fopen('monLorem.txt', 'r+');
while ($char = fgetc($file)){
    if($char === "a"){
        fseek($file, ftell($file)-1);
        fwrite($file, "@", 1);
    }
}

fclose($file);
