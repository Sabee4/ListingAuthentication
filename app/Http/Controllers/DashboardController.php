<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class DashboardController extends Controller
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
      //  return auth()->user()->id;
        //return view('dashboard');
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('listings', $user->listings);
    }
}
