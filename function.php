<?php

function check_login($connection)
{

	if(isset($_SESSION['email_id']))
	{

		$email= $_SESSION['email_id'];
		$query = "select * from register_table where email_id = '$email' limit 1";

		$result = mysqli_query($connection,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login_register.php");
	die;

}
