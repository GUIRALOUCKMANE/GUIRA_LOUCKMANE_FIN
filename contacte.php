<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="nymapa">
<?php
     include("navabar.php");
     ?>
     
     
     
     
     
     
<div class="contact-section">
<div class="contact-info">
<div><i class="fas fa-map-marker-alt">adress,city, country</i></div>
<div><i class="fas fa-envelope">guiralouckmane508@gmail.com</i></div>
<div><i class="fas fa-phone"></i>+22675288667</div>
<div><i class="fas fa-clock">5555555555</i></div>
</div>
<div class="contact-form">
<h2>CONTACT US</h2>
<form action="contact"action="" methode="post">
<input type="text" name="name" class="text-box" placeholder="your name" required>
<input type="email" name="email" class="text-box" placeholder="your email" required>
<textarea name="message" rows="5" placeholder="your Message"required></textarea>
<input type="submit" name="submit" class="send-btn" value="send">



</form>


</div>




</div>
 <?php
     include("footer.php");
     ?>   
</body>
</html>