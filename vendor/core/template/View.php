<?php 

namespace vendor\core\template;

class View{
	private $params = array(
			//'cache' => $_SERVER['DOCUMENT_ROOT'].'/../cache',
	);
	private $twig;
	public function __construct(){
		$loader = new \Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/../app/views');
		$this->twig = new \Twig_Environment($loader, $this->params);
	}
	
	/**
	 * 
	 * @param $template
	 * @param array $vars
	 * @throws \InvalidArgumentException
	 * @throws Exception
	 */
	public function render($template, $vars = []){
		echo $this->twig->render($template, $vars);
	}
}