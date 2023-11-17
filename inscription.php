<?php



//la conexion a la basse de donnee
$servername="localhost";
$username= "root";
$password=""; //dans votre cas "" rien
$dbname ="projet_fin";


try{
    $conn = new pdo("mysql:host=$servername;dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "la connexion a ete bien etablie";
}
catch(PDOException $e){
    echo "la connexion a echoué:" .$e->getMessage();
    
}
if(isset($_POST['envoyer']))
{
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email = $_POST['email'];
    $passe = $_POST['passe'];
    $conacte = $_POST['contacte'];
    
    $sql = ("INSERT INTO `inscris` (`nom`, `prenom`,`email`,`passe`,`contacte`,) VALUES (':nom' ,':prenom' ,':email' ,':passe' ,':contacte' ,)" );
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':passe', $passe);
    $stmt->bindParam(':contacte', $conacte);
    
    $stmt->execute();
    //pour changer deux ou plus dans une seul fois clique sur
    
    
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">

</head>
<body>
<Section class="header-section">











  <!-- <marquee behavior=" " direction="" class="vere">BIENVENUE SUR MON SITE WEB DES VERRES</marquee> -->
  
     <?php
     include("navabar.php");
     ?>
     <body>
  <h1 class="mn">envoyer les données vers Mysql database</h1>
<form class="inscription" action="" method="post">
<label for="">Nom:</label>
<input type="text" name="nom">
<label for="">Prenom:</label>
<input type="text" name="prenom">
<label for="">Email:</label>
<input type="text" name="email">
<label for="">password:</label>
<input type="text" name="passe">
<label for="">contact:</label>
<input type="text" name="contacte">


<input type="submit" value="envoyer" name="envoyer">


</form>




 <?php
     include("footer.php");
     ?> 
  
</body>
</html>