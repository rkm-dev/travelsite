<?php  namespace Travelsite\Controllers;

	use Travelsite\Models\User;
	use Travelsite\Validation\Validator;
	use Travelsite\Auth\LoggedIn;
	use duncan3dc\Laravel\BladeInstance;
	use Travelsite\Email\SendEmail;
	use Travelsite\Models\UserPending;

	class RegisterController extends BaseController
	{
		public function getShowRegisterPage()
		{
			//include("../views/register.html");
			//echo $this->twig->render("register.html");

			if(LoggedIn::user())
			{
				header("Location: /");
			}else{
				echo $this->blade->render('register');
			}
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

				$user->first_name = $_REQUEST['first_name'];
				$user->last_name  = $_REQUEST['last_name'];
				$user->email      = $_REQUEST['email'];
				$user->password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$user->save();

				// echo "<pre>";
				// var_dump($user);
				// echo "</pre>";
				// echo "<br> Posted";

				$token = md5(uniqid(rand(), true)) . md5(uniqid(rand(), true));
				$user_pending = new UserPending;
				$user_pending->token = $token;
				$user_pending->user_id = $user->id;
				$user_pending->save();	

				$message = $this->blade->render('emails.welcome-email', ['token' => $token]);
				SendEmail::sendEmail($user->email, "Greetings From Travelsite", $message);

				$_SESSION['successmsg'] = "<p> You are almost done, Please check-in and verify your email address to complete your registration </p>";
				echo $this->blade->render('login');
				unset($_SESSION['successmsg']);
			exit();
		}
	}
?>