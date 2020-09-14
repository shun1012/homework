<?php

namespace App\Http\Controllers;

use App\Buy;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index (Request $request)
    {
        $items = Buy::all();
        return view ('buy.index', ['items' => $items]);
    }
}
