<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function profil(): string
    {
        return view('profil');
    }

    public function kontak(): string
    {
        return view('kontak');
    }

    public function struktur(): string
    {
        return view('struktur');
    }

    public function fasilitas(): string
    {
        return view('fasilitas');
    }

    public function kemitraan(): string
    {
        return view('kemitraan');
    }

    public function kegiatan(): string
    {
        return view('kegiatan');
    }

    public function prestasi(): string
    {
        return view('prestasi');
    }

    public function berita(): string
    {
        return view('berita');
    }

    public function akademik(): string
    {
        return view('akademik');
    }

    // Method SMK: kirim data berita, kegiatan, DAN prestasi ke view
    public function SMK(): string
        {
            $beritaModel = new BeritaModel();
            $kegiatanModel = new KegiatanModel();
            $prestasiModel = new PrestasiModel();

            $data = [
                'berita' => $beritaModel->orderBy('tanggal', 'DESC')->findAll(3),      // 6 berita terbaru
                'kegiatan' => $kegiatanModel->orderBy('tanggal', 'DESC')->findAll(3),  // 3 kegiatan terbaru
                'prestasi' => $prestasiModel->orderBy('tanggal', 'DESC')->findAll(6)   // 6 prestasi terbaru
            ];

            return view('smk/index', $data);
        }
    // Method SMP: juga kirim data yang sama
    public function SMP(): string
    {
        $beritaModel = new BeritaModel();
        $kegiatanModel = new KegiatanModel();
        $prestasiModel = new PrestasiModel();

        $data = [
            'berita' => $beritaModel->orderBy('tanggal', 'DESC')->findAll(),
            'kegiatan' => $kegiatanModel->orderBy('tanggal', 'DESC')->findAll(),
            'prestasi' => $prestasiModel->orderBy('tanggal', 'DESC')->findAll()
        ];

        return view('smp/index', $data);
    }

    public function SD(): string
    {
        $beritaModel = new BeritaModel();
        $kegiatanModel = new KegiatanModel();
        $prestasiModel = new PrestasiModel();

        $data = [
            'berita' => $beritaModel->orderBy('tanggal', 'DESC')->findAll(),
            'kegiatan' => $kegiatanModel->orderBy('tanggal', 'DESC')->findAll(),
            'prestasi' => $prestasiModel->orderBy('tanggal', 'DESC')->findAll()
        ];

        return view('sd/index', $data);
    }

        public function TK(): string
    {
        $beritaModel = new BeritaModel();
        $kegiatanModel = new KegiatanModel();
        $prestasiModel = new PrestasiModel();

        $data = [
            'berita' => $beritaModel->orderBy('tanggal', 'DESC')->findAll(),
            'kegiatan' => $kegiatanModel->orderBy('tanggal', 'DESC')->findAll(),
            'prestasi' => $prestasiModel->orderBy('tanggal', 'DESC')->findAll()
        ];

        return view('tk/index', $data);
    }
}