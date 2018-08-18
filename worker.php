<?php

print $_ENV['AWS_PAGES_DIR'];
// require 'vendor/autoload.php';

// $s3_client = Aws\S3\S3Client::factory(array(
//     'credentials' => array(
//         'key'    => $_ENV['AWS_ACCESS_KEY_ID'],
//         'secret' => $_ENV['AWS_SECRET_ACCESS_KEY'],
//     )
// ));

// $pages_path = $_ENV['AWS_BUCKET_PREFIX'] . $_ENV['AWS_PAGES_DIR'];

// $iterator = $s3_client->getIterator('ListObjects', array(
//     'Bucket' => $_ENV['AWS_BUCKET_NAME'],
//     'Prefix' => $pages_path,
// ));

// foreach ($iterator as $object) {
//     $file = substr($object['Key'], strlen($pages_path), -strlen('.md'));
//     if($file && $file != '404'){
//         print($file);
//     }
// }

?>
