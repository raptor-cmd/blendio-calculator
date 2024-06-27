<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicOperationRequest;
use Illuminate\Http\Request;

class BasicOperationController extends Controller
{
    public function add(BasicOperationRequest $request)
    {
        $result = floatval($request->number1) + floatval($request->number2);

        return response(['result' => $result]);
    }

    public function substraction(BasicOperationRequest $request)
    {
        $result = floatval($request->number1) - floatval($request->number2);

        return response(['result' => $result]);
    }

    public function multiplication(BasicOperationRequest $request)
    {
        $result = floatval($request->number1) * floatval($request->number2);

        return response(['result' => $result]);
    }

    public function division(BasicOperationRequest $request)
    {
        $result = floatval($request->number1) / floatval($request->number2);

        return response(['result' => $result]);
    }
}
