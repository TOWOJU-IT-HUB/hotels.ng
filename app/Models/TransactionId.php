<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionId extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transaction_id';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
            'id', 'payment_id', 'token', 'order_id', 'created_at', 'updated_at', 'deleted_at'
        ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
