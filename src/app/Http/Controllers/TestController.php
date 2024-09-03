<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    // public function index(Request $request)
    {
        $item = [
            'content' => '本文',
            // 'param' => $text
            // 'param' => $request->text
        ];
        return view('index',$item);
    }
}