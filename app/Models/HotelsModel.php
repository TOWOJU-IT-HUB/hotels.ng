<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelsModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'hotels';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id',	'hotel_id', 'user_id',	'hotel_name', 'url', 'map_preview_url',	'city',	'description',	'country_trans',	'accommodation_type_name',	'review_score',	'checkin',	'checkout',	'currencycode',	'min_total_price',	'hotel_thumbnail',	'latitude',	'longitude',	'created_at',	'updated_at',	'deleted_at'	
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}
