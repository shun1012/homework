<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\OnegaiRequest;

use  App\Models\Please;

class OnegaiController extends Controller
{
    public function get(Request $request) {
        return view('request/onegai/requestjob',['msg'=>'下記のフォームを入力してください。']);
    }

    public function confirmjob(OnegaiRequest $request)
    {

     //フォームから受け取ったすべてのinputの値を取得
     $inputs = $request->all();

     //入力内容確認ページのviewに変数を渡して表示
     return view('request/onegai/confirmjob', [
         'inputs' => $inputs,
     ]);
    }

    public function post(Request $request) {

        $irai = new Please();
        $irai -> name = $request-> name;
        $irai -> mail = $request-> mail;
        $irai -> please_tel = $request-> please_tel;
        $irai -> industry = $request-> industry;
        $irai -> page = $request-> page;
        $irai -> functions = $request-> functions;
        $irai -> please_contents = $request-> please_contents;
        $irai ->save();

        return view('request/onegai/resultjob',['msg'=>'制作依頼を受付しました。ご連絡まで少々お待ちくださいませ。']);
    }
}
