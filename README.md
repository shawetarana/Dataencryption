# Dataencryption

This small library provides a simple and consistent way to encrypt the data in php using OpenSSL.

This project is built using following
- OpenSSL for encryption
- Factory
- Unit test cases
- PSR4 autoloading
- PSR2 coding guidelines

### How to use?

Run following 3 commands


```
	composer self-update // update the composer to latest
	composer dump-autoload -o // create autoload file
	composer require phpunit/phpunit //install the phpunit
    
```

Include in your project
```
    use Dataencryption\Repositories\DataFactory as DataFactory; //use this namespace

	require_once "app/start.php"; // Require a start file
	$obj = DataFactory::MyEncryption();  //create object of DataFactory class
	
	$obj->my_encrypt("Enter your text here"); //just put your text here to encrypt
```
