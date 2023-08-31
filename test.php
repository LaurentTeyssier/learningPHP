<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    // $int = 5;
    // $laurent = "Laurent";
    // $bool = false;
    
    
    // echo $int;
    // echo " ";
    // echo $laurent;
    // echo "&nbsp;";
    // echo gettype($bool);
    
//     $a = 12;
// $b = 10;
// $total = $a + $b;

// echo $total;


// $aa = 5;
// $bb = 3;
// $cc = $aa + $bb;

// echo $aa, " ", $bb, " ", $cc;
// $temp = 0;
// $a = 15;
// $b = 23;
// echo $a, " ", $b, ' ';

// function swapValues($num1, $num2) {
//     $temp = $num1;
//     $num1= $num2;
//     $num2 = $temp;
//     echo $num1, " ", $num2;
//   }
//   swapValues($a, $b);

// $prixHT = 12.5;
// $numArt = 56;
// $tauxTVA = 19.6;

// echo $prixHT, " ", $numArt, " ", $tauxTVA, " ";

// function prixTTC($float1, $int, $float2){
//   echo($float1 * $int) * (1+($float2/100));
// }

// prixTTC($prixHT, $numArt, $tauxTVA);

/*
exercice concat 01
*/

// $a = "bonjour";

// echo "\$a = ".$a;

// /*
// Exercice concat 02
// */

// $a = "bon";
// $b = "jour";
// $c = 10;

// echo $a.$b.++$c;


// /*
// exercice concat 03
// */

// $a = "bonjour";
// echo "<p>$a l'adrar</p>";

/*
exercice function 01
*/
// function soustrait(int | float  $a, int | float $b): int | float {
//     $result = $b - $a;
//     return $result;
// }

// echo soustrait(5, 10);
// echo "\n";

// /*
// exercice function 02
// */

// function arrondi(int|float $float) : int|float {
//     return round($float);
// }

// echo arrondi(18.765);
// echo "\n";
// /*
// exercice function 03
// */

// function additionne3(int | float $a, int | float $b, int | float $c): int | float{
//     return $a + $b + $c;
// }

// echo additionne3(5, 8, 156);
// echo "\n";
// /*
// exercice function 04
// */

// function moyenne3(int | float $a, int | float $b, int | float $c): int | float{
//   return  round(($a + $b + $c)/3);
// }

// echo moyenne3(5, 8, 156);
// echo "\n";


// function biggerNumber(int|float $a, int|float $b, int|float $c){
//     $result = $c;
//     if($a > $b && $a > $c){
//         $result = $a;
//     }else if ($b > $a && $b> $c){
//         $result = $b;
//     }
//     echo "$result is the bigger number.";
// }

// biggerNumber(3, 112, 96);

// function lowerNumber(int|float $a, int|float $b, int|float $c){
//     $result = $c;
//     if($a < $b && $a < $c){
//         $result = $a;
//     }else if ($b < $a && $b< $c){
//         $result = $b;
//     }
//     echo "$result is the smaller number.";
// }

// lowerNumber(113, 112, 1196);
// $float = readline("quel est le prix ?");
// readline_add_history($float);
// function totalPrice(float $float){

//     if($float > 2000){
//         $float =0.80;
//     } else if ($float > 1000) {
//         $float= 0.90;
//     }
//     $result = $float;
//    echo $result;
// }
// echo "\n";
// totalPrice($float);
// echo "\n";
// totalPrice(1028.66);
// echo "\n";
// totalPrice(828.66);

// $year = readline("quelle année vous-vous verifier ? min 1582");
// readline_add_history($year);

// function bissextile(int $a){

//     if ($a< 1582){
//         echo"cette année ne peux pas être calculée";
//     }
//     elseif ( $a%4 == 0 && $a%100 != 0|| $a%400 == 0){
//         echo"l'année $a est bissextile";
//     }
//     else echo "l'année $a est non-bissextile";
// }

// bissextile($year);


// Exercice 1 :
// - Choisir un nombre compris entre 0 et 999
// - A l’aide d’une boucle while, effectuez des tirages aléatoires (utilisation de la fonction PHP « rand() » jusqu’à trouver le bon nombre. 
// - Affichez le nombre d’itérations nécessaires pour trouver le nombre

// $nbr = 35;

// function findNbr(int $int){
//     $rdmNbr = 0;
//     $counter = 0;
//     while($int != $rdmNbr){
//         if($rdmNbr >= $int){
//             $rdmNbr = rand(0, $rdmNbr-1);
//             $counter++;
//         } else {
//             $rdmNbr = rand($rdmNbr+1, 999);
//             $counter ++; 
//         }      

//     }
//     return $counter;
// }

// echo "<br>Le programme a trouvé en ".findNbr($nbr) ." essais.";

// Exercice 2 :
// - Choisir un nombre de lignes
// - Choisir un nombre de colonnes
// - A l’aide de boucles « for », obtenez le résultat suivant : 
// 0000000000
// 1111111111
// 2222222222
// 3333333333
// 4444444444
// 5555555555
// 6666666666

// echo "<br>first method: str_repeat";
// function grid01 (int $col, int $row){
//     for($i = 0; $i<=$row; $i++){
//         echo str_repeat($i, $col). "<br>";
//     }
// }
// echo "<br>";
// grid01(8,8);
// echo "<br>";

// echo "<br>second method: nested loops";
// function grid02 (int $col, int $row){
//     for($i = 0; $i<=$row; $i++){
//         for($j = 0; $j<$col; $j++){
//         echo $i;
//     }
//     echo "<br>";
// }
// }
// echo "<br>";
// grid02(9,9);
// echo "<br>";


//  
// Exercice 3 :
// - Ecrivez des boucles qui affichent ce qui est demandé
// - Le nombre de colonne à afficher dépend du n° de ligne, à la ligne i, il faut afficher i colonnes.
// - Le résultat attendu est celui-ci :
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// echo "<br>first method: str_repeat";
// function grid21 (int $row){
//     for($i = 0; $i<$row+1; $i++){
//         echo str_repeat($i, $i). "<br>";
//     }
// }

// grid21(8);
// echo "<br>";
// echo "<br>second method: nested loops";
// function grid22 (int $row){
//     for($i = 0; $i<=$row; $i++){
//         for($j = 0; $j<$i; $j++){
//         echo $i;
//     }
//     echo "<br>";
// }
// }

// grid22(9);
// echo "<br>";

// Exercice 1 :
// - Générez un tableau de longueur 50 en injectant des valeurs aléatoires comprises entre -100 et 100
// - Une fois les données injectées, affichez la taille du tableau

$myArr = [];

function fillArr (array $arr){
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
    }
    return count($arr);
}

echo "The length of the array is: ".fillArr($myArr);

echo "<br>";


// Exercice 2 :
// - Créer une fonction qui affiche la valeur la plus grande du tableau (from scratch puis en utilisant une fonction interne à PHP).

echo "<br> First method using custom functions:<br>";
function sortMaxArr01(array $arr){
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
    }
    $temp =-100;
    for($i =0; $i<count($arr); $i++){
        if($arr[$i]>= $temp){
            $temp = $arr[$i];
        }
    }
    return $temp;
}

echo "The maximum value of the array is: ".sortMaxArr01($myArr);

echo "<br> Second method using native functions:<br>";

function sortMaxArr02(array $arr){
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
    }
    return max($arr);
    }
    


echo "The maximum value of the array is: ".sortMaxArr02($myArr);
// Exercice 3 :
// - Créer une fonction qui affiche la moyenne du tableau.
echo "<br>";
function sortAvgArr(array $arr){
    $avg = 0;
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
        $avg+=$arr[$i];
    }
    return $avg/count($arr);
}
echo "The average value of the array is: ".sortAvgArr($myArr);
// Exercice 4 :
// - Créer une fonction qui affiche la valeur la plus petite du tableau (from scratch et en utilisant une fonction interne à PHP).

echo "<br> First method using custom functions:<br>";
function sortMinArr01(array $arr){
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
    }
    $temp =100;
    for($i =0; $i<count($arr); $i++){
        if($arr[$i]<= $temp){
            $temp = $arr[$i];
        }
    }
    return $temp;
}

echo "The minimum value of the array is: ".sortMinArr01($myArr);

echo "<br> Second method using native functions:<br>";

function sortMinArr02(array $arr){
    for($i = 0; $i<50; $i++){
        array_push($arr, rand(-100,100));
    }
    return min($arr);
    }
    


echo "The minimum value of the array is: ".sortMinArr02($myArr);



$my_arr = range(0, 1000);
$prime_numb =[];
function isPrime(int $nbr): bool{
    if($nbr <2){
        return false;
    }
    for($i=2; $i<$nbr; $i++){
        if($nbr % $i ==0){
            return false;
        }
        
        
    }  
    return true;  
}

foreach($my_arr as $values){
    if(isPrime($values)){
        $prime_numb[] = $values;

    }
}

var_dump( $prime_numb);
function listPrimes(array $arr){
    echo"<ul>";
foreach($arr as $list){
    echo "<li>$list</li>";
}
echo "</ul>";
}

listPrimes($prime_numb);





// foreach($my_arr as $value){
//     if($value % 1 == 0 && $value % $value == 0 ){
//         array_push($prime_numb,$value);

//     }
// }

// echo var_dump($prime_numb);
?>
    
    
    
</body>
</html>