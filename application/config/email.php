<?php defined('BASEPATH') OR exit('No direct script access allowed.');
$config['protocol'] = 'smtp';
 $config['smtp_host'] = 'ssl://smtp.gmail.com';                         
// $config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_timeout'] = 30;
$config['smtp_user'] = 'slife518@gmail.com';
$config['smtp_pass'] = 'jkjkjk7878';
// $config['smtp_port'] = '465';
$config['smtp_port'] = '587';
$config['newline'] = "\r\n";
$config['mailpath'] = '/usr/sbin/sendmail';
$config['mailtype'] = 'text/html'; 
$config['charset'] = 'utf-8';
$config['smtp_crypto'] = 'security';
$config['wordwrap'] = TRUE;
