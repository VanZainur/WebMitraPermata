<?php

namespace App\Controllers;

class FileController extends BaseController
{
    public function serve($jenjang, $kategori, $filename)
    {
        // Validasi jenjang dan kategori
        $allowedJenjang = ['smk', 'smp', 'sd', 'tk'];
        $allowedKategori = ['berita', 'kegiatan', 'prestasi'];
        
        if (!in_array($jenjang, $allowedJenjang) || !in_array($kategori, $allowedKategori)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Build path file
        $filepath = WRITEPATH . 'uploads/' . $jenjang . '/' . $kategori . '/' . $filename;

        // Cek file exists
        if (!file_exists($filepath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Serve file dengan MIME type yang tepat
        $mimeType = mime_content_type($filepath);
        
        return $this->response
            ->setHeader('Content-Type', $mimeType)
            ->setHeader('Cache-Control', 'max-age=31536000') // Cache 1 tahun
            ->setBody(file_get_contents($filepath));
    }
}