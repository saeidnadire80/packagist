<?php
namespace saeid;
class Validation
{
    public function required(array $data , string $fild)
    {
        return isset($data[$fild]);
    }
}