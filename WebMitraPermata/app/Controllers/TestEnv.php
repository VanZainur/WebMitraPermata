<?php

namespace App\Controllers;

class TestEnv extends BaseController
{
    public function index()
    {
        echo "<pre>";
        echo "Protocol: " . env('email.protocol') . PHP_EOL;
        echo "SMTP Host: " . env('email.SMTPHost') . PHP_EOL;
        echo "SMTP User: " . env('email.SMTPUser') . PHP_EOL;
        echo "SMTP Pass: " . env('email.SMTPPass') . PHP_EOL;
        echo "</pre>";
    }
}
