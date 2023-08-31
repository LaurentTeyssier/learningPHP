<?php
if(isset($_POST['product_name'])&& isset($_POST['product_desc'])){
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $db = new PDO('mysql:host=localhost; dbname=articles_php', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $sql = "INSERT INTO article(nom_article, contenu_article)values ('$product_name', '$product_desc')";
   echo "<br>";
   var_dump($sql);
//    $db->query($sql);
   
   
    $stmt = $db->prepare($sql);
    $stmt->execute();

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
    <form action="" method="post">
        <label for="product_name">Entrez un nom de produit :</label>
        <input type="text" name="product_name" id="product_name">
        <label for="product_desc">Entrez la description du produit :</label>
        <input type="text" name="product_desc" id="product_desc">
        <input type="submit" value="Ajouter produit">
    </form>
</body>
</html>