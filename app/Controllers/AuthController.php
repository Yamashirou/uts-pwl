<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function generatepassword()
    {
        echo password_hash('admin123', PASSWORD_DEFAULT) . '<br>';
        echo password_hash('yamashirou', PASSWORD_DEFAULT) . '<br>';
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Simulasi data user (bisa diganti dengan ambil dari database)
            $users = [
                [
                    'username' => 'admin',
                    'password' => '$2y$10$GRuSpcL/0s2jDx/JFPC1PuIkCDGgXaJ/ijPE6qvvvvRO/tVs06CjS', // admin123
                    'role'     => 'admin'
                ],
                [
                    'username' => 'yama',
                    'password' => '$2y$10$xLW6.le69pCwN1pOjpnQk.IgquSkSOXPf1KDXkMfK7E7q4DyXw6S2', // yamashirou
                    'role'     => 'user'
                ]
            ];

            // Cek user dari daftar
            foreach ($users as $user) {
                if ($username === $user['username']) {
                    if (password_verify($password, $user['password'])) {
                        session()->set([
                            'username'    => $user['username'],
                            'role'        => $user['role'],
                            'isLoggedIn'  => true
                        ]);

                        // Redirect berdasarkan role
                        if ($user['role'] === 'admin') {
                            return redirect()->to(base_url('admin'));
                        } elseif ($user['role'] === 'user') {
                            return redirect()->to(base_url('user'));
                        }
                    } else {
                        session()->setFlashdata('failed', 'Username & Password Salah');
                        return redirect()->back();
                    }
                }
            }

            session()->setFlashdata('failed', 'Username tidak ditemukan');
            return redirect()->back();
        } else {
            return view('v_login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
