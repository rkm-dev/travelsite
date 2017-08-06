<?php  namespace Travelsite\Controllers;

	use duncan3dc\Laravel\BladeInstance;

	use Travelsite\models\Page;

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

		public function getShowPage()
		{
			//echo "foo";

			$browser_title = "";
            $page_content  = "";
			
			//extract page name from the url
			$uri = explode("/", $_SERVER['REQUEST_URI']); // o/p will be an array ['', 'about', 'hello', ...]

			$target = $uri[1]; //first one [0] will be an empty space since url recieved starts with a slash(/)
			                   //so we chose the [1] second one

			//find a matching page in the database
			$page = Page::where('slug', '=', $target)->get(); //remeber to define the use of Page class from the models above

			//dd($page);

			//look up page content
			foreach ($page as $item) 
			{
				$browser_title = $item->browser_title;
				$page_content  = $item->page_content;
			}

			//checking for $browser_title, $page_content
			if(strlen($browser_title) == 0)
			{
				header("HTTP/1.0 404 Not Found");
				header("Location: /page-not-found");
				exit();
			}

			//pass content to balde template and render the template
			echo $this->blade->render('generic-page', [
				'browser_title' => $browser_title,
				'page_content'  => $page_content
			]);
		}

		public function getShow404() 
		{
			echo $this->blade->render('page-not-found');
		}
	}
?>