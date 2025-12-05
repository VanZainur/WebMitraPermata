<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    // Untuk tampil di halaman utama
    public function getGuruByJenjang($jenjang)
    {
        return $this->guruModel->where('jenjang', $jenjang)->findAll();
    }

    // Method untuk admin CRUD (opsional)
    public function index()
    {
        $data = [
            'title' => 'Daftar Guru',
            'guru' => $this->guruModel->findAll()
        ];
        return view('admin/guru/index', $data);
    }

    public function create()
    {
        return view('admin/guru/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        
        $rules = [
            'jenjang' => 'required|in_list[smk,smp,sd,tk]',
            'nama' => 'required|min_length[3]|max_length[150]',
            'jabatan' => 'required|max_length[150]',
            'foto' => 'uploaded[foto]|max_size[foto,2048]|is_image[foto]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $file = $this->request->getFile('foto');
        $jenjang = strtolower($this->request->getPost('jenjang'));
        
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . '../public/uploads/' . $jenjang . '/guru', $newName);
            
            $data = [
                'jenjang' => $jenjang,
                'nama' => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'foto' => $newName
            ];

            $this->guruModel->save($data);
            return redirect()->to('/admin/guru')->with('success', 'Data guru berhasil ditambahkan');
        }

        return redirect()->back()->with('error', 'Gagal upload foto');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Guru',
            'guru' => $this->guruModel->find($id)
        ];
        
        if (!$data['guru']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        return view('admin/guru/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        
        $rules = [
            'jenjang' => 'required|in_list[smk,smp,sd,tk]',
            'nama' => 'required|min_length[3]|max_length[150]',
            'jabatan' => 'required|max_length[150]',
            'foto' => 'max_size[foto,2048]|is_image[foto]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $guru = $this->guruModel->find($id);
        $jenjang = strtolower($this->request->getPost('jenjang'));
        
        $data = [
            'jenjang' => $jenjang,
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan')
        ];

        $file = $this->request->getFile('foto');
        
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus foto lama
            if ($guru['foto'] && file_exists(WRITEPATH . '../public/uploads/' . $guru['jenjang'] . '/guru/' . $guru['foto'])) {
                unlink(WRITEPATH . '../public/uploads/' . $guru['jenjang'] . '/guru/' . $guru['foto']);
            }
            
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . '../public/uploads/' . $jenjang . '/guru', $newName);
            $data['foto'] = $newName;
        }

        $this->guruModel->update($id, $data);
        return redirect()->to('/admin/guru')->with('success', 'Data guru berhasil diupdate');
    }

    public function delete($id)
    {
        $guru = $this->guruModel->find($id);
        
        if ($guru) {
            // Hapus foto
            if ($guru['foto'] && file_exists(WRITEPATH . '../public/uploads/' . $guru['jenjang'] . '/guru/' . $guru['foto'])) {
                unlink(WRITEPATH . '../public/uploads/' . $guru['jenjang'] . '/guru/' . $guru['foto']);
            }
            
            $this->guruModel->delete($id);
            return redirect()->to('/admin/guru')->with('success', 'Data guru berhasil dihapus');
        }
        
        return redirect()->to('/admin/guru')->with('error', 'Data guru tidak ditemukan');
    }
}