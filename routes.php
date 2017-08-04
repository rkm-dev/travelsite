
<?php

	$router->map('GET', '/testhome', 'Travelsite\Controllers\PageController@getShowTestHomePage', 'testhome');
    
    $router->map('GET', '/', 'Travelsite\Controllers\PageController@getShowHomePage', 'home');

    $router->map('GET', '/register', 'Travelsite\Controllers\RegisterController@getShowRegisterPage', 'register');

    $router->map('POST', '/register', 'Travelsite\Controllers\RegisterController@postShowRegisterPage', 'register_post');

    $router->map('GET', '/login', 'Travelsite\Controllers\RegisterController@getShowLoginPage', 'login');

    $router->map('GET', '/about', 'Travelsite\Controllers\PageController@getShowPage', 'generic_page');

    $router->map('GET', '/test', function() {
    	$user = Travelsite\models\User::find(1);
    	//dd($user);

    	$testimonials = $user->testimonials()->get();
    	//dd($testimonials);

    	//$testimonials = Travelsite\models\User::find(1)->testimonials()->get();
    	//dd($testimonials);

    	echo $user->first_name;
    	echo "<br>";
    	print_r($testimonials);

    });
?>