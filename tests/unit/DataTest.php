<?php
use PHPUnit\Framework\TestCase;
class DataTest extends TestCase {

	//Test case to validate if return type is a valid string
	public function testDataType(){

		//Create object of DataEncryption class
		$data = new Dataencryption\Repositories\DataEncryption;

		//assertInternalType is called to check the valid return type 
		$this->assertInternalType('string', $data->my_encrypt("text to encrypt"), "The return value is not a valid string.");
	}
}