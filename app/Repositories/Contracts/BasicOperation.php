<?php

namespace App\Repositories\Contracts;

interface BasicOperation {
    public function add($operators);
    public function substraction($operators);
    public function multiplication($operators);
    public function divide($operators);
}