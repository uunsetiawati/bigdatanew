<?php

namespace App\Controllers;

use App\Models\User_m;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
        // $data=['title'=>'home'];
        // return $this->renderPage('home', $data);
    }

    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('login');
    }

    public function masuk()
    {
        $session = session();
        $model = new User_m();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Hash password input dengan SHA-1
        $hashedPassword = sha1($password);

        // Cari user berdasarkan username
        $user = $model->where('email', $username)->first();

        // Verifikasi
        if ($user && $user['password'] === $hashedPassword) {
            session()->set([
                'email' => $user['email'],
                'isLoggedIn' => true,
                'user_id'    => $user['id'],
                'nama'       => $user['nama'], // ← pastikan ini ada dan benar
                'username'   => $user['username'],
                'role'       => $user['role'],
            ]);
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function dashboard()
    {

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Beranda',
            'nama' => session()->get('nama'),
        ];
        return $this->renderPage('admin/dashboard', $data);
        
    }
}
