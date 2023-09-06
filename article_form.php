<?php
require('config.php');
$nomArticle = null;
$contenuArticle= null;
$date = null;



if (isset($_POST['nom_article']) && isset($_POST['contenu_article']) && isset($_POST['id_categorie'])) {
  $nomArticle = htmlspecialchars($_POST['nom_article']);
  $contenuArticle = htmlspecialchars($_POST['contenu_article']);
  $date = new DateTime("now");
  $date = $date->format('Y-m-d H:i:s');
  $categorie = (int) $_POST['id_categorie'];
  
 
  try {
    
    // $req = $db->prepare('INSERT INTO  article (nom_article, contenu_article)VALUES(?,?)');
    // $req->bindParam(1, $nomArticle, PDO::PARAM_STR);
    // $req->bi
    $req = $db->prepare('INSERT INTO  article (nom_article, contenu_article, created_at_article, id_categorie)VALUES(:nom_article, :contenu_article, :created_at_article, :id_categorie)');
    $req->bindParam('nom_article', $nomArticle, PDO::PARAM_STR);
    $req->bindParam('contenu_article', $contenuArticle, PDO::PARAM_STR);
    $req ->bindParam('id_categorie', $categorie, PDO::PARAM_STR);

    $req->bindParam('created_at_article', $date, PDO::PARAM_STR);
    $req->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- <script>alert('Ceci est une faille XSS');</script> -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="" method="post">
    <input type="text" name="nom_article">
    <input type="text" name="contenu_article">
    


                     
                              <label for="id_categorie">Choose category</label>
                              <select name="id_categorie" id="id_categorie">
                              <option value="" disabled selected>Select a type:</option>
                              <?php
                              $req = $db->prepare('SELECT * FROM categorie');
                              $req->execute();

                              foreach($req as $contenu)
                              echo "<option value = ".$contenu['id_categorie'].">".$contenu['nom_categorie']."</option>";
                              
                             ?>
                             
                              </select>
                              <input type="submit" value="Ajouter">
                              
       

    
</form>


</body>

</html>