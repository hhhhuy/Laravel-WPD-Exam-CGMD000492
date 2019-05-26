<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
        $id = $this->request->get('id');
        return [
            'code' => 'required|numeric|max:2147483647|unique:employees,code,' . $id,
            'group_id' => 'required',
            'name' => 'required|max:30|min:3',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|max:2147483647',
            'id_card_number' => 'required|numeric|max:2147483647|unique:employees,id_card_number,' . $id,
            'email' => 'required|unique:employees,email,' . $id,
            'address' => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'code.numeric' => 'Chỉ được nhập số',
            'code.required' => 'Không được để trống',
            'code.unique' => 'Trùng mã nhân viên',
            'code.max' => 'Mã nhân viên không vượt quá 2147483647',
            'group_id.required' => 'Không được để trống',
            'name.required' => 'Không được để trống',
            'name.max' => 'Tên không quá 30 ký tự',
            'name.min' => 'Tên ít nhất 3 ký tự',
            'dob.required' => 'Không được để trống',
            'gender.required' => 'Không được để trống',
            'phone.required' => 'Không được để trống',
            'phone.numeric' => 'Chỉ được nhập số',
            'phone.max' => 'Không vượt quá 2147483647',
            'id_card_number.required' => 'Không được để trống',
            'id_card_number.numeric' => 'Chỉ được nhập số',
            'id_card_number.max' => 'Không vượt quá 2147483647',
            'id_card_number.unique' => 'Trùng CMND',
            'email.unique' => 'Trùng Email',
            'email.required' => 'Không được để trống',
            'address.required' => 'Không được để trống',
        ];
    }
}
