<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
      
          'input_full_name' => 'required|string|min:3',
          'input_card_number' => 'required|numeric|min:12',
          'input_room' => 'required|numeric',
          'input_from_date' => 'required',
          'input_to_date' => 'required',
          'input_details' => 'required|string|min:3'

        ];
    }
}
