<?php

namespace App\Controllers;

class KontakController extends BaseController
{
    public function kirim()
    {
        if (!empty($this->request->getPost('hp_token'))) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Bot terdeteksi']);
        }

        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $mail = \Config\Services::email();

        // FROM HARUS SAMA DENGAN GMAIL SMTP YANG DIPAKAI
        $mail->setFrom('hariliburya@gmail.com', 'Website Kontak');

        // Balas ke email asli dari form
        $mail->setReplyTo($email, $name);

        $mail->setTo('hariliburya@gmail.com');

        $mail->setSubject("Kontak Baru dari $name: $subject");

        $mail->setMailType('html');
        $mail->setMessage("
            <h3>Pesan Baru dari Website</h3>
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subjek:</strong> $subject</p>
            <p><strong>Pesan:</strong><br>$message</p>
        ");

        if ($mail->send()) {
            return redirect()->to('/')->with('success', 'Pesan berhasil dikirim!');
        } else {
            echo $mail->printDebugger(['headers', 'subject', 'body']);
        }
    }
}
