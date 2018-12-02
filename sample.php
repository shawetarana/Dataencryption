<?php
use Dataencryption\Repositories\DataFactory as DataFactory;

require_once "app/start.php";

//our data to be encoded
$password_plain = 'abc123';
echo "Your entered string is - ".$password_plain . "<br>";

$obj = DataFactory::MyEncryption();
 
//our data being encrypted. This encrypted data will probably be going into a database
//since it's base64 encoded, it can go straight into a varchar or text database field without corruption worry
$password_encrypted = $obj->my_encrypt($password_plain);
echo "After encryption with OpenSSL - ".$password_encrypted . "<br>";

?>