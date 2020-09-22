<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function get(Request $request) {
        return view('request/contact',['msg'=>'下記のフォームを入力してください。']);
    }

    public function post(ContactRequest $request) {

        return view('request/result',['msg'=>'お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。']);
    }
}
