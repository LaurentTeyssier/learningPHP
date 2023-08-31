<?php
$db = new PDO('mysql:host=localhost; dbname=connexion_php', 'root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>