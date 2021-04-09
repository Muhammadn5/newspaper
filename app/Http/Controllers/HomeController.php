<?php

namespace App\Http\Controllers;
//user name = M ishaq | password = mishaqn5@gmail.com

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
        return view('backend.index');
    }
    public function logout(){
        Auth::logout();
        return redirect('laranews-admin');
    }
}
