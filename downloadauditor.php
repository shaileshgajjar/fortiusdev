<?php
require(dirname(__FILE__).'/config/config.new.php');

$file_url = 'uploads/pcicomplysetup.msi';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);