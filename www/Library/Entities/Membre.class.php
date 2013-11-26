<?php
namespace Library\Entities;

class Membre extends \Library\Entity
{
	
	private $nom,
	$prenom,
	$adresse,
	$ville,
	$cp,
	$tel,
	$email,
	$login,
	$passsword,
	$taille,
	$poids;
	
	public function isValid()
	{
		// A voir
	}
	
	
	/**
	*	Setters
	**/
	
	public function setNom($nom)
	{
		if(empty($nom) || !is_string($nom))
		{
			$this->erreurs[] = self::NOM_INVALIDE;
		}
		else
		{
			$this->nom = $nom;
		}
	}
	
	
	
	/**
	*	Getters
	**/
	public function getNom() { return $this->nom; }
	public function getPrenom() { return $this->prenom; }
	public function getAdresse() { return $this->adresse; }
	public function getVille() { return $this->ville; }
	public function getCp() { return $this->cp; }
	public function getEmail() { return $this->email; }
	public function getLogin() { return $this->login; }
	public function getPassword() { return $this->password; }
	public function getTaille() { return $this->taille; }
	public function getPoids() { return $this->poids; }
			
	
}
?>