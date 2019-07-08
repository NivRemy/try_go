<?php
echo 'Hello World';

//Tout ce qui est après '//' sur la ligne n'est que du commentaire

/* Et après '/*' c'est

tout

le

code

jusqu'à

*/

// Les Variables, les Constantes et leurs types

echo '<br><br>'; // On va à la ligne pour plus de clarté

/* les variables s'écrivent avec un $ suivi d'un nom qui décrit
 ce qu'elles contiennent écrit en camelCase */
$someNumber = 5;

echo $someNumber; // On peut directement afficher un nombre

echo '<br><br>';

echo gettype($someNumber);

$someDouble = 5.2;

echo '<br><br>';

echo $someDouble;

$doublePlusInteger = $someDouble + $someNumber;

echo '<br><br>';

echo (gettype($doublePlusInteger)); // La somme d'un Integer et d'un Double ne perd pas d'information, et est donc un Double

echo '<br><br>';

$someText = 'Ma première variable contenait le chiffre: ';

echo $someText . $someNumber;

echo '<br><br>';

echo "Ma première variable contenait le chiffre: $someNumber "; // On peut intégrer une variable directement dans un String (avec " uniquement), mais c'est moins lisible

define('SOME_CONSTANT', 'Le soleil se lève à l\'EST');  // Les constantes sont écrites en Majuscules séparées par des underscores.

echo '<br><br>';

echo SOME_CONSTANT;

echo '<br><br>';

$someText .= $someNumber . ' et on peut toujours dire que' . SOME_CONSTANT;

echo $someText;

echo '<br><br>';

// SOME_CONSTANT = 'Le soleil se lève à l'OUEST'; => erreur de synthaxe

/* Les opérateurs arithmétiques:

Nous avons déjà vu le '+' dans l'exemple ligne 38, auquel il faut ajouter:
moins: -
multiplier: *
diviser: /
exponentielle: **  // 5 ** 2 = 25
modulo: %
*/

$a = 100;

$b = 7;

echo $a / $b;

echo '<br><br>';

echo 'Je peux faire tenir ' . floor($a / $b) . ' b dans a et il me reste ' . $a % $b;

echo '<br><br>';

// Les tableaux:

$someArray = [1,2,3]; // Définir un tableau

print_r($someArray); // echo ne sais pas interpréter un tableau entier, nous verrons plus tard comment afficher cela plus proprement.

echo '<br><br>';

echo 'Le chiffre situé à l\'index 0 de mon tableau est ' . $someArray[0]; // appel du premier élément du tableau. Notez que cet élément est un Integer et que donc echo sais l'interpréter.

echo '<br><br>';

$someIndexedArray = [  // il existe aussi une fonction array() si vous aimez écrire pour rien.
    'un' => 1,
    'deux' => 2,
    'trois' => 3
];

print_r($someIndexedArray);

echo '<br><br>';

echo 'Le chiffre situé à l\'index "deux" de mon tableau est ' . $someIndexedArray["deux"];

echo '<br><br>';

$bidimentionalArray = [$someArray,$someIndexedArray,9,'toto']; // Les tableaux peuvent contenir d'autres tableaux, on parle de tableaux multidimensionnels.

print_r($bidimentionalArray); // On voit que ce tableau contient nos deux précédents tableaux, ainsi qu'un Integer et un String.

echo '<br><br>';

echo 'Le chiffre stocké à l\'index "trois" de mon tableau someIndexedArray qui est lui même à l\'index 1 de bidimentionalArray est: ' . $bidimentionalArray[1]["trois"];

echo '<br><br>';

// Les opérateurs logiques en PHP

/*
&& => ET:
true && true == true | true && false == false | false && false == false

|| => OU:
true || true == true | true || false == true | false || false == false

^ => Un seul des deux
true ^ true == false | true ^ false == true | false ^ false == false
*/

// Les Conditions et les Boucles:

$randomAge = rand(0,147);

echo 'J\'ai ' . $randomAge . ' ans';

echo '<br><br>';

if ($randomAge >= 18) {
    echo 'Permis B';
}
elseif ($randomAge >= 80) {
    echo 'Ca commence a devenir dangeureux papi!'; // ne sera jamais exécuté car 80 > 18
}
elseif ($randomAge >= 16) {
    echo 'Conduite Accompagnée';  // ne s'exécutera que si les if et elseif au dessus ne se sont pas exécutés.
}
else {
    echo 'Passager seulement';  // ne s'exécutera que si les if et elseif au dessus se sont pas exécutés.
}

echo '<br><br>';

// Compter jusqu'à 10 avec while
$count = 0;

while ($count <= 10) {     // le danger avec la boucle while, est qu'il faut s'assurer que la condition finisse par passer à false (boucle infinie)
    echo $count . '<br>';
    $count ++; // peut aussi s'écrire +=x si on veut incrémenter plus que 1 par 1
}

echo '<br><br>';

// Compter jusqu'à 10 avec for
for ($count = 0; $count <= 10; $count++) { // pour la boucle for, on définie une variable, une condition et une incrémentation directement dans la définition
    echo $count . '<br>';
}

// ATTENTION: Cela ne veut pas dire qu'on ne peut pas faire de boucle infinie avec for

echo '<br><br>';

// Quand vous souhaitez faire une boucle sur un tableau, il existe une façon de boucler particulière: foreach
$arrayOfTen = ['un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix'];

foreach ($arrayOfTen as $key => $value) {
    echo 'La valeur correspondante à la clé ' . $key . ' est: ' . $value . '<br>';
}

echo '<br><br>';

/* Les fonctions:
Un certain nombre de fonctions ont déjà été utilisées ci-dessus, comme rand(), quelques lignes au dessus et gettype() pour les variables.
Il existe un grand nombre de fonctions prédéfinies pour manipuler les données en PHP,
pensez à toujours vérifier ce qui existe avant de ré-inventer la roue.
*/

function maFonction ($variable1,$variable2,$variableOptionnelle1=NULL){
    // Ce que fera ma fonction quand appelée
}

// Pour cet exemple nous allons faire une fonction qui reproduit les étapes de notre if,elseif,else vu précédement.
maFonction($someArray,$someNumber);
function whichLicense ($age, $uselessVar='Hey, je suis la variable inutile!') {  // Le nom de la fonction est écrit en camelCase, avec entre parenthèse les arguments dans l'ordre attendu
    if ($age >= 18) {
        echo 'Permis B ,';
    }
    elseif ($age >= 16) {
        echo 'Conduite Accompagnée ,';  // ne s'exécutera que si les if et elseif au dessus ne se sont pas exécutés.
    }
    else {
        echo 'Passager seulement ,';  // ne s'exécutera que si les if et elseif au dessus se sont pas exécutés.
    }
    echo $uselessVar . '<br>';
}

whichLicense(30);
whichLicense(17);
whichLicense(5,'Pas si inutile que ça en fait!');


/*TP, Afficher sur une page les titres des posts avec des balises <h2> et le contenu avec des <p> */
$posts = [
    ['Mon premier post','J\'écris un premier message à la main, les autres seront générés automatiquement'],
    ['Mon deuxième post','Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.'],
    ['Mon troisième post','Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse deterritum.'],
    ['Mon quatrième post','Et quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.'],
    ['Mon cinquième post','Accedebant enim eius asperitati, ubi inminuta vel laesa amplitudo imperii dicebatur, et iracundae suspicionum quantitati proximorum cruentae blanditiae exaggerantium incidentia et dolere inpendio simulantium, si principis periclitetur vita, a cuius salute velut filo pendere statum orbis terrarum fictis vocibus exclamabant.']
];