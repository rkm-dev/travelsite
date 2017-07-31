<?php

    session_start();

	require("../vendor/autoload.php");

	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();

	$router = new AltoRouter();
?>