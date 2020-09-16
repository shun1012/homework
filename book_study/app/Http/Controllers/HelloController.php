<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    // public function index()
    // {
    //     return view('hello.index',['msg'=>'']);
    // }
    //
    // public function post(Request $request)
    // {
    //     return view('hello.index',['msg'=>$request->msg]);
    // }

    // リスト3-22
    // public function index()
    // {
    //     $data = ['one','two','three','four','five'];
    //     return view('hello/index',['data'=>$data]);
    // }

    // リスト4-15
    // public function index(Request $request)
    // {
    //     return view('hello.index',['msg'=>'ふぉーむを入力：']);
    // }
    //
    // public function post(Request $request)
    // {
    //     $validate_rule = [
    //         'name'=>'required',
    //         'mail'=>'email',
    //         'age'=>'numeric|between:0,150',
    //     ];
    //     $this->validate($request,$validate_rule);
    //     return view('hello.index',['msg'=>'正しく入力されました。']);
    // }

    // リスト5-4
    public function index(Request $request)
    {
        $items = DB::select('select *from buys');
        return view('hello.index',['items'=>$items]);
    }

}
