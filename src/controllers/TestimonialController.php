<?php
	namespace Travelsite\controllers;

	use Travelsite\Models\User;
	use Travelsite\Validation\Validator;
	use duncan3dc\Laravel\BladeInstance;
	use Travelsite\Auth\LoggedIn;
	use Travelsite\Models\Testimonial;

	class TestimonialController extends BaseController
	{
		public function getShowTestimonials()
		{
			$testimonials = Testimonial::all();

			echo $this->blade->render('testimonials', [
				'testimonials' => $testimonials,
			]);
		}

		public function getShowAdd()
		{
			if(LoggedIn::user())
			{
				echo $this->blade->render("add-testimonial");
			}
			else
			{
				header("Location: /");
			}
		}

		public function postShowAdd()
		{ 
			$errors = [];
			
			//advanced data validation
			$validation_data = [
			 	"title"       => "min:3",
			 	"testimonial" => "min:10",
			];

			$validator = new Validator;

			$errors = $validator->isValid($validation_data);

			//creating a response in correspond to the errors
			if(sizeof($errors) > 0)
			{
				$_SESSION['msg'] = $errors;
				echo $this->blade->render('add-testimonial');
				unset($_SESSION['msg']);
				exit();
			}

			$testimonial = new Testimonial;
			$testimonial->title = $_REQUEST['title'];
			$testimonial->testimonial = $_REQUEST['testimonial'];
			$testimonial->user_id = LoggedIn::user()->id;
			$testimonial->save();

			$_SESSION['successmsg'] = "<p> Testimonial Submitted, Care for another one! </p>";
			echo $this->blade->render("add-testimonial");
			unset($_SESSION['successmsg']);
			exit();
		}
	}
?>