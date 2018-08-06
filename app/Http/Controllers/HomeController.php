<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $minute = 60;
        $text = Cache::remember('test', $minute, function () {
            return 'Aumkung Studio';
        });
        return view('home', [
            'text' => $text
        ]);
    }
}
