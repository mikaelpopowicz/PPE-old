<?php
namespace Applications\Frontend\Modules\Accueil;

class AccueilController extends \Library\BackController {
	
	public function executeIndex(\Library\HTTPRequest $request) {
		$this->page->addVar('title', 'CoachMe.fr');
		$this->page->addVar('class_accueil', 'active');
	}
	
}
?>