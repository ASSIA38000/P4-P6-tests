<? session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Outils/css/bootstrap.min.css" rel="stylesheet">
    <link href="Outils/css/style.css" rel="stylesheet">
    <title>Page contact</title>
</head>
<body>
  


<?php

if (!isset($_GET['email']) || !isset($_GET['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
	
	// Arrête l'exécution de PHP
    return;
}

?>
<h1>Bonjour <?php echo $_GET['email']; ?> </h1>
    
<h3>Nous avons bien reçu votre message</h3> 
        
<div class="card" id="confirm">
    
    <div class="card-body">
        <h4 class="card-title bg-info text-center">Rappel de vos informations</h4>
        <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
    </div>
</div>




</body>
</html>