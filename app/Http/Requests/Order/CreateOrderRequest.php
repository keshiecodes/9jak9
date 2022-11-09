<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            'orderSubTotalPrice'=>['required'],
            'orderTotalPrice'=>['required'],
            'orderReference'=>['required', 'max:255'],
            'orderPaymentMethod'=>['required', 'max:255'],
        ];
    }
}
