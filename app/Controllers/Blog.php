<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {  
        $data = [
            'news'  => $this->blog->where('status', 'published')->paginate(12),
            'pager' => $this->blog->pager,
            'title' => 'News archive',
        ];
    
        echo view('parts/header', $data);
        echo view('admin/posts/view');
        echo view('parts/footer');
    }

    public function post($slug=null)
    {
        $data['news']   = $this->blog->getNews($slug);
		$data['title']  = $data['news']['title'];
    
        echo view('parts/header', $data);
        echo view('blog_post');
        echo view('parts/footer');
    }
}
