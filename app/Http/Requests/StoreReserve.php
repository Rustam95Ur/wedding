<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReserve extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required',
            'agreement' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'full_name.required' => 'Поле ФИО обязательное',
            'agreement.required' => 'Вы не выбрали поле "Вы придёте ?"',
        ];
    }
}
