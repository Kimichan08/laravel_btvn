<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryEditRequest extends FormRequest
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
            'name'=>'bail|required|min:2|unique:categories,name'.request()->id
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để rỗng',
            'name.min' => 'Tên tối thiểu 2 ký tự',
            'name.unique' => request()->name.'đã tồn tại'
        ];
    }
}
