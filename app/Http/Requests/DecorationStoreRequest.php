<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DecorationStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone_no' => 'required',
            'decoration_name' => 'required',
            'address'=>'required',
            'decoration_type'=>'required',
        ];
    }
}
