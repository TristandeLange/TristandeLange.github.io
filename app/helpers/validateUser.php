
<?php

function validateUser($user)
{

	$errors = array();

	if(empty($user['username']))
	{
		array_push($errors, 'Username is required');
	}
	if(empty($user['email']))
	{
		array_push($errors, 'Email is required');
	}
	if(empty($user['password']))
	{
		array_push($errors, 'Password is required');
	}
	if(empty($user['passwordConf']))
	{
		array_push($errors, 'Password Confirmation is required');
	}
	if($user['password'] !== $user['passwordConf'])
	{
		array_push($errors, 'Passwords need to match');
	}


	$existingUser = selectOne('users', ['email' => $user['email']]);
	if ($existingUser)
	{
		if(isset($user['update-user']) && $existingUser['id'] != $user['id'])
		{
			array_push($errors, 'User with this email already exists');
		}
		
		if(isset($user['create-admin']))
		{
			array_push($errors, 'User with this email already exists');
		}
	}



	return $errors;
}

function validateLogin($user)
{

	$errors = array();

	if(empty($user['username']))
	{
		array_push($errors, 'Username is required');
	}
	if(empty($user['password']))
	{
		array_push($errors, 'Password is required');
	}

	return $errors;
}


