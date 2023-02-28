<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'name'=>'bail|required|min:2|unique:products,name'.request()->id,
            'price'=>'bail|required|numeric|min:1',
            'sale_price'=>'bail|required|numeric|min:0',
            'file'=>'bail|required|mimes:jpg,png,web,jpeg,jfif'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để rỗng',
            'name.min' => 'Tên tối thiểu 2 ký tự',
            'name.unique' => request()->name.'đã tồn tại',
            'price.required' => 'Giá không được để rỗng',
            'price.numeric' => 'Giá phải là số',
            'price.min' => 'Giá phải lớn hơn hoặc bằng 1',
            'sale_price.required' => 'Giá khuyến không được để rỗng',
            'sale_price.numeric' => 'Giá khuyến mại phải là số',
            'sale_price.min' => 'Giá khuyến mại phải lớn hơn hoặc bằng 0',
            'file.required' => 'Ảnh không được để trống',
            'file.mimes' => 'Ảnh phải thuộc định dạng:jpg,bmp,png,webp,jpeg'
        ];
    }
}
