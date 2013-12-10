<?php
namespace Applications\Frontend;

class FrontendApplication extends \Library\Application {
	
	public function __construct() {
		parent::__construct();
		
		$this->name = "Frontend";
	}
	
	public function run() {
		$controller = $this->getController();
<<<<<<< HEAD
		//$managers = new \Library\Managers('PDO', \Library\PDOFactory::getMysqlConnexion());
=======
>>>>>>> 9ffd87f04cf45e455a7e2e1dc115c4abf14e7c6f
		$controller->execute();
		$this->httpResponse->setPage($controller->page());
		$this->httpResponse->send();
	}
}
?>