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

        // DEBUG: Tampilkan input (HAPUS SETELAH BERHASIL!)
        echo "Username input: '$username'<br>";
        echo "Password input: '$password'<br><br>";

        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            echo "User tidak ditemukan!<br>";
            die();
            // return redirect()->back()->with('error', 'Username tidak ditemukan');
        }

        // DEBUG: Tampilkan data user
        echo "User ditemukan:<br>";
        echo "<pre>";
        print_r($user);
        echo "</pre><br>";

        echo "Hash dari DB: {$user['password']}<br>";
        echo "Panjang hash: " . strlen($user['password']) . "<br><br>";

        // Test password verify
        $verify_result = password_verify($password, $user['password']);
        echo "password_verify result: " . ($verify_result ? 'TRUE ✅' : 'FALSE ❌') . "<br><br>";

        if (!$verify_result) {
            // Test manual berbagai password
            echo "<strong>Testing berbagai password:</strong><br>";
            $test_passwords = ['12345', 'admin123', 'password', 'admin'];
            foreach ($test_passwords as $test) {
                $result = password_verify($test, $user['password']);
                echo "- '$test': " . ($result ? '✅ COCOK' : '❌ SALAH') . "<br>";
            }
            die();
            // return redirect()->back()->with('error', 'Password salah');
        }

        // Simpan ke session (TAMBAHKAN 'nama')
        $session->set([
            'logged_in' => true,
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'nama'      => ucfirst(str_replace('admin_', '', $user['username'])), // ← TAMBAH INI
            'role'      => $user['role'],
            'jenjang'   => $user['jenjang']
        ]);

        echo "Login berhasil! Redirect...<br>";
        
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