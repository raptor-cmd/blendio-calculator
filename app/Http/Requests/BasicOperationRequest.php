<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicOperationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'number1' => ['required', 'numeric'],
            'number2' => ['required', 'numeric'],
        ];
    }

    public function all($keys = null)
    {
        $data = parent::all();
        $data['number1'] = $this->route('number1');
        $data['number2'] = $this->route('number2');

        return $data;
    }
}
