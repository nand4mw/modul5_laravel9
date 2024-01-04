<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Dasboard'
        ];
        return view('home', $data);
    }
}
