<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeFormRequest extends FormRequest
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
            //
            'bike-name' => 'required',
            'bike-brand' => 'required',
            'bike-price' => ['required', 'integer']
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'bike-name' => strip_tags($this['bike-name']),
            'bike-brand' => strip_tags($this['bike-brand']),
            'bike-price' => strip_tags($this['bike-price']),
        ]);
    }
}
