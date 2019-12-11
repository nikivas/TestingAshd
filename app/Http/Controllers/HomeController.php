<?php

namespace App\Http\Controllers;

use App\UserFlag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $solvedFlags = UserFlag::where('user_id','=',$user['id'])->select('flag_id')->distinct()->get();
        $ids = [];
        foreach ($solvedFlags as $el) {
            $ids[] = $el->flag_id;
        }
        return view('home')->with('slovedId', json_encode($ids));
    }
}
