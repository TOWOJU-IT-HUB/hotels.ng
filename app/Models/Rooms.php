<?php

namespace App\Models;

use CodeIgniter\Model;

class Rooms extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'rooms';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id',	'hotel_id',	'partner_id', 'room_image', 'room_name', 'footage', 'currencycode',	'total_rooms',	'price',	'beds',	'adults',	'childrens',	'facilities',	'checkout',	'checkin',	'created_at',	'updated_at',	'deleted_at',
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';
}
