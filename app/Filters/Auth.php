<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $role = $session->get('role');
        // Do something here
        if (!session()->has('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }

        if ($arguments && !in_array($role, $arguments)) {
            // Redirect ke dashboard sesuai role
            if ($role !== 'admin') {
                return redirect()->to('/user');
            } elseif ($role !== 'user') {
                return redirect()->to('/admin');
            }
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
