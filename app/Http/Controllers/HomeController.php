<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        //$user = User::find(2);
        // $user->name = 'Steve Smith';
        //$user->delete();
        //$users = User::all();
        $user=Auth::user();
        $cars=$user->cars;
        //dd($users->count());


        return view('profile', ['cars' => $cars]);
    }
}
