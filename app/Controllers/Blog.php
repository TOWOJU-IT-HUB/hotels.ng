<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $model = $this->blog;;
    
        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];
    
        echo view('parts/header', $data);
        echo view('admin/posts/view', $data);
        echo view('parts/footer', $data);
    }

    public function post($slug=null)
    {
        return $data['news'] = $this->blog->getNews($slug);
    }
}
