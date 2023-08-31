<?php
if(isset($_POST['nombre1'])&& isset($_POST['nombre2'])&& !empty($_POST['operator'])){
    if(!is_nan($_POST['nombre1'])&& !is_nan($_POST['nombre2'])){
        
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $operator = $_POST['operator'];
    
    // Moins de code
    // $result = eval("return $nombre1 $operator $nombre2;");

    //Plus propre
    $result = null;
    if($operator == "*") {
        $result = $nombre1 * $nombre2;
    } elseif($operator == "/") {
        if ($operator == "/" && $nombre2==0)  {
            echo "Division par 0 impossible";
        }
        $result = $nombre1 / $nombre2;
    } elseif($operator == "+") {
        $result = $nombre1 + $nombre2;
    }else{
        $result = $nombre1 - $nombre2;
    }


    echo "$nombre1 $operator $nombre2 = $result";
} else{
    echo "Veuillez entrer des nombres";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="calculatrice.php"><button>Réinitialiser</button></a>
    
</body>
</html>