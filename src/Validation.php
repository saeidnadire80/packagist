<?php
namespace saeid;
class Validation
{
    public function valid(array $data , string $fild)
    {
        return isset($data[$fild]);
    }
}