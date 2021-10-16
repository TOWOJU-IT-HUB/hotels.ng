<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return redirect('dashboard');
    }
    public function dashboard()
    {
        echo view('parts/dashboard/header');
        echo view('customers/dashboard');
        echo view('parts/dashboard/footer');
    }
}
