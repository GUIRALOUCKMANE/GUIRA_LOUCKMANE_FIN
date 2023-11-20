<?php
try
{
    $bdd=new PDO('mysql:host=localhost;dbname=projet_fin','root','');
}
catch(Exception $e)
{
    die("Erreur :" .$e->getMessage());
}
    

 include("navabar.php");

//  @$nom=$_POST['nom'];
//  @$prenom=$_POST['prenom'];
 @$email=$_POST['email'];
 @$code=$_POST['code'];
 
 @$submit=$_POST['submit'];
 @$erreur="";
 @$err="";

 

if (isset($submit)) {

   $add = 'utilisateur';
    
    if ( empty($email) || empty($code)) {

        $erreur="Veuillez remplire tous les champs svp!";
          
    }
    else{
        
        
        $info_users=$bdd->query(" INSERT INTO inscris(email, code) VALUES ('$email','$code',)");
        if ($info_users !== false) {
            if ($info_users ['code'] == $code AND $info_users['role'] == 'administrateur') {
                header('location:dashboard.php');
            }
            elseif (($info_users['code'] == $code AND $info_users['role'] == 'utilisateur') ){
            
            header('location:produit.php');
        } 
            else{
            $err="echec d'enregistrement!";
        }

    }
    else{
        $err="Email ou code incorrect!";
    }
}

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="inscris.css">


</head>
<body>
<Section class="header-section">
    <div class="contenaire">
        <button class="but"><a href="connexion.php">Se connecter</a></button>

        <h1 class="envoi"></h1>
        <form action="" method="POST">
            <!-- <input type="text" name="nom"  placeholder="Entrez votre nom">
            <input type="text" name="prenom" placeholder="Entrez votre prenom"> -->
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="code" placeholder="Entrez votre mot de passe">
            <input type="submit" value="VALIDER" name="submit" class="submit">

            <div><?php echo $err?></div>
            <div style="color: red;     font-family:Arial, sans-serif;"><?php echo $erreur?></div>
        </form>
        <!-- <img src="image/img4.png" alt="" width="200px" >
         -->
    </div>
    
















  <!-- <marquee behavior=" " direction="" class="vere">BIENVENUE SUR MON SITE WEB DES VERRES</marquee> -->
  
     
    
  




 <?php
     include("footer.php");
     ?> 
  
</body>
</html>








































