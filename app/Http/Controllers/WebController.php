<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use Illuminate\Support\Facades\Session;

class WebController extends Controller {

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        $images = Image::orderBy('created_at', 'DESC')->limit(30)->get();
        return view('web.index', [
            'images' => $images,
            'comments' => $comments,
        ]);
    }

}