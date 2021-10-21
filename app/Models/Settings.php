<?php

namespace App\Models;

use CodeIgniter\Model;

class Settings extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'settings';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'id','site_title', 'rapid_api_key', 'mapbox','site_desc','service_review','post_review','booking_review','publish_review','site_email','site_logo','site_favico','site_mini_logo','site_currency','multilingual','social_login','google_client_id','google_secret_id','custom_css','slider_text','blog_featured_image','contact_us_longitude','contact_us_latitude','contact_us_email','contact_us_phone','contact_us_address','contact_us_desc','contact_us_heading','contact_us_featured_image',
        'google_app_secret', 'google_app_id', 'google_callback', 'google_status', 'facebook_status', 'facebook_callback', 'facebook_app_id', 'facebook_app_secret','baidu_verification_code','yandex_verification_code','bing_verification_code','google_verification_code','enable_sitemap',

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
