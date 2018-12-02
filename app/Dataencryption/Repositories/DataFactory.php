<?php 
namespace Dataencryption\Repositories;

class DataFactory{
	public static function MyEncryption()
    {
        return new DataEncryption();
    }
	
}