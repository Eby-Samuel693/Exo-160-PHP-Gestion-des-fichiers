<?php


/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.

$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing
          elit. Vestibulum eleifend libero libero.";
$file = fopen('monFichier.txt','c+b');
fwrite($file,"contenue1\n");
fclose($file);



/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$tableau1 = ["chaine 1", "chaine 2", "chaine 3","chaine 4","chaine 5",
    "chaine 6","chaine 7","chaine 8","chaine 9","chaine 10"];
fopen($file,'c+b');
file_put_contents($file,$tableau1[2]);
fclose($file);

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
fopen($file,'c+b');
function get_file_ext($file)
{
    $newFile = pathinfo($file, PATHINFO_EXTENSION);
    echo $newFile;
}
fclose($file);


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
file_exists("toto");
if("toto" === false){
    echo "ce fichier existe pas !";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.



