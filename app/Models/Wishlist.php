<?php

namespace App\Models;

use CodeIgniter\Model;

class Wishlist extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'wishlist';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id',	'user_id',	'hotel_id',	'city', 'hotel_thumbnail',	'hotel_name',	'country_trans', 'accommodation_type_name', 'address', 'review_score', 'checkin', 'checkout',	'currency',	'price',
    ];

}
