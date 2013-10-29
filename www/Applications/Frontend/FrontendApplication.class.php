<?php
namespace Applications\Frontend;

class FrontendApplication extends \Library\Application {
	
	public function __construct() {
		parent::__construct();
		
		$this->name = "Frontend";
	}
	
	public function run() {
		$controller = $this->getController();
		$managers = new \Library\Managers('PDO', \Library\PDOFactory::getMysqlConnexion());
		$manager = $managers->getManagerOf('Matiere');
		$listMatieres = $manager->getList();
		$controller->page()->addVar('matieres', $listMatieres);
		foreach ($listMatieres as $key) {
			$controller->page()->addVar('class_'.$key['libelle'], "");
		}
		$controller->execute();
		$this->httpResponse->setPage($controller->page());
		$this->httpResponse->send();
	}
}
?>