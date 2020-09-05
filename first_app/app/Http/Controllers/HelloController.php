<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function introduce() {
        return view('introduce/koyama');
    }

    public function neko() {
        return view('introduce/cat');
    }

    public function ie() {
        return view('introduce/hometown');
    }

    public function syumi() {
        return view('introduce/hobby');
    }

    public function works() {
        return view('introduce/works');
    }

    public function back() {
        return view('introduce/koyama');
    }
}
