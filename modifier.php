<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="dashboard.css">
    
</head>
<body>
 <div class="form">
 <a href="dashboard.php" class="back_btn"> <img src="retour.png">retour</a>
 <h2>modifier votre commande</h2>
 <p class="erreur_message">
 veuillez remplir tous les champs
 </p>
 <form action=""methode="POST">
 <label>Nom</label>
 <input type="text" name="nom">
 <label>Types de lunettes</label>
 <input type="text" name="types de lunettes">
 <label>Prix</label>
 <input type="text" name="prix">
 <label>Image</label>
 <input type="file" name="image">
 <input type="submit" value="modifier" name="button">
 </form>
 
 </div>   
</body>
</html>