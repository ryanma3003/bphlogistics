<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function home()
    {
        return view('auth.login');
    }
    
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
        return view('back.body');
    }

    use AuthenticatesUsers;

    public function logout() 
    {
        Auth::logout(); // logout user
        Session::flush();
        Redirect::back();
        return Redirect::to('backscreen/login'); //redirect back to login
    }
}
