<?php
namespace Applications\Frontend\Modules\Connexion;
 
class ConnexionController extends \Library\BackController
{
	public function executeIndex(\Library\HTTPRequest $request)
	{
		$this->page->addVar('title', 'Connexion');
		
		/*
		if ($request->postExists('login'))
		{
			$login = $request->postData('login');
			$password = $request->postData('password');
       
			if ($login == $this->app->config()->get('login') && $password == $this->app->config()->get('pass'))
			{
				$this->app->user()->setAuthenticated(true);
				$this->app->httpResponse()->redirect('.');
			}
			else
			{
				$this->app->user()->setFlash('<script>noty({type: "warning", layout: "topCenter", text: "<strong>Attention !</strong> Vous devez sélectionner au moins un salarié pour le supprimer"});</script>');
			}
		}
		*/
	}
}