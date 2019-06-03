<?php
	require_once __DIR__ . '/../../libs/libs.php';
	//данные о юзверях, которые участвуют в сервисе
	$users = getRows("SELECT u.id,u.login,MD5(u.email) AS hash,u.cached_FAI AS FAI FROM users u LEFT JOIN block_cause bc ON bc.uid=u.id WHERE u.freeland_status='citizen' AND u.is_edge='1' AND bc.uid is NULL", $db);
	shuffle($users['array']);
	
	echo json_encode([
		'status' => 'success',
		'data'   => $users['array'],
		'error'  => ''
	]);
	