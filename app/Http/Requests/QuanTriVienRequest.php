<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanTriVienRequest extends FormRequest
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
            'ten_dang_nhap' => 'required|unique:quan_tri_vien',
            'mat_khau' => 'required|max:20|min:6',
            'ho_ten' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'ten_dang_nhap.required' => 'Bạn chưa nhập tên đăng nhập',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại.', 
            'mat_khau.required' => 'Bạn chưa nhập mật khẩu.',
            'mat_khau.min' => 'Mật khẩu phải lớn hơn 6 kí tự.',
            'mat_khau.max' => 'Mật khẩu phải nhỏ hơn 20 kí tự.',
            'ho_ten.required' => 'Bạn chưa nhập họ và tên.'
        ];
    }
}
