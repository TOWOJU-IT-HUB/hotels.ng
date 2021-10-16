<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'blog';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'status', 'slug', 'title', 'body', 'categories', 'image', 'short_desc', 'tags', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}
