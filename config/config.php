<?php

if(file_exists('config/env.php')) include 'env.php';

$config['content_dir'] = 'content/';
$config['content_ext'] = '.md';
$config['mailgun_api_key'] = $_ENV['MAILGUN_API_KEY'];
$config['mailgun_domain'] = $_ENV['MAILGUN_DOMAIN'];
$config['aws_bucket'] = $_ENV['AWS_BUCKET_NAME'];
$config['aws_prefix'] = $_ENV['AWS_BUCKET_PREFIX'];
$config['aws_pages_dir'] = 'pages/';
$config['aws_images_dir'] = 'images/';
$config['aws_path'] = 'https://s3.amazonaws.com/';
$config['aws_access_key_id'] = $_ENV['AWS_ACCESS_KEY_ID'];
$config['aws_secret_access_key'] = $_ENV['AWS_SECRET_ACCESS_KEY'];
$config['pico_edit_password'] = $_ENV['PICO_EDIT_SHA1_PASSWORD'];
$config['pico_edit_default_author'] = 'Primoris Admin';
$config['site_title'] = 'Primoris Academy';
$config['theme'] = 'angel';
