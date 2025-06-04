<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $role = session()->get('role');
        if ($role === 'admin') {
            return view('v_dashboard_admin');
        } elseif ($role === 'guest') {
            return view('v_dashboard_user');
        } 
    }
}
