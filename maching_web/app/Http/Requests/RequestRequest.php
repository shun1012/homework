<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRequest extends FormRequest
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
            'type'=>'required',
            'page'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'お名前は必ず入力してください',
            'mail.email'=>'メールアドレスが必須です',
            'type.required'=>'業種は必ず入力してください。',
            'page.required'=>'ページ数を選択してください',

        ];
    }
}
