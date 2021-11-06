<!-- On peut écrire du htm dans un fichier avec l'extension .php MAIS l'inverse n'est pas possible -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

    *{
        text-align: center;
        font-family: 'Roboto Mono', monospace;
        color: floralwhite;
        font-size: 17px;
    }
    .container{
        background-color: black;
        background-image: url('https://cdn.pixabay.com/photo/2018/08/15/13/10/galaxy-3608029_960_720.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;
        
    }
    .container2{
        backdrop-filter: blur(2px);
        background-color: rgba(0, 0, 0, 0.5);

    }
    .container2 select,
    .container2 select option{
        color: black;
        width: 100px;
        height: 30px;
        border-radius: 10px;
        margin: 20px;
    }
    #title{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h1{
        text-align : center;
        font-size: 70px;
        color: black;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }
    @-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
@keyframes glow{
    from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
    h2{
        color: orange;
        background: black;
        text-align: center;
        font-size: 20px;
        padding: 5px;
    }
    hr{
        width: 70%;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    table{
        margin: 0 auto;
        padding: 5px;
        background-color: rgba(0, 0, 0, 0.2);
        box-shadow: 12px 12px 2px 1px rgba(0, 0, 0, 1);
    }

</style>
<div class="container">
<div id="title">
<h1> Cours PHP </h1>
</div>
<!-- <hr style="width: 50%;"> -->
<div class="container2">
<h2 style="margin-top: 25px;">Ecriture et affichage</h2>

<?php //balise ouvrante d'un passage php

    //Ici, on ouvre un passage php pour y faire des traitements php
    /*
        Commentaire
        Sur plusieurs lignes
        Comme en JS
    */

    // Chaque instruction soit se terminer par un point virgule

?> <!-- balise fermante du passagephp -->

<?php //ouverture d'un nouveau passage

echo "Bonjour tout le monde"; //echo est l'instruction qui permet de faire un affichage

print "<br><strong> Salut </strong>"; // 'print' est aussi une instruction qui permet d'effectuer un affhichage

?>

<?php echo "<p>Hello</p>"; ?>
<p><?php echo "Salut"; ?></p> <!--Affichage à l'intérieur de la balise-->

<?="bonjour"; //Ici le "<?" remplace le <?php echo pour faire un affichage?> 


<h2>Les variables: types, déclarations et affectations</h2>

<?php
$a = 345; // déclaration d'une variable nommée "a" et avec une valeur de 345 qui s'écrit sans quotes/quillemets car c'est un nombre

echo $a; // Affichage de la variable a

echo "<br>" . gettype( $a ) . "<br>"; // integer (=nombre)
// gettype( $arg ) : fonction interne de php qui permet de connaitre le type de variable

// *******************************************

$a = "Bonjour tout le monde"; // Ici, on réaffecte la valeur de la variable $a. J'écrase '345' et remplace par la phrase "Bonjour tout le monde"

echo $a;
echo "<br>" . gettype( $a ) . "<br>"; 

//--------------
$a = "456"; // reaffectation

echo $a;
echo "<br>" . gettype( $a ) . "<br>";  //string car le nombre est entre quotes/guillemets

//-----------------
$a = 1.235; // reaffectation, ici un chiffre à virgule qui s'écrira avec le symbole point et non pas une virgule

echo $a;
echo "<br>" . gettype( $a ) . "<br>";  //double (=nombre à virgule)

// ------------
$a = true; // reaffectation (or false)

echo $a;
echo "<br>" . gettype( $a ) . "<br>";  //boolean 


// --------------------------------------------
echo "<h2> La concaténation </h2>";
//On concatène des chaines de caractères avec des variables et/ou des fonctions php AVEC le symbole "."

$x = "Bonjour";
$y = 'le monde';

echo $x . " tout " .$y . '<br>';

// -----------------------------------
// Les doubles quotes (guillemets) permettent d'interpréter les variables Alors que les quote simples (apostrophes) n'interpretent pas les variables et renverront une chaîne de caractères.

echo 'Avec les quotes simples: $x $y <br>';

echo "Avec les doubles quotes: $x $y <br>";
//********** */

echo "<h2> Concaténation lors de l'affectation </h2>";

// ------------------------
$prenom = 'Marco'; // déclaration d'une variable nommée 'prenom' où on lui affecte la valeur 'Marco'

echo $prenom . '<br>';

$prenom = 'Paulo'; //reaffectation (ecrase et remplace)
echo $prenom . '<br>';

// ------------------------

$pseudo = "Anne";
echo $pseudo . '<br>';

$pseudo .= '-Marie';
echo $pseudo . '<br>';

//-----------------------------------
echo "<h2> Les constantes et les constantes magiques </h2>";

define( 'CAPITALE', 'Paris'); // Par convention, une constante se déclare toujours en MAJUSCULE

//define (arg1, arg2);
    //arg1: le nom de la constante (MAJUSCULE)
    //arg2: la valeur de la constante


echo CAPITALE . '<br>';

    // define( 'CAPITALE', 'Moscou'); // ERROR: Constante déjà déclarée

//--------------------------------------------------
// Constantes magiques; constantes internes à PHP

echo __LINE__ . '<br>'; //affiche le numéro de la ligne courante
echo __FILE__ . '<br>'; //chemin vers le fichier courant
echo __DIR__ . '<br>'; //chemin complet vers le dossier courant


// -------------------------------------------------

echo "<h2>EXERCICE</h2>";
//Afficher: "bleu-blanc-rouge" (avec les tirest) en mettant chaque couleur dans une variable

$b = "bleu";
$bl = 'blanc';
$r = "rouge";

echo $b . "-" . $bl . "-" . $r;
echo "$b - $bl - $r";

// --------------------------------------------------------

echo"<h2> Les opérateurs arithmétiques </h2>";

$a = 10;
$b = 2;

echo $a + $b . '<br>'; //12
echo $a - $b . '<br>'; //8
echo $a / $b . '<br>'; //5
echo $a * $b . '<br>'; //20


// opération et affectation:
$a += $b; //equivaut à : $a = $a + $b
echo $a . '<br>';

$a -= $b; //equivaut à : $a = $a - $b
echo $a . '<br>';

$a /= $b; //equivaut à : $a = $a / $b
echo $a . '<br>';

$a *= $b; //equivaut à : $a = $a * $b
echo $a . '<br>';

// - SHAREMYCODE
$a = 10;
$b = 2;

echo $a + $b . '<br>'; //12
echo $a - $b . '<br>'; // 8
echo $a / $b . '<br>'; //5
echo $a * $b . '<hr>'; //20

//opération et affectation:
$a += $b; //équivaut à : $a = $a + $b
echo $a . '<br>'; //12

$a -= $b; //équivaut à : $a = $a - $b
echo $a . '<br>'; //10

$a *= $b; //équivaut à : $a = $a * $b
echo $a . '<br>'; //20

$a /= $b; //équivaut à : $a = $a / $b
echo $a . '<br>'; //10

// --------------------------------------------------------

echo"<h2> Structures conditionnelles (if/else) </h2>";

//isset() et empty(): 2 fonctions internes de php

    //isset() : teste si ça existe (si c'est défini). La fonction renverra 'true' ou 'false'

    //empty() : teste si c'est vide (0 ou non défini). La fonction renverra 'true' ou 'false'


$vara = 0;
$varab ='';

if(empty($vara)){ //Si la variable $vara est vide, 0 ou non définie, alors la fonction me renverra true et donc on exécute le code entre les accolades

    echo "Vara : 0, vide ou non définie <br>";

}


if(isset($varab)){ //si la variable $varab existe, alors on exécute le code entre les accolades

    echo "Varab : existe et est définie par rien <br>";
}

// ---------------------------------------------
// IF / ELSE IF / ELSE

$a = 10;
$b = 5;
$c = 2;

if( $a > $b ){ //Si $a (10) est supérieur à $b (5) alors, on exécute le code entre les accolades
    echo "A est supérieur à B <br>";
}else{ // Sinon, (cas par défaut)
    echo "Faux: A n'est pas supérieur à B <br>";
}

// ----------------------------------------------
// ET: &&

if( $a > $b && $b > $c){ //Si $a (10) est supérieur à $b (5) - ET QUE- $b (5) est supérieur à $c (2), alors on exécute le code entre les accolades
    echo "Ok pour les deux comparaisons <br>";
}


//--------------------------------------------------
// OU: || (altgr+6)

if($a==9 || $b > $c){ // Si $a (10) est égal à 9 OU QUE $b (5) est supérieur à $c (2), alors on exécute le code entre les accolades
    echo "Ok pour au moins une des deux comparaisons <br>";
}

//--------------------------------------------------

if( $a == 8){
    echo "1 - A est égal à 8 <br>";

}elseif($a != 10){
    echo "2- A est différent de 10 <br>";

}else{
    echo "3- Tout est faux ! <br>";
}

//--------------------------------------------------
// Version ternaire : forme contractée

echo ( $a == 10 ) ? "A est égal à 10 <br>" : "Faux <br>";
// Ici, le '?' remplace le "if" et les ":" remplacent le 'else

    //Traduction:
    if ($a == 10){
        echo "A est égal à 10 <br>";
    } else{
        "Faux <br>";
    }


//--------------------------------------------------
// Comparaison:

$vara = 1; //integer
echo '$vara est de type ' . gettype( $vara ) . '<br>';

$varab = "1"; //string
echo '$varab est de type ' . gettype( $varab) . '<br>';

if( $vara == $varab ){ //true
    echo "Il s'agit de la même chose car la valeur est la même! <br>";
}

if( $vara === $varab ){ //false
    echo "Il s'agit de la même chose car la valeur est la même! <br>";
}else{
    echo "L'égalité est fausse puisque le type est différent bien que la valeur soit la même";
}

echo "<h2> Condition SWITCH</h2>";

$couleur = 'jaune';

switch ($couleur){ //Ici, on compare la variable $couleur aux différents cas du switch
    case 'bleu' :
        echo "Vous aimez le bleu <br>";
    break;
    case 'rouge':
        echo "Vous aimez le rouge <br>";
    break;
    case 'vert':
        echo "Vous aimez le vert <br>";
    break;
    default: // cas par défaut si on ne rentre pas dans les cas précédents
        echo "Vous n'aimez pas les couleurs <br>";
    break;
    }

//EXERCICE: retranscrire le switch ci-dessus en condition If/else ou avec l'opérateur (||) ou en version ternaire:

if($couleur == 'bleu'){
    echo "Vous aimez le bleu <br>";
}elseif($couleur == 'rouge'){
    echo "Vous aimez le rouge <br>";
}elseif($couleur == 'vert'){
    echo "Vous aimez le vert <br>";
}else{
    echo "Vous n'aimez pas les couleurs <br>";
}

$couleur = 'rouge';
// ---------

if($couleur =='bleu' || $couleur=='rouge'|| $couleur=='vert'){
    echo "Vous aimez la couleur $couleur <br>";
}else{
    echo "Vous n'aimez pas les couleurs <br>";
}

// --------

echo ($couleur =='bleu' || $couleur=='rouge'|| $couleur=='vert') ? "Vous aimez la couleur $couleur <br>" : "Vous n'aimez pas les couleurs <br>";


//-- version ternaire imbriquée
echo ($couleur == 'bleu') ? "J'aime le bleur<br>":
    (($couleur =='rouge') ? "J'aime le rouge <br>" :
    (($couleur == 'vert') ? "J'aime le vert <br>" : "Je n'aime pas les couleurs<br>"));

//-------------------------------------------
echo "<h2> Fonctions prédéfinies </h2>";

echo "Date : " . date("d/m/Y") . "<br>";

$email = 'naomie74150@gmail.com';

echo strpos($email, '@').'<br>';
// strpos (arg1, arg2); indique la position d'un caractère d'une chaine
    //arg1: la chaine à parcourir
    //arg2: ce que l'on recherche

    // => ATTENTION: ici, la fonction affiche 11 car on commence à compter à partir de zéro!

$phrase = "voici une phrase";

echo strlen( $phrase ) . '<br>';
//strlen(arg); : retourne la taille de la chaine de caractère passée en argument (arg)

$texte = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse blanditiis sapiente excepturi voluptas expedita enim illo velit ipsam distinctio, optio, aperiam reiciendis aspernatur officiis in ut, saepe itaque voluptatibus quia?";

echo substr( $texte, 0, 20 ) . "...<a href='#'>Lire la suite</a><br>";
// substr(arg1, arg2, arg3) : permet de retourner une partie d'une chaine
    //arg 1 : la chaine que l'on souhaite couper
    //arg 2: la position de départ (où on commence), ici, on commenc eà la position ZERO qui correspond à la première lettre
    //arg 3 : la longueur de la découpe



echo "<h2>Les fonctions utilisateur</h2>";

function separation(){ //délaration d'une fonction nommée 'séparation' prévue pour ne pas recevoir d'argument car les parenthèses (OBLIGATOIRES) sont vides
    echo "<hr><hr><hr>";
}

separation(); //Appel et exécution de la fonction (toujours avec les parenthèses)

// --------------------------------
function bonjour($qui){ //fonction prévue pour recevoir UN argument, ici '$qui'
    return "Bonjour" .$qui.'<br>';
}

echo bonjour('Jean-Pierre'); // Appel et exécution de la fonction
// Si la fonction esrt prévue pour recevoir un argument alors il faut OLIGATOIREMENT lui envoyer un argument en paramètre sinon on aura une "error fatal"

// QUand il y a un return  dans une fonction, il faudra faire un "echo" de la fonction pour avoir un affichage


function surprise($qui){
    echo "Surprise $qui <br>";
}

surprise('motherf*cker');

function jourSemaine(){

    echo "test<br>"; //s'affiche normalement
    
    $jour = "jeudi <br>"; //variable LOCALE

    return $jour; //la fonction va retourner 'quelque chose' (ici, la variable $jour) et à ce moment précis, on quitte la fonction
    
    echo "Second test <br>"; // cette ligne de code ne fonctionnera pas car il y a "return" juste avant et donc elle n'est pas interprétée car on a déjà quitté la fonction
}

echo jourSemaine(); // appel et exécution de la fonction

// ----------------------------------------------

$pays = 'France'; //déclaration d'une variable dans l'espace global

function affichePays(){
    global $pays; // le mot clef global permet de rappartrier un élement déclaré dans l'espace global à l'intérieur d'un espace local

    // $pays = 'Maroc'; //Ok la ligne ci-dessous fonctionne si on déclare la variable dans l'espace local

    echo $pays . '<br>';
}

affichePays(); //appel et exécution de la fonction

$varGlobale = 'superbes';

function test( $maVariable, $maVariable2){

	echo "Mes $maVariable2 variables sont $maVariable" . '<br>';
}

test( 'définies', $varGlobale);


// --------------------------------------------------
//EXERCICE: créer une fonction TVA qui attendra 2 arguments (le chiffre et le taux) afin que l'on puisse afficher et calculer un nombre avec un taux de notre choix

//bonus mettre un taux par défaut


// function TVA($chiffre, $taux){

//     if($taux !== NULL){
//     return $chiffre / 100 * $taux.'€';

//     }else{
//         $taux = 20; //il ne faut pas définir la valeur par défaut ici mais dans l'argument directement
//         return $chiffre / 100 * $taux. '€';
//     }
// }

// echo TVA(100) . '<br>';



function TVA($chiffre, $taux = 20){
    //ici le taux correspond à un taux par défaut. Si on ne renseigne pas cet argument lors de l'appel de la fonction
    
    return "Prix HT: ". $chiffre . '€'. '<br>'.
           "Montant de la TVA: ".$chiffre / 100 * $taux.'€'.'<br>'.
           "Prix TTC: ".$resultat = $chiffre + $chiffre / 100 * $taux.'€'.'<br>';
    
}
echo TVA(7); // appel et exécution de la fonction avec un seul argument, du coup, le second argument prendra la valeur par défaut (20) que l'on a défini en paramètre de la fonction

echo TVA(50, 5.5);//appel et exécution de la fonction avec les DEUX ARGUMENTS PREVUS


//-----------------------------------------
// EXERCICE: Créer une fonction meteo avec 2 arguemnts (températuer et la saison), permet d'afficher la phrase suivante:

//"Nous sommes en saison et il fait température degré <br>"

// Exercice: Gérer l'article 'au' SI la saison est 'printemps' et gérer le 's' de degré SI on est au dessus (2°) OU en dessous en (-2°)


//-----------------------------------
// function meteo( $saison, $temperature){
//     if($saison === 'printemps' &&  ($temperature >= 2 || $temperature <=-2)){
//         echo "Nous sommes au $saison et il fait $temperature degrés <br>";
//     }elseif($saison === 'printemps' && ($temperature <2 || $temperature >-2)){
//         echo "Nous sommes au $saison et il fait $temperature degré <br>";
//     }elseif ( $temperature >= 2 || $temperature <= -2){
//         echo "Nous sommes en $saison et il fait $temperature degrés <br>";
//     }else{
//         echo "Nous sommes en $saison et il fait $temperature degré <br>";   
//     }
// }

function meteo( $saison, $temperature){
    if($temperature >= 2 || $temperature <=-2){
        echo "Nous sommes au $saison et il fait $temperature degrés <br>";
    }elseif($saison === 'printemps' && ($temperature <2 || $temperature >-2)){
        echo "Nous sommes au $saison et il fait $temperature degré <br>";
    }elseif ( $temperature >= 2 || $temperature <= -2){
        echo "Nous sommes en $saison et il fait $temperature degrés <br>";
    }else{
        echo "Nous sommes en $saison et il fait $temperature degré <br>";   
    }
}

meteo('hiver', -1);
meteo('automne', -10);
meteo('printemps', 15);
meteo('été', 55);

// correction:
// function meteo( $temperature , $saison ){

//     if( $saison == 'printemps' ){ //SI la saison est égal à 'printemps', alors on crée une variable avec la valeur 'au'

//         $article = ' au ';
//     }
//     else{ //SINON, c'est que c'est "été, automne ou hiver" et donc on crée cette même variable avec la valeur
//         $article = ' en '; 
//     }
//     //version ternaire :
//     //$article = ($saison == 'printemps') ? ' au ' :  ' en ';

//     if( $temperature >= 2 || $temperature <= -2 ){ //SI la temperature est supérieur ou égale à 2 - OU QUE - la temperature est inférieur oué gale à -2 alors on crée une variable aevc la valeur de "degrés" (avec un 's')

//         $deg = ' degrés';
//     }
//     else{ //SINON, c'est que l'on se trouve dans l'interval ]-2° : 2°[ et donc on déclare cette meme variable avec la valeur "degré" (sans 's')

//         $deg = " degré";
//     }
//     //version ternaire:
//     //$deg = ( $temperature >= 2 || $temperature <= -2 ) ? ' degrés' : "degré";

//     echo "Nous sommes $article $saison et il fait $temperature $deg <br>";
// }

// meteo( 12, "ete" );
// meteo( -2, "hiver" );
// meteo( 1, "printemps" );
// meteo( 45, "printemps" );
// meteo( -1.2, "automne" );

echo '<hr>';
//---------------------------------------
function meteo2($temperature, $saison){

    if($saison=="printemps"){

        if($temperature>2 || $temperature<-2){

            echo "Nous sommes au $saison et il fait $temperature degrés <br>";
        }
        else{
            echo "Nous sommes au $saison et il fait $temperature degré <br>";
        }
    }
    else{
        if($temperature>2 || $temperature<-2){

            echo "Nous sommes en $saison et il fait $temperature degrés <br>";
        }
        else{
            echo "Nous sommes en $saison et il fait $temperature degré <br>";
        }
    }
}
meteo2( 12, "ete" );
meteo2( -2, "hiver" );
meteo2( 1, "printemps" );
meteo2( 45, "printemps" );
meteo2( -1.2, "automne" );
echo '<hr>';

//-----------------------------------
function manu($temperature, $saison){

    if (($saison == 'hiver' || $saison == 'ete' || $saison == 'automne') && ($temperature >= 2 || $temperature <= -2)){

        echo "Nous sommes en $saison et il fait $temperature degrés. <br>";

    } elseif(($saison == 'hiver' || $saison == 'ete' || $saison == 'automne') && ($temperature == 1 || $temperature == -1)){

        echo "Nous sommes en $saison et il fait $temperature degré. <br>";

    } elseif($saison == 'printemps'  && ($temperature == 1 || $temperature == -1)){

        echo "Nous sommes au $saison et il fait $temperature degré. <br>";

    } else {

        echo "Nous sommes au $saison et il fait $temperature degrés. <br>";
    }
}
manu( 12, "ete" );
manu( -2, "hiver" );
manu( 1, "printemps" );
manu( 56, "printemps" );
manu( -1, "automne" );
echo '<hr>';
//-----------------------------------

echo "<h2> Structures itératives: les boucles </h2>";
// Une boucle permet de répéter une portion de code TANT qu'une condition est réalisée.

//WHILE:

$i = 0;

while( $i < 5){ //TANT que $i est inférieur à 5, alors on exécute le code entre les accolades
    echo "$i => ";

    $i++; // incrémentation: $i++ <=> $i = $i + 1
}

echo "<hr>";

//EXERCICE : Faites en sortes, via une boucle while, d'enlever la flèche "a la fin", c'est à dire après le 4

    //résultat attendu : 0 => 1 => 2 => 3 => 4

$i = 0; //réinitialisation à zéron car avec la boucle précédente, $1 vaut 5

while( $i < 5){
    
        if( $i < 4 ){ //tant que $i est inférieur à quatre on affiche la valeur
            echo "$i => ";
            
        }else { //Sinon, on affiche la valeur de $i sans la flèche
            echo $i;
        }
    
        //version ternaire:
        // echo ( $i == 4 ) ? $i : "$i => ";

    $i++;
}


echo '<hr>';

// ------------------------------------------
//Boucle 'for' : va répéter un nombre de fois défini les instructions entre les accolades

//A la différence d'une boucle while() qui va répéter indéfiniment les instructions entre les accolades TANT QUE la condition n'est pas réalisée.

//SI on doit utiliser une boucle MAIS que l'on ne sait pas combien de fois on va passer dedans, on utilisera une boucle while


for( $i = 1; $i < 11; $i++ ){ //initialisation; condition; incrémentation
//Ici, on a dix tours de boucle
    // initialisation : $i = 1
    // condition : $i < 11 (on s'arrête donc à 10)
    // incrémentation: $i++, on, augmente de +1 la valeur de $i à chaque tour de boucle

    echo $i . ' tours de boucle <br>';

}

//-------------------------------------------------
// EXERCICE: afficher un selct option avec 51 options via une boucle 'for' dans le sens inverse, càd pour afficher les années allant de 2021 à 1970

echo "<select name='' id=''>";
for( $i = 2021; $i >= 1970; $i-- ){
    echo "<option value='$i'> $i </option>"; 
}
echo "</select>";

//------------------------------------------
//EXERCICE : Affichez les numéros allant de 1 à 10 dans un tableau SUR UNE SEULE LIGNE



echo '<table border="1">';
echo '<tr>';
for ($i = 1; $i < 11; $i++){
        echo "<td>$i</td>";
}
echo  '</tr>';
echo '</table><br>';


//--------------------------------------------
//EXERCICE: boucles imbriquées Créer un tableau avec 10 lignes contenant 10 cellules allant de 1 à 100:

echo '<table border="1">';
$b = 0;

for( $i = 1; $i <= 10; $i++){

    echo '<tr>';

        for ($a = 1; $a <= 10; $a++){
            $b++;
            echo "<td> $b </td>";
        }

    echo  '</tr>';
}
echo '</table><br>';

//--------------------------------------------------
// CORRECTION:
$numero = 1; //initialisation d'une variable avec la valeur "1"

echo "<table border='1'>";
    for( $i = 1; $i <= 10; $i++ ){ //10tours de boucle
        echo "<tr>";
        
            for( $j = 1; $j <= 10; $j++ ){ //10 tours de boucles

                echo "<td> $numero </td>"; //Ici, on affiche la variable $numero
                $numero++; //Incrémentation: on rajoute +1 à la variable $numero APRES l'affichage dansla cellule
            }

        echo "</tr>";
    }

//-------------------------------------------------
//Autre version :

echo "<table border='5'>";
    for ($ligne = 0; $ligne < 10; $ligne++){ //10 tours de boucle

        echo "<tr>"; 
            
            for($cellule = 1; $cellule < 11; $cellule++){ //10tours de boucle
            
                echo "<td>" . ($cellule + ($ligne*10) ) . "</td>" ;
                /*1er tour de boucle : $ligne = 0
					//1er tour de la 2ème boucle : $cellule = 1
						//=> 10 * 0 + 1 = 1
					//2è tour de la 2ème boucle : $cellule = 2
						//=> 10 * 0 + 2 = 2 .....

				1er tour de boucle : $ligne = 1
					//1er tour de la 2ème boucle : $cellule = 1
						//=> 10 * 1 + 1 = 11
					//2è tour de la 2ème boucle : $cellule = 2
						//=> 10 * 1 + 2 = 12 .....
				*/
            }
        echo "</tr>";
    }
echo "</table>";

//-------------------------------------------------
//Autre version "leeroy":
echo "<table border='2'>";

    $count = 1;
    $len = 100;
    $lineLimit = 10;

    for($l = 0; $l < ($len / $lineLimit); $l++){ // 10tours de boucle
        echo "<tr>";

            for($i = 0; ($i < $lineLimit && $count <= $len); $i++){ //10tours deboucle
                
                echo "<td style=''> $count </td>"; 

                $count++;
            }

        echo "</tr>";
    }
echo "</table>";

//-------------------------------------------------
//Autre version "imane":
echo "<table border ='2'>";
    echo "<tr>";

    for( $i = 1; $i<= 100; $i++){//100 tours de boucle

        echo "<td>" . $i . "</td>";

        if( $i % 10 == 0)
        {
            if( $i == 100 ){

                echo "</tr>";
            }
            else{
                echo "</tr><tr>";
            }
        }
    }

echo "</table><hr>";

//-------------------------------------------------

echo "<h2> Les arrays + boucles foreach </h2>";
// Boucle foreach(): Fonctionne uniquement avec kes tableaux (ou objets). Elle retourne une arreur si vous tenez de l'exécuter avec une variable autre qu'un array ou (objet).

    // => La boucle foreach(): permet de passer en revue toutes les données d'un tableau.


    $tableau = ['pomme', 'pêche', 'poire']; //déclaration d'un tableau avec les corchets et on sépare les valeurs par des virgules

    // echo $tableau;


    $tableau[] = 'cerise'; //Ici on rajoute une valeur à la fin de notre ($tableau)




print '<pre>'; //permet de faire un passage à la ligne ete d'avoir un affichage plus sympa/lisible

        var_dump( $tableau ); //plus d'informations

        print_r( $tableau ); //plus lisible
    
 print '</pre>';

//Afficher poire :
echo $tableau[2].'<hr>'; //Ici, pour afficher un élément précis d'un tableau, il faut appelr le tableau et préciser entre crochets l'indice correspondant


//----------------------------------------------
//Affichage de toutes les infos du tableau:

for($i = 0; $i < 4; $i++ ){

    echo "Valeur de i : $i  => " . $tableau[$i] . '<br>';
}

//------------------------------------------------
// Count() et sizeof():

echo "<hr> Taille du tableau: " . count($tableau) . '<br>';
echo "Taille du tableau: " . sizeof($tableau) . '<br>';

//Affichage de toutes les informations du talveau de manière dynamique même si l'on rajoute des éléments à notre tableau, toutes les infos seront parcourues et affichées:

    $tableau[] = 'framboise';

    for( $i =0; $i < sizeof($tableau); $i++){
        echo "Valeur de i: $i =>" .$tableau[$i] . '<br>';
    }


// ------------------------------------
//Possibilité de déclarer un tableau avec la fonction de php: array() et on a également la possibilité de choisir les indices du tableau:

$couleur = array(
    'j' => 'jaune',
    'r' => 'rouge',
    'v' => 'vert'
);

print '<pre>';

    print_r($couleur);

print '</pre>';

//Affichage de la couleur rouge:
echo $couleur['r'] . '<br>';

//Boucle foreach(): permet de parcourir les données d'un tableau

//ici on souhaite parcourir le tableau $couleur où les indices ne sont pas numériques donc on ne peut pas utiliser la boucle 'for'

foreach($couleur as $indice => $valeur){
    echo "Indice: $indice et sa valeur: $valeur<br>";
}

//ici indice et valeur sont des variables que l'on peut nommer comme on souhaite


//Si on ne met qu'une variable en argument après le mot clef "as", alors cette variable parcours uniquement les valeurs du tableau.

foreach($couleur as $value){
    echo $value . '/';
}

echo '<hr>';

// Autre syntaxe:
//ici lraccolade ouvrante est remplacée par les deux points et l'accolade fermante est remplacée par 'endforeach;'.

foreach($tableau as $fruit):
    echo $fruit . '-';
endforeach;
//-------------------------------------------------

echo "<h2> Les ararys multidimentionnels </h2>";

// Ce sont des tableaux imbriqués, càd des tableaux à l'intérieur d'un tableau

$inception = array(
    0 => array('prénom' => 'marco', 'nom' => 'polo'), 
    1 => array('prénom' => 'jean', 'nom' => 'baptiste'), 
    2 => array('prénom' => 'bob', 'nom' => 'dylan')
); 

print '<pre>';
    print_r( $inception);
print '</pre>';


//Affichage 'baptiste'
echo $inception[1]['nom'] . '<br><br><hr>';



// EXERCICE: parcourir toutes les informations du tableau $inception via des boucles foreach():

    foreach($inception as $indice => $value){

        // print '<pre>';
            //print_r( $value );
        // print '</pre>';


        foreach($inception[$indice] as $index2 => $value2){
        
        echo "$index2 :  $value2 <br>";
    }

    echo "<hr>";

}

//Autres façons de faire:

for( $i = 0; $i < sizeof($inception); $i++){
        // print '<pre>';
            //print_r( $inception[$i] );
        // print '</pre>';
    foreach( $inception[$i] as $index => $valeur){
        echo $index . ' : ' . $valeur . '<br>';
    }
}

//-------------------------------------------------

echo "<h2> Les objets </h2>";

class Etudiant{
    public $prenom = "Naomie";
    //'public' : permet de dire que la propriété sera accessible partout (via l'objet). Il existe également 'protected' et 'private.

    public $age = 24;

    public function pays (){
        return 'France';
    }
}

$etudiant1 = new Etudiant;
//le mot-clef "new" permet d'instancier (déployer) la classe et d'en faire un objet (=instance). On se servira de ce qu'il y a à l'intérieur de la classe VIA l'objet.



// echo $etudiant1; FATAL ERROR: on ne peut pas afficher les informaitons d'un objet tel quel

        // print '<pre>';
        //     var_dump($etudiant1);
        //     print_r( $etudiant1 );
        // print '</pre>';

//Afficher un élément spécifique:

    echo $etudiant1 -> prenom . '<br>';
    echo $etudiant1 -> age . '<br>';

    //Dans un array, on va piocher les informations avec des crochets [], alors qu'ici avec les objets, on utilise la flèche '->' pour accéder aux informations de la classe via l'objet



        print '<pre>';
            print_r( get_class_methods($etudiant1) );
            //get_class_method ($object) est une fonction php qui permet de voir les méthodes disponibles d'un objet
        print '</pre>';


//Utilisation de la méthode:
echo $etudiant1 -> pays(); //appel d'une méthode via l'objet TOUJOURS avec les parenthèses

//-------------------------------------------------

echo "<h2> Les inclusions </h2>";


echo "Première fois: <br>";
include "exemple.inc.php"; //Inclusion du fichier exemple.inc.php à cet endroit précis

echo "Deuxième fois: <br>";
include_once "exemple.inc.php"; //permet de vérifier si le fichier a déjà été inclus et si c'est le cas, il ne le ré-inclus pas


echo "Première fois: <br>";
require "exemple.inc.php"; //Inclusion du fichier exemple.inc.php à cet endroit précis

echo "Deuxième fois: <br>";
require_once "exemple.inc.php"; //permet de vérifier si le fichier a déjà été inclus et si c'est le cas, il ne le ré-inclus pas





echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
?> </div></div>