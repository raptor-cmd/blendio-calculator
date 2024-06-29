<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicOperationRequest;
use App\Repositories\Contracts\BasicOperation;
use Illuminate\Http\Request;

class BasicOperationController extends Controller
{

    protected $basicOperation;

    public function __construct(BasicOperation $basicOperationImplementation)
    {
        $this->basicOperation = $basicOperationImplementation;
    }

    public function add(BasicOperationRequest $request)
    {
        $result = $this->basicOperation->add($request);

        return response(['result' => $result]);
    }

    public function substraction(BasicOperationRequest $request)
    {
        $result = $this->basicOperation->substraction($request);

        return response(['result' => $result]);
    }

    public function multiplication(BasicOperationRequest $request)
    {
        $result = $this->basicOperation->multiplication($request);

        return response(['result' => $result]);
    }

    public function division(BasicOperationRequest $request)
    {
        $result = $this->basicOperation->divide($request);

        return response(['result' => $result]);
    }
}
