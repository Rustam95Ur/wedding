<?php

namespace App\Http\Controllers;

class WebController extends Controller {

    public function index()
    {
        return view('web.index');
    }

}