<?php

if(file_exists('config/env.php')) include 'env.php';

$config['content_dir'] = 'content/';
$config['content_ext'] = '.md';
$config['mailgun_api_key'] = $_ENV['MAILGUN_API_KEY'];
$config['mailgun_domain'] = $_ENV['MAILGUN_DOMAIN'];
$config['pico_edit_password'] = $_ENV['PICO_EDIT_SHA1_PASSWORD'];
$config['pico_edit_default_author'] = 'Primoris Admin';
$config['site_title'] = 'Primoris Academy';
$config['theme'] = 'angel';
