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
	
	public function setPrenom($prenom)
	{
		if(empty($prenom) || !is_string($prenom))
		{
			$this->erreurs[] = self::PRENOM_INVALIDE;
		}
		else
		{
			$this->prenom = $prenom;
		}
	}
	
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;
	}
	
	public function setVille($ville)
	{
		$this->ville = $ville;
	}
	
	public function setCp($cp)
	{
		if(!empty($cp))
		{
			if(!preg_match(self::PREG_CP, $cp))
			{
				$this->erreurs[] = self::CP_INVALIDE;
			}
			else
			{
				$this->cp = $cp;
			}
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