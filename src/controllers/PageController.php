<?php  namespace Travelsite\Controllers;

	use duncan3dc\Laravel\BladeInstance;

	class PageController extends BaseController
	{
		public function getShowTestHomePage()
		{
			//include("../views/home.php");
			//echo $this->twig->render('home.html');

			$_SESSION['testsession'] = "<strong> This is Bolded </strong>"; 

			echo $this->blade->render('testhome', ['test' => 'Hello, again!']);
		}


		public function getShowHomePage()
		{
			echo $this->blade->render('home');
		}

	}

?>