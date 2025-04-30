<?php

namespace App\Controllers;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home');
    }
}
