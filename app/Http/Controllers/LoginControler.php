<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('home');
    }
    public function store(Request $Request){
        return $Request;
    }
}
