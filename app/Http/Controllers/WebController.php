<?php

namespace App\Http\Controllers;

use App\Api\InstagramApi;
use App\Models\Comment;
use App\Models\Image;

class WebController extends Controller
{

    public function index()
    {
        $tags = ['оркен❤асел', 'orken❤asel', 'оркен❤️асель', 'orken❤️asel'];
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
        $galleryImages = Image::where('type', '=', 2)->orderBy('created_at', 'DESC')->limit(30)->get();
        $reportImages = Image::where('type', '=', 1)->orderBy('created_at', 'DESC')->limit(30)->get();
        $reservImages = Image::where('type', '=', 3)->orderBy('created_at', 'DESC')->get();
        return view('web.index', [
            'galleryImages' => $galleryImages,
            'reportImages' => $reportImages,
            'reservImages' => $reservImages,
            'comments' => $comments,
            'instagramImages' => $newImages,
        ]);
    }

}
