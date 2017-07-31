<?php  namespace Travelsite\Controllers;

	use Travelsite\Models\User;
	use Travelsite\Validation\Validator;

	class RegisterController extends BaseController
	{
		public function getShowRegisterPage()
		{
			//include("../views/register.html");
			//echo $this->twig->render("register.html");

			echo $this->blade->render('register');
		}


		public function postShowRegisterPage()
		{
			//advanced data validation
			$validation_data = [
			 	"first_name"   => "min:3",
			 	"last_name"    => "min:3",
			 	"email"        => "email|equalTo:verify_email",
			 	"verify_email" => "email",
			 	"password"     => "min:3|equalTo:confirm_password",
			 	
			 	//"email"        => "equalTo:verify_email",
			 	//"password"     => "equalTo:confirm_password"
			];

			$validator = new Validator;

			$errors = $validator->isValid($validation_data);

			//print_r($errors);  //dumping the errors array in the page and displaying it
			//exit();

			//creating a response in correspond to the errors
			if(sizeof($errors) > 0)
			{
				$_SESSION['msg'] = $errors;
				//header("Location: /register");
				//echo  $this->twig->render('register.html', ['errors' => $errors]);

				//echo $this->blade->render('register', ['errors' => $errors]);

				echo $this->blade->render('register');
				unset($_SESSION['msg']);
				exit();
			}

			//data saving into database;
				$user = new User;

				$user->id = 11;
				$user->first_name = $_REQUEST['first_name'];
				$user->last_name  = $_REQUEST['last_name'];
				$user->email      = $_REQUEST['email'];
				$user->password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$user->save();

				echo "<pre>";
				var_dump($user);
				echo "</pre>";

				echo "<br> Posted";
			exit;
		}


		public function getShowLoginPage()
		{
			//include("../views/login.html");
			//echo $this->twig->render("login.html");

			echo $this->blade->render("login");
		}
	}

?>