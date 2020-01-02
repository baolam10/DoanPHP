<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreaditRequest extends FormRequest
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
            'ten_goi'=>'required:goi_credit',
            'credit'=>'required|max:10000|min:0',
            'so_tien'=>'required|max:1000000000|min:0'
        ];

        public function messages()
        {
            return[
                'ten_goi.required' => 'Bạn chưa nhập tên gói Credit',
                'credit.required' => 'Bạn chưa nhập Credit',
                'credit.min' => 'Bạn phải nhập credit trên 0.',
                'credit.max' => 'Bạn phải nhập credit nhỏ hơn 10000.',
                'so_tien.required' => 'Bạn chưa nhập số tiền',
                'so_tien.min' => 'Số tiền bạn nhập phải lớn hơn 0',
                'so_tien.max' => 'Số tiền bạn nhập phải nhỏ hơn 1000000000',
            ]
        }
    }
}
