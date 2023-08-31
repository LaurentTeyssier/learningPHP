

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
if (isset($_POST['first_number'])&& isset($_POST['second_number'])){
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
    $result = $first_number + $second_number;
    echo "le résultat de l'addition de $first_number et $second_number est: $result";
    ?>
    <button href="form.php">Réinitialiser</button>
<?php
  } //else {
?>



<!-- <form action="form.php" method="post">
    <legend>Additionner deux nombres</legend>
    <label for="first_number">Entrez le premier nombre</label>
    <input type="number" name="first_number" id="first_number">
    <label for="second_number">Entrez le second nombre</label>
    <input type="number" name="second_number" id="second_number">
    <input type="submit" value="Additionner">
    </form> -->
 <?php /*}*/ ?>









 <form action="form.php" method="post">
    <legend>Calculer prix TTC</legend>
    <label for="prix_ht">Entrez le prix HT</label>
    <input type="number" name="prix_ht" id="prix_ht">
    <label for="nombre_article">Entrez le nombre d'articles</label>
    <input type="number" name="nombre_article" id="nombre_article">
    <label for="taux_tva">Entrez le taux de TVA</label>
    <input type="number" name="taux_tva" id="taux_tva">
    <input type="submit" value="Calculer">
    </form>

    <?php
 if (isset($_POST['prix_ht'])&& isset($_POST['nombre_article'])&& isset($_POST['taux_tva'])){
    $prix_ht = $_POST['prix_ht'];
    $nombre_article = $_POST['nombre_article'];
    $taux_tva = $_POST['taux_tva'];
    $result = ($prix_ht * $nombre_article) * (1+$taux_tva/100);
    echo "le prix TTC est égal à: $result euros";
 } ?>

</body>
</html>