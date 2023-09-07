<?php

$successMessage = $_POST['nom_article']." a bien été ajouté.";
$failureMessage = "Veuillez remplir tous les champs, avec des informations valides";
$nomArticle = "";
$prixArticle = 0;
try{
$db = new PDO('mysql:host=localhost; dbname=evaluation', 'root', '', 
array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $ex) {
    echo $ex->getMessage();
}

function addArticle ($db) {
    $req = $db ->prepare ('INSERT INTO article(nom_article, prix_article)VALUES(:nom_article,:prix_article)');
    $req ->bindParam('nom_article', $_POST['nom_article'], PDO::PARAM_STR);
    $req ->bindParam('prix_article', $_POST['prix_article'], PDO::PARAM_STR);
    $req ->execute();
    
    
}
if(isset($_POST['nom_article'])&&!empty($_POST['prix_article'])&& $_POST['prix_article']>0){
    $nomArticle = $_POST['nom_article'];
    $prixArticle = $_POST['prix_article'];
    
    addArticle($db);
    // header('location: ./index.php');
    echo $successMessage;
} else{
 
   // header('location: ./index.php');
    echo $failureMessage;
    
    ?><a href="index.php"><button>Retour</button></a>
<?php }
?>