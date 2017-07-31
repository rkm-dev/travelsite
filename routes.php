
<?php

	$router->map('GET', '/testhome', 'Travelsite\Controllers\PageController@getShowTestHomePage', 'testhome');
    
    $router->map('GET', '/', 'Travelsite\Controllers\PageController@getShowHomePage', 'home');

    $router->map('GET', '/register', 'Travelsite\Controllers\RegisterController@getShowRegisterPage', 'register');

    $router->map('POST', '/register', 'Travelsite\Controllers\RegisterController@postShowRegisterPage', 'register_post');

    $router->map('GET', '/login', 'Travelsite\Controllers\RegisterController@getShowLoginPage', 'login');

?>