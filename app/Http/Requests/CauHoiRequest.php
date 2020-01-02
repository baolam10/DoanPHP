<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHoiRequest extends FormRequest
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
             'noi_dung' => 'required:cau_hoi',
             'linh_vuc_id' => 'required',
             'phuong_an_a' => 'required',
             'phuong_an_b' => 'required',
             'phuong_an_c' => 'required',
             'phuong_an_d' => 'required',
             'dap_an' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'noi_dung.required' => 'Bạn chưa nhập nội dung câu hỏi',
            'linh_vuc_id.required' => 'Bạn chưa nhập lĩnh vực câu hỏi.', 
            'phuong_an_a.required' => 'Bạn chưa nhập đáp án A câu hỏi.',
            'phuong_an_b.required' => 'Bạn chưa nhập đáp án B câu hỏi.',
            'phuong_an_c.required' => 'Bạn chưa nhập đáp án C câu hỏi.',
            'phuong_an_d.required' => 'Bạn chưa nhập đáp án D câu hỏi.',
            'dap_an.required' => 'Bạn chưa nhập đáp án đúng cho câu hỏi.'
        ];
    }
}
