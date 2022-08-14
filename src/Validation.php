<?php
namespace saeid;
class Validation
{
    public function validd(array $data , string $fild)
    {
        return isset($data[$fild]);
    }
}