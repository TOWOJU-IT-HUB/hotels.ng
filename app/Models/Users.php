<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users';
    protected $allowedFields = [
		'id', 'email', 'username', 'password', 'profile_image', 'fullname', 'firstname', 'lastname', 'address', 'role', 'phone', 'created_at', 'updated_at', 'deleted_at' 
	];

    protected $useTimestamps 	= 	true;
    protected $createdField  	= 	'created_at';
    protected $updatedField  	= 	'updated_at';
    protected $deletedField  	= 	'deleted_at';
    protected $beforeInsert		=	['beforeInsert'];
	protected $beforeUpdate		=	['beforeUpdate'];
	protected $useSoftDeletes   = true;

	protected function beforeInsert(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function beforeUpdate(array $data){
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function passwordHash(array $data){
		if (isset($data['data']['password'])) {
			$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		}
		return $data;
	}
}
