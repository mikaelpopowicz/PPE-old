<?php
namespace Applications\Frontend\Modules\Cours;
 
class CoursController extends \Library\BackController {
	
	public function executeIndex(\Library\HTTPRequest $request) {
		$nombreCours = $this->app->config()->get('nombre_cours');
		
		// On ajoute une définition pour le titre.
		$this->page->addVar('title', 'Mika-p - Accueil');
		$this->page->addVar('class_accueil', 'active');
		
		// On récupère le manager des cours.
		$manager = $this->managers->getManagerOf('Cours');
		$listeCours = array($manager->getList(0, $nombreCours));
		
		// On ajoute le nom de la matière correspondante pour les liens
		for ($i = 0; $i < count($listeCours); $i++) {
			$listeCours[$i][] = $this->managers->getManagerOf('Matiere')->getUnique($listeCours[$i][0]->matiere())->libelle();
			$listeCours[$i][] = $this->managers->getManagerOf('Matiere')->getUnique($listeCours[$i][0]->matiere())->icon();
		}

		// On ajoute la variable $listeCours à la vue.
		$this->page->addVar('listeCours', $listeCours);
	}
	
	public function executeList_cours(\Library\HTTPRequest $request)
	{
		$cours = $this->managers->getManagerOf('Cours')->getListOf($request->getData('libelle'));
     	
		
		$this->page->addVar('title', 'Mika-p - '.$request->getData('libelle'));
		$this->page->addVar('class_cours', 'active');
		$this->page->addVar('class_'.$request->getData('libelle'), 'active');
		$this->page->addVar('matiere', $request->getData('libelle'));
		$this->page->addVar('listeCours', $cours);
	}
	
	public function executeList_matiere(\Library\HTTPRequest $request) {
		$matieres = $this->managers->getManagerOf('Matiere')->getList();
		//echo '<pre>';print_r($matieres);echo '</pre>';
		$this->page->addVar('title', 'Mika-p - Matières');
		$this->page->addVar('class_cours', 'active');
		$this->page->addVar('listeMatiere', $matieres);
	}
	
	public function executeShow(\Library\HTTPRequest $request)
	{
		$matiere = $this->managers->getManagerOf('Matiere')->getByName($request->getData('libelle'));
		$cours = $this->managers->getManagerOf('Cours')->getUnique($request->getData('id'));
		
		//echo '<pre>';print_r($matiere);echo '</br>';print_r($cours);echo '</pre>';
		if (empty($matiere) || empty($cours) || $matiere['id'] != $cours['matiere']) {
			$this->app->httpResponse()->redirect404();
		}
		
		$this->page->addVar('title', $cours->titre());
		$this->page->addVar('class_cours', 'active');
		$this->page->addVar('class_'.$request->getData('libelle'), 'active');
		$this->page->addVar('matiere', $request->getData('libelle'));
		$this->page->addVar('cours', $cours);
		$this->page->addVar('comments', $this->managers->getManagerOf('Comments')->getListOf($cours->id()));
	}
}