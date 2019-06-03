<?php
	include(__DIR__ . '/../vendor/autoload.php');
	$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates/');
	$twig = new Twig_Environment($loader, array(
		'cache'       => __DIR__ . '/../cache',
		'auto_reload' => true
	));
	exit($twig->render($data['tag'].".tmpl", ['page' => $data]));
	