<?php
require_once "./vendor/autoload.php";
use Saeid\Validation;
$validation=new Validation();
var_dump($validation->required([1,2,3],1));
