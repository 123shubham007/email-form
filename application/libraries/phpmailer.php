<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailer_Lib
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is laading');
    }

    public function load()
    {
        require_once APPPATH . 'third_party/mailer/sec/Exception.php';
        require_once APPPATH . 'third_party/mailer/sec/PHPMailer.php';
        require_once APPPATH . 'third_party/mailer/sc/SMTP.php';

        $mail = new PHPMailer;
        return $mail;
    }
}
