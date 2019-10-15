<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreReserve;
use App\Models\Reserve;
use Illuminate\Support\Facades\Session;

class ReserveController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $reserves = Reserve::paginate(10);
        return view('reserve.index', [
            'reserves' => $reserves,
        ]);
    }

    /**
     * @param StoreReserve $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreReserve $request)
    {
        $reserve = new Reserve();
        $reserve->full_name = $request['full_name'];
        $reserve->agreement = $request['agreement'];
        $reserve->count_people = $request['count_people'];
        $reserve->save();
        Session::put('save-reserve','1');
        return redirect()->back()->with('success', 'Заявка отправлена');
    }

}