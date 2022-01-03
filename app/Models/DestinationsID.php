<?php

namespace App\Models;

use CodeIgniter\Model;

class DestinationsID extends Model
{
    protected $table                = 'destinations_id';
    protected $primaryKey           = 'id';
    protected $returnType           = 'array';
    protected $allowedFields        = ['id', 'cc1', 'price_updated', 'latitude', 'longitude', 'lc', 'type', 'country', 'nr_hotels', 'city_name', 'name', 'label', 'rtl', 'image_url', 'dest_id', 'landmark_type', 'dest_type', 'hotels', 'city_ufi', 'region', 'timezone'];
}
