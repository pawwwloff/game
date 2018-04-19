<?php 

namespace app\controllers;

use vendor\core\base\Controller;

class MainController extends Controller{

	public function indexAction(){
		if(!$this->auth->authorized()){
		$this->view->render('login.html', array('title'=>'Главная страница'));
		}else{
			$this->view->render('index.html', array('title'=>'Главная страница'));
		}
		print_r($this->request);
	}

	
}