<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function greet($gree)
    {
        switch ($gree) {
            case 'morning':
            $title = "朝のあいさつ";
            $greet = "おはよう";
                return view('message.greet', ['gree' => $gree, 'title' => $title, 'greet' => $greet]);
                break;
            case 'afternoon':
            $title = "昼のあいさつ";
            $greet = "こんにちは";
                return view('message.greet', ['gree' => $gree, 'title' => $title, 'greet' => $greet]);
                break;
            case 'evening':
            $title = "夕方のあいさつ";
            $greet = "こんばんは";
                return view('message.greet', ['gree' => $gree, 'title' => $title, 'greet' => $greet]);
                break;
            case 'night':
            $title = "夜のあいさつ";
            $greet = "おやすみ";
                return view('message.greet', ['gree' => $gree, 'title' => $title, 'greet' => $greet]);
                break;
        }
    }

        public function freeword($msg)
    {
        return view('message.freeword', ['msg' => $msg]);
    }

        public function random()
    {
        return view('message.random');
    }

}
