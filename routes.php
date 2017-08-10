
<?php

    //test route
	$router->map('GET', '/testhome', 'Travelsite\Controllers\PageController@getShowTestHomePage', 'testhome');
    
    //home page route
    $router->map('GET', '/', 'Travelsite\Controllers\PageController@getShowHomePage', 'home');

    //register route
    $router->map('GET', '/register', 'Travelsite\Controllers\RegisterController@getShowRegisterPage', 'register');
    $router->map('POST', '/register', 'Travelsite\Controllers\RegisterController@postShowRegisterPage', 'register_post');

    //login routes
    $router->map('GET', '/login', 'Travelsite\Controllers\AuthenticationController@getShowLoginPage', 'login');
    $router->map('POST', '/login', 'Travelsite\Controllers\AuthenticationController@postShowLoginPage', 'login_post');

    //logout route
    $router->map('GET', '/logout', 'Travelsite\Controllers\AuthenticationController@getLogout', 'logout');

    //page page-not-found route
    $router->map('GET', '/page-not-found', 'Travelsite\Controllers\PageController@getShow404', '404');

    //generic Route should always be placed last
    $router->map('GET', '/[*]', 'Travelsite\Controllers\PageController@getShowPage', 'generic_page');



    /*
        //getting the usr data from the database
        $router->map('GET', '/testuser', 'Travelsite\Controllers\AuthenticationController@getTestUser', 'testuser');

        //testing mail service
        $router->map('GET', '/testmail', function() {
            
                // // Create the Transport
                // $transport = (new Swift_SmtpTransport(getenv('SMTP_HOST'), getenv('SMTP_PORT')))
                //            ->setUsername(getenv('SMTP_USER'))
                //            ->setPassword(getenv('SMTP_PASS'));

                // // Create the Mailer using your created Transport
                // $mailer = new Swift_Mailer($transport);

                // // Create a message
                // $message = (new Swift_Message('Wonderful Subject'))
                //         ->setFrom(['john@doe.com' => 'John Doe'])
                //         ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
                //         ->setBody('Here is the message itself');

                // // Send the message
                // $result = $mailer->send($message);

            //Travelsite\Email\SendEmail::sendEmail('john@got.com', 'test subject', 'this is the message');
            Travelsite\Email\SendEmail::sendEmail('john@got.com', 'test subject', 'this is the message', 'buddy@india.in');
            echo "Mail sent"; 
        });
    */


    /*
        $router->map('GET', '/slug', function() {
            $slug = new Cocur\Slugify\Slugify();
            echo $slug->slugify('About Travelsite');
        });
    */
    
    
    /*
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
    */
?>