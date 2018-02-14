<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\User;
use Auth;
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
        $users = User::where('id','!=',Auth::user()->id)->get();
        $conversations = Auth::user()->conversations();
        return view('home',compact('users','conversations'));
    }
}
