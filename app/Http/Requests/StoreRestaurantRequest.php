<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:150',
            'address' => 'required|unique:restaurants|string',
            'description' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
            'vat' => 'required|unique:restaurants|string',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i|after:opening_time
            ',
            'phone_number' => 'required|unique:restaurants|string',
            'price_shipping' => 'required|decimal:2',
        ];
    }
}
