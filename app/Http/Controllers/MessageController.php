<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function greet($gree)
    {
        switch ($gree) {
            case 'morning':
                return view('message.morning', ['gree' => $gree]);
                break;
            case 'afternoon':
                return view('message.afternoon', ['gree' => $gree]);
                break;
            case 'evening':
                return view('message.evening', ['gree' => $gree]);
                break;
            case 'night':
                return view('message.night', ['gree' => $gree]);
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
