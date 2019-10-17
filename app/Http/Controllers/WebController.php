<?php

namespace App\Http\Controllers;

use App\Api\InstagramApi;
use App\Models\Comment;
use App\Models\Image;

class WebController extends Controller
{

    public function index()
    {
        $tags = ['Оркен❤Асел', 'Orken❤Asel'];
        $newImages = [];
        foreach ($tags as $tag) {
            $instagram = InstagramApi::getImages($tag);
            if ($instagram->IsSuccessful()) {
                $instaImages = $instagram->GetPayload();
                $instaImages = $instaImages['graphql']['hashtag']['edge_hashtag_to_media']['edges'];
                foreach ($instaImages as $image) {
                    if (!in_array($image['node']['thumbnail_src'], $newImages)) {
                        array_push($newImages, $image['node']['thumbnail_src']);
                    }
                }

            }
        }
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        $images = Image::orderBy('created_at', 'DESC')->limit(30)->get();
        return view('web.index', [
            'images' => $images,
            'comments' => $comments,
            'instagramImages' => $newImages,
        ]);
    }

}
