<?php

namespace App\Models;

use CodeIgniter\Model;

class CityList extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'citylists';
    protected $primaryKey           = 'id';
    protected $useSoftDeletes       = false;
    protected $allowedFields        = ['id', 'country', 'city',	'status'];
}
