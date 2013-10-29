<?php
namespace Library\Entities;
 
class Comment extends \Library\Entity
{
	protected $cours,
	$auteur,
	$contenu,
	$email,
	$date;
   
	const AUTEUR_INVALIDE = 1;
	const CONTENU_INVALIDE = 2;
	const EMAIL_INVALIDE = 3;
   
	public function isValid()
	{
		return !(empty($this->auteur) || empty($this->contenu) || empty($this->email));
	}
   
	// SETTERS
   
	public function setCours($cours)
	{
		$this->cours = (int) $cours;
	}
   
	public function setAuteur($auteur)
	{
		if (!is_string($auteur) || empty($auteur))
		{
			$this->erreurs[] = self::AUTEUR_INVALIDE;
		}
		else
		{
			$this->auteur = $auteur;
		}
	}
   
	public function setContenu($contenu)
	{
		if (!is_string($contenu) || empty($contenu))
		{
			$this->erreurs[] = self::CONTENU_INVALIDE;
		}
		else
		{
			$this->contenu = $contenu;
		}
	}
	
	public function setEmail($email)
	{
		if (!is_string($email) || empty($email))
		{
			$this->erreurs[] = self::CONTENU_INVALIDE;
		}
		else
		{
			$this->contenu = $contenu;
		}
	}
   
	public function setDate(\DateTime $date)
	{
		$this->date = $date;
	}
   
	// GETTERS
   
	public function cours()
	{
		return $this->cours;
	}
   
	public function auteur()
	{
		return $this->auteur;
	}
   
	public function contenu()
	{
		return $this->contenu;
	}
	
	public function email()
	{
		return $this->email;
	}
   
	public function date()
	{
		return $this->date;
	}
}