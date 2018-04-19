<?php 

namespace vendor\core\base;

use vendor\core\DI;
use vendor\core\auth\Auth;

abstract class Controller{
	protected $data = [];
	protected $di;
	protected $request;
	protected $view;
	protected $auth;
	
	public function __construct(DI $di, $data){
		$this->auth = new Auth();
		$this->data = $data;
		$this->di = $di;
		$this->request = $this->di->get('request');
		$this->view = $this->di->get('view');
	}
}