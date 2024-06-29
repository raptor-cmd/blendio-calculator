<?php

namespace App\Repositories\Implementations;

use App\Repositories\Contracts\BasicOperation;

class BasicOperationImplementation implements BasicOperation
{
    public function add($operators)
    {
        return floatval($operators['number1']) + floatval($operators['number2']);
    }

    public function substraction($operators)
    {
        return floatval($operators['number1']) - floatval($operators['number2']);
    }

    public function multiplication($operators)
    {

        return floatval($operators['number1']) * floatval($operators['number2']);
    }

    public function divide($operators)
    {
        return floatval($operators['number1']) / floatval($operators['number2']);
    }
}
