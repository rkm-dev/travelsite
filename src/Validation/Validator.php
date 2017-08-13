<?php namespace Travelsite\Validation;

    use Respect\Validation\Validator as Valid;

	class Validator 
	{
		public function isValid($validation_data) 
		{
			$errors =[];

			foreach ($validation_data as $name => $value) 
			{	
				$rules = explode("|", $value);

				foreach ($rules as $rule) 
				{
					$exploded = explode(":", $rule);
					
					switch ($exploded[0]) 
					{
						case 'min':
							$min = $exploded[1]; //which will be 3
							if(Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false)
							{
								$errors[] = $name ." must be atleast ". $min ." characters long";
							}
							break;

						case 'email':
						    if(Valid::email()->Validate($_REQUEST[$name]) == false)
						    {
						    	$errors[] = $name ." must be a valid email address";
						    }
							break;

						case 'equalTo':
						    if(Valid::equals($_REQUEST[$name])->Validate($_REQUEST[ $exploded[1] ]) == false) 
						    {
						     	$errors[] = $name." value does not match verification value!";
						    }
						    break;

						case 'unique':
							$model = "Travelsite\\models\\" . $exploded[1];
							$table = new $model;
							$results = $table::where($name, '=', $_REQUEST[$name])->get();
							foreach ($results as $item) {
								$errors[] = $_REQUEST[$name] . " is already registered";
							}
							break;

						default:
							//do nothing
					}
				}
			}

			return $errors;
		}
	}

?> 