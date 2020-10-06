<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\ContactRequest;

use App\Models\Contact;

class ContactController extends Controller
{
    public function get(Request $request) {
        return view('request/contact/contact',['msg'=>'下記のフォームを入力してください。']);
    }

    public function confirm(ContactRequest $request)
    {

     //フォームから受け取ったすべてのinputの値を取得
     $inputs = $request->all();

     //入力内容確認ページのviewに変数を渡して表示
     return view('request/contact/confirm', [
         'inputs' => $inputs,
     ]);
    }

    public function post(Request $request) {

        $contact = new Contact();
        // $contact -> name = "小山瞬";
        // $contact -> mail = "oooooo@gmail.com";
        // $contact -> inquiry_contents = "aaaaa";
        $contact -> name = $request-> name;
        $contact -> mail = $request-> mail;
        $contact -> inquiry_contents = $request-> inquiry_contents;
        $contact ->save();

        return view('request/contact/result',['msg'=>'お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。']);
    }
}
