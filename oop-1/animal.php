<?php
class Animal
{
  public $name;
  public $legs = 2;
  public $cold_blooded = 'false';

  public function set_legs($legs){ //utk ubah data
  	$this->legs = $legs; //this name ngarah ke public, name ngarah ke function
  }

  public function get_suhu(){  //utk ambil
  	return $this->cold_blooded;
  }


  public function __construct($name){
  	$this->name = $name; 
  }


}


?>