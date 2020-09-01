<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function introduce() {
        return view('koyama');
    }

    public function neko() {
        return view('cat');
    }

    public function ie() {
        return view('hometown');
    }

    public function syumi() {
        return view('hobby');
    }

    public function works() {
        return view('works');
    }

    public function back() {
        return view('koyama');
    }
}
