<?php

namespace App\Http\Controllers;

use App\Models\Image;

class WebController extends Controller {

    public function index()
    {
        $images = Image::orderBy('created_at', 'DESC')->limit(30)->get();
        return view('web.index', [
            'images' => $images
        ]);
    }

}