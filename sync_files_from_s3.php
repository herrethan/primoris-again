<?php


require 'vendor/autoload.php';

$content_ext = '.md';
$content_dir = 'content/';
$pages_path = $_ENV['AWS_BUCKET_PREFIX'] . $_ENV['AWS_PAGES_DIR'];


$s3_client = Aws\S3\S3Client::factory(array(
    'credentials' => array(
        'key'    => $_ENV['AWS_ACCESS_KEY_ID'],
        'secret' => $_ENV['AWS_SECRET_ACCESS_KEY'],
    )
));

$iterator = $s3_client->getIterator('ListObjects', array(
    'Bucket' => $_ENV['AWS_BUCKET_NAME'],
    'Prefix' => $pages_path,
));

foreach ($iterator as $object) {
    $file = substr($object['Key'], strlen($pages_path), -strlen($content_ext));
    if($file){
        if(strpos($file, '/')){
            $dir = implode('/', array_slice(explode('/', $file), 0, -1));
            if(!is_dir($content_dir . $dir)){
                mkdir($content_dir . $dir, 0777, true);
                echo 'created new directory: ' . $dir . "\n";
            }
        }
        $result = $s3_client->getObject(array(
            'Bucket' => $_ENV['AWS_BUCKET_NAME'],
            'Key'    => $object['Key'],
            'SaveAs' => $content_dir . $file . $content_ext,
        ));
        echo 'synced ' . $result['Body']->getUri() . "\n";
    }
}

?>
