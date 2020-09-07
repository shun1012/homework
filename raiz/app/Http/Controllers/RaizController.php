<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaizController extends Controller
{
    public function toppage() {
        return view('index');
    }
}
