<?php

namespace App\Models;

use CodeIgniter\Model;

class Apartments extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'apartments';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id',	'title',	'permalink',	'content',	'short_desc',	'is_featured',	'status',	'rating',	'property_type',	'booking_type',	'address',	'longitude',	'latitude',	'price',	'external_booking',	'check_in',	'check_out',	'min_day',	'min_stay',	'video_url',	'enable_cancellation',	'cancellation_days',	'created_at',	'updated_at',	'deleted_at'
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
