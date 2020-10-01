<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnegaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'resultjob')
        {
            return true;
        } else {
        return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'mail'=>'email',
            'please_tel'=>'required',
            'industry'=>'required',
            'page'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'お名前は必ず入力してください',
            'mail.email'=>'メールアドレスに誤りがあります',
            'please_tel.required'=>'電話番号に誤りがあります',
            'industry.required'=>'業種は必ず入力してください',
            'page.required'=>'ページ数を選択してください',

        ];
    }
}
