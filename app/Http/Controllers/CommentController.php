<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreComment;
use App\Http\Requests\StoreReserve;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{

    /**
     * @param StoreReserve $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreComment $request)
    {
        $comment = new Comment();
        $comment->name = $request['name'];
        $comment->text = $request['text'];
        $comment->save();
        Session::put('save-comment','1');
        return redirect()->back()->with('success', 'Поздравления сохранено');
    }

}