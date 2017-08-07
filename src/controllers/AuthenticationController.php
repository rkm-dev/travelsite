<?php  
    namespace Travelsite\Controllers;

	use Travelsite\Models\User;
	use Travelsite\Validation\Validator;
	use duncan3dc\Laravel\BladeInstance;
	use Travelsite\Auth\LoggedIn;

	class AuthenticationController extends BaseController
	{
		public function getShowLoginPage()
		{
			//include("../views/login.html");
			//echo $this->twig->render("login.html");

			if(LoggedIn::user())
			{
				header("Location: /");
			}
			else
			{
				echo $this->blade->render("login");
			}
		}

		public function postShowLoginPage()
		{
			//echo "Posted";

			$okay = true;
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];

			//look for the user
			$user = User::where('email', '=', $email)
				  ->first();

			//validate credentials
			if($user != null){
				if(!password_verify($password, $user->password)){
					$okay = false;
				}
			} else {
				$okay = false;
			}

			//if valid, login, if not redirect back to login page with an error
			if($okay) {
				$_SESSION['user'] = $user;
				header("Location: /");
				exit();
			} 
			else 
			{
				$_SESSION['msg'] = ["Invalid login"];
				echo $this->blade->render("login");
				unset($_SESSION['msg']);
				exit();
			}
		}

		public function getLogout() 
		{
			unset($_SESSION['user']);
			session_destroy();
			header("Location: /login");
			exit();
		}

		public function getTestUser()
		{
			//dd($_SESSION['user']);
			
			//$user = $_SESSION['user'];
			//dd($user->first_name, $user->email, $user->testimonials);

			dd(LoggedIn::user(), LoggedIn::user()->first_name);
		}
	}

?>