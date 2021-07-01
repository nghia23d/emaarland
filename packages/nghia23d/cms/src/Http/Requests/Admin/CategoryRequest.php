<?php

namespace nghia23d\cms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    private $table = 'category';

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
        $id = $this->route($this->table);


        $condTitle  = "bail|required|between:5,150|unique:$this->table,title";

        //rules for edit
        if (!empty($id)) {
            $condTitle  .= ",$id";
        }

        return [
            'title'            => $condTitle,
            'status'           => 'bail|in:0,1',
        ];
    }
    public function messages()
    {
        return [
            'title.required'            => 'Tiêu đề không được để trống',
            'title.unique'              => 'Tiêu đdanh mục này đã tồn tại. Hãy đặt tiêu đề khác',
            'title.between'             => 'Tiêu đề không được ít hơn :min  kí tực và nhỏ hơn :max',
            'status.in'                 => 'Vui lòng chọn kích hoạt hoặc không kích hoạt',
        ];
    }
}
