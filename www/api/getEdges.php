<?php
	require_once __DIR__ . '/../../libs/libs.php';
	//данные о юзверях, которые участвуют в сервисе
	$edges = getRows("SELECT se.uid_from,se.uid_to FROM social_edges se LEFT JOIN block_cause bc ON (bc.uid=se.uid_from OR bc.uid=se.uid_to) WHERE bc.uid IS NULL", $db);
	
	echo json_encode([
		'status' => 'success',
		'data'   => $edges['array'],
		'error'  => ''
	]);
	