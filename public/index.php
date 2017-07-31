<?php
    
    include("../bootstrap/start.php");

    Dotenv::load("../");

    include("../bootstrap/db.php");

	include("../routes.php");

	$match = $router->match();

	list($controller, $method) = explode("@", $match['target']);

	if(is_callable( array($controller, $method) ))
	{
		$object = new $controller();
		call_user_func_array(array($object, $method), array($match['params']));
	}
	else
	{
		echo "Cannot find $controller -> $method";
		exit();
	}
	
?>


