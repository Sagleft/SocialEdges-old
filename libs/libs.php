<?php
	include(__DIR__ . '/../config.php');
	$db = @mysql_connect($config['db_host'],$config['db_user'],$config['db_pass']) or die(mysql_error());
	mysql_select_db($config['db_name'], $db);
	mysql_query("SET CHARACTER SET UTF8");
	
	function DataFilter($string) {
		$string = strip_tags($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		$string = trim($string);
		$string = mysql_escape_string($string);
		return $string;
	}
	
	function isJSON($string) {
		return ((is_string($string) && (is_object(json_decode($string)) || is_array(json_decode($string))))) ? true : false;
	}
	
	function getRow($query, $db) {
		$query = mysql_query($query, $db);
		$result = mysql_fetch_row($query);
		return $result[0];
	}
	
	function getRows($query, $db) {
		$arr = array();
		$query = mysql_query($query, $db) or die(mysql_error());
		$count = mysql_num_rows($query);
		if($count > 0) {
			$i = 0;
			while($row = mysql_fetch_assoc($query)) {
				$arr[$i] = $row;
				if(array_key_exists('price', $row)) {
					$arr[$i]['price'] = rtrim(rtrim($arr[$i]['price'], '0'), '.');
				}
				$i++;
			}
		}
		return array(
			'count' => $count,
			'array' => $arr
		);
	}
	
	function cURL($url, $ref, $cookie, $p=null){
		$ch =  curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		if(isset($_SERVER['HTTP_USER_AGENT'])) {
			curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		}
		curl_setopt($ch, CURLOPT_REFERER, $ref);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		if($cookie != '') {
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}
		if ($p) {
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
		}
		$result =  curl_exec($ch);
		curl_close($ch);
		if ($result){
			return $result;
		} else {
			return '';
		}
	}
	
	function validateAddress($address) {
		if(strlen($address) == 34 && $address[0] == 'M') {
			return true;
		} else {
			return false;
		}
	}
	