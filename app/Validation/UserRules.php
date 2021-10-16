<?php namespace App\Validation;
use App\Models\Users;

/**
 * Custom User Validation class.
 */
class UserRules
{
	
	public function ValidateUser(string $str, string $fields, array $data)
	{
		$model = new Users;
		$user = $model->where('email', $data['email'])->first();

		if (!$user){
			return false;
		}

		return password_verify($data['password'], $user['password']);

	}
}