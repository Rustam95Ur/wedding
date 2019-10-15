<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreImage;
use App\Models\Image;
use App\Traits\UploadTrait;


class ImageController extends Controller
{
    use UploadTrait;
    /**
     * ReserveController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $images = Image::paginate(10);
        return view('image.index', [
            'images' => $images,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * @param StoreImage $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreImage $request)
    {
        $images = new Image();
        $image = $request['image'];
        $name = str_slug('wedding').'_'.time();
        $folder = 'images/'.date('M').date('Y').'/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $name);
        $images->image = $filePath;
        $images->save();
        return redirect()->back()->with('success', 'Картина сохранена');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('image.edit', [
            'image' => $image,

        ]);
    }

    /**
     * @param StoreImage $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreImage $request, $id)
    {
        $images = Image::find($id);
        if($request['image'] != null) {
            $image = $request['image'];
            $name = str_slug($request['title']).'_'.time();
            $folder = 'partners/'.date('M').date('Y').'/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $images->image = $filePath;
        }
        $images->save();
        return redirect()->route('images')->with('success', 'Картинка обновлена');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $city = Image::find($id);
        $city->delete();
        return redirect()->route('images')->with('success', 'Картинка удалена');
    }

}