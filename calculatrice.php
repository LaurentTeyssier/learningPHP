<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultat.php" method="post">
        <legend>Calculatrice</legend>
        <label for="nombre1">Entrez le premier nombre :</label>
        <input type="number" step="0.01" name="nombre1" id="nombre1">
        <label for="operator">Choisissez un opérateur de calcul :</label>
        <select name="operator" id="operator">
            <option value="" disabled selected>Choisir</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <label for="nombre2">Entrez le second nombre :</label>
        <input type="number" step="0.01" name="nombre2" id="nombre2">
        
        <input type="submit" value="Calculer">
        
    </form>
    
</body>
</html>