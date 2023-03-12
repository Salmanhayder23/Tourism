<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if ($password != $confirm_password) {
		echo 'Password and Confirm Password do not match!';
	} else {
		$customer = array(
			'name' => $name,
			'email' => $email,
			'password' => $password
		);

		$customer_json = json_encode($customer);

		file_put_contents('customers.json', $customer_json);

		echo 'Registration Successful!';
	}
}
?>







