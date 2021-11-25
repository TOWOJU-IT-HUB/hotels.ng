<?php

namespace App\Models;

use CodeIgniter\Model;

class PasswordReset extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'password_reset';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'user_email', 'reset_hash'];
}
