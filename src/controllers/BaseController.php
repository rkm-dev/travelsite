<?php  namespace Travelsite\Controllers;

	use Travelsite\Validation\Validator;
	use duncan3dc\Laravel\BladeInstance;

	class BaseController 
	{
		// protected $loader;
		// protected $twig;

		// public function __construct()
		// {
		// 	$this->loader = new \Twig_loader_Filesystem("../views");
		// 	$this->twig   = new \Twig_Environment($this->loader, array(
		// 	    'cache' => false, 'debug' => true
		// 	));
		// }

		protected $blade;

		public function __construct() 
		{
			$this->blade = new BladeInstance("../views", "../cache/views");
		}

	}

?>