<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\RequestRequest;

class RequestController extends Controller
{
    public function get(Request $request) {
        return view('request/request',['msg'=>'下記のフォームを入力してください。']);
    }

    public function post(RequestRequest $request) {

        return view('request/resultjob',['msg'=>'制作依頼を受付しました。ご連絡まで少々お待ちくださいませ。']);
    }
}
