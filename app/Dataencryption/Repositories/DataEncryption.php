<?php 
namespace Dataencryption\Repositories;

class DataEncryption{
	//$key is our base64 encoded 256bit key that we created earlier. You will probably store and define this key in a config file.
	public $key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';
	public function __construct(){
		// die("encryption data using function");
	}

	function my_encrypt($data) {
	    // Remove the base64 encoding from our key
	    $encryption_key = base64_decode($this->key);
	    // Generate an initialization vector
	    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
	    // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
	    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
	    // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
	    return base64_encode($encrypted . '::' . $iv);
	}
	


}