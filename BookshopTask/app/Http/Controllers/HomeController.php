<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = DB::table('books')->get();
        return view('/index', ['books' => $books]);
    }

    public function adminview()
    {
        return view('/adminview');
    }

    public function addnewbook()
    {
        return view('/addnewbook');
    }

    public function accountinfo()
    {
        return view('/accountinfo');
    }

    public function singlebook()
    {
        return view('/singlebook');
    }
}
