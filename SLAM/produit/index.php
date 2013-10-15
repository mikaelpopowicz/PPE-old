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
$unproduit = new produit(001, 15, 575,50, "Un PC");

//Affichage du résultat de la méthode afficher()
echo $unproduit->afficher();
echo "</br>Total du prix: ".$unproduit->total_prix()." €";
	
?>
</body>
</html>