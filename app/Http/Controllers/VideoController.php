<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideo;
use App\Models\Video;
use App\Traits\UploadTrait;

class VideoController extends Controller {

    use UploadTrait;
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $videos = Video::paginate(10);
        return view('video.index', [
            'videos' => $videos,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('video.create', [
        ]);
    }

    /**
     * @param StoreVideo $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreVideo $request)
    {
        $video = new Video();
        $image = $request['image'];
        $name = str_slug('wedding').'_'.time();
        $folder = 'images/'.date('M').date('Y').'/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $name);
        $video->image = $filePath;
        $video->link = $request['link'];
        $video->save();
        return redirect()->back()->with('success', 'Видео добавлено');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $video = Video::find($id);
        return view('video.edit', [
            'video' => $video,

        ]);
    }

    /**
     * @param StoreVideo $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreVideo $request, $id)
    {
        $video = Video::find($id);
        if($request['image'] != null) {
            $image = $request['image'];
            $name = str_slug($request['title']).'_'.time();
            $folder = 'partners/'.date('M').date('Y').'/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $video->image = $filePath;
        }
        $video->link = $request['link'];
        $video->save();
        return redirect()->back()->with('success', 'Видео обновлено');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $city = Video::find($id);
        $city->delete();
        return redirect()->back()->with('success', 'Видео удалено');
    }

}