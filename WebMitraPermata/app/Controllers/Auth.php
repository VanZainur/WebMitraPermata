<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Jika sudah login, redirect
        if (session()->get('logged_in')) {
            $role = session()->get('role');
            if ($role === 'superadmin') {
                return redirect()->to('/admin/super');
            }
            return redirect()->to('/admin');
        }

        return view('admin/login');
    }

    public function loginProcess()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }

        // PERBANDINGAN PASSWORD LANGSUNG (tanpa hash)
        if ($user['password'] !== $password) {
            return redirect()->back()->with('error', 'Password salah');
        }

        // Simpan ke session
        $session->set([
            'logged_in' => true,
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'nama'      => ucfirst(str_replace('admin_', '', $user['username'])),
            'role'      => $user['role'],
            'jenjang'   => $user['jenjang']
        ]);
        
        // Arahkan ke dashboard
        if ($user['role'] === 'superadmin') {
            return redirect()->to('/admin/super');
        }

        return redirect()->to('/admin');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'))->with('success', 'Anda telah berhasil logout');
    }
}