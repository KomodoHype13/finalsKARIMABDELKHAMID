<?php

namespace App\Http\Controllers;
class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $data = array(
            'name' => 'Karim',
            'date' => date('Y-m-d')
        );
        return view('welcome')->with($data);
    }
}
