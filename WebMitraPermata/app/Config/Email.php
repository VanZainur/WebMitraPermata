<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail = '';
    public string $fromName  = '';

    public string $protocol = '';

    public string $SMTPHost = '';
    public string $SMTPUser = '';
    public string $SMTPPass = '';
    public int    $SMTPPort = 0;
    public string $SMTPCrypto = '';
    public bool   $SMTPAuth = true;     // ★ TAMBAHKAN INI
    public int    $SMTPTimeout = 5;     // ★ TAMBAHKAN INI

    public string $mailType = 'html';
    public string $charset  = 'UTF-8';
    public string $CRLF     = "\r\n";
    public string $newline  = "\r\n";
}
