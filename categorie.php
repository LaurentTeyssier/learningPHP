<?php
require('config.php');
$nomCategorie = null;
 
if (isset($_POST['nom_categorie'])) {
  $nomCategorie = htmlspecialchars($_POST['nom_categorie']);
  

  $req = $db->prepare('INSERT INTO  categorie (nom_categorie)VALUES(:nom_categorie)');
  $req->bindParam('nom_categorie', $nomCategorie, PDO::PARAM_STR);
  
  $req->execute();
 
    

//     try {
//   } catch (PDOException $ex) {
//     echo $ex->getMessage();
//   }

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
    <label for="nom_categorie">Entrez un nom de catégorie :</label>
    <input type="text" name="nom_categorie" id="nom_categorie">
        
    </form>
</body>
</html>