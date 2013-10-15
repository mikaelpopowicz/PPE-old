<html>
<head>
	<meta charset="UTF-8">
	<meta author="Popowicz">
	<meta description="Cours sur la POO en PHP">
</head>
<body>
	<h1>Stock produit</h1>
	
<?php
include 'produit.class.php';

//Créer un objet de la classe
$unproduit = new produit(001, "Un PC", 575,50, 15);

//Affichage du résultat de la méthode afficher()
echo $unproduit->afficher();
	
?>
</body>
</html>