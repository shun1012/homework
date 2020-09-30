<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'result')
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
            'inquiry_contents'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'お名前は必ず入力してください。',
            'mail.email'=>'メールアドレスに誤りがあります',
            'inquiry_contents.required'=>'お問い合わせ内容を入力してください。',

        ];
    }
}
