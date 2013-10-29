<?php
namespace Library\Models;
 
use \Library\Entities\Cours;
 
class CoursManager_PDO extends CoursManager
{
	public function getList($debut = -1, $limite = -1)
	{
		$sql = 'SELECT c.id_c as id, b.username AS auteur, c.id_m AS matiere, c.titre, c.description, c.contenu, c.dateAjout, c.dateModif
			FROM cours c
			INNER JOIN byte b ON c.id_u = b.id_u
			ORDER BY id_c DESC';
     
		if ($debut != -1 || $limite != -1)
		{
			$sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
		}
     
		$requete = $this->dao->query($sql);
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Cours');
     
		$listeCours = $requete->fetchAll();
     
		foreach ($listeCours as $cours)
		{
			$cours->setDateAjout(new \DateTime($cours->dateAjout()));
			$cours->setDateModif(new \DateTime($cours->dateModif()));
		}
     
		$requete->closeCursor();
     
		return $listeCours;
	}
	
	public function getListOf($matiere)
	{
		$requete = $this->dao->prepare('SELECT c.id_c AS id, b.username AS auteur, c.titre, c.description, c.contenu, c.dateAjout, c.dateModif
			FROM cours c
			INNER JOIN byte b ON c.id_u = b.id_u
			INNER JOIN matiere m ON c.id_m = m.id_m
			WHERE m.libelle = :libelle
			ORDER BY dateAjout DESC');
		$requete->bindValue(':libelle', $matiere, \PDO::PARAM_STR);
		$requete->execute();
		
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Cours');
     
		$listeCours = $requete->fetchAll();
     
		foreach ($listeCours as $cours)
		{
			$cours->setDateAjout(new \DateTime($cours->dateAjout()));
			$cours->setDateModif(new \DateTime($cours->dateModif()));
		}
     
		$requete->closeCursor();
     
		return $listeCours;
	}
	
	
	public function getUnique($id)
	{
		$requete = $this->dao->prepare('SELECT c.id_c AS id, c.id_m AS matiere, b.username AS auteur, c.titre, c.description, c.contenu, c.dateAjout, c.dateModif
			FROM cours c
		 	INNER JOIN byte b ON c.id_u = b.id_u
			INNER JOIN matiere m ON c.id_m = m.id_m
			WHERE c.id_c = :id');
		$requete->bindValue(':id', $id, \PDO::PARAM_INT);
		$requete->execute();
     
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Cours');
     
		if ($cours = $requete->fetch())
		{
			$cours->setDateAjout(new \DateTime($cours->dateAjout()));
			$cours->setDateModif(new \DateTime($cours->dateModif()));
       
			return $cours;
		}
     
		return null;
	}
	
	public function count()
	{
		return $this->dao->query('SELECT COUNT(*) FROM cours')->fetchColumn();
	}
	
	protected function add(Cours $cours)
	  {
	    $requete = $this->dao->prepare('INSERT INTO cours SET auteur = :auteur, titre = :titre, description = :description, contenu = :contenu, dateAjout = NOW(), dateModif = NOW()');
     
	    $requete->bindValue(':titre', $cours->titre());
		$requete->bindValue(':description', $cours->description());
	    $requete->bindValue(':auteur', $cours->auteur());
	    $requete->bindValue(':contenu', $cours->contenu());
     
	    $requete->execute();
	  }
}