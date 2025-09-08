<?php
// Simple SMTP test script
$host = "smtp.example.com";
$port = 587;

$connection = fsockopen($host, $port, $errno, $errstr, 10);
if(!$connection){
    echo "Connection failed: $errstr ($errno)";
} else {
    echo "SMTP server is responding on port $port";
    fclose($connection);
}
?>
