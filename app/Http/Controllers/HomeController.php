<?php

namespace App\Http\Controllers;

use App\Models\RequestCall;
use Illuminate\Http\Request;

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
        $request_calls = RequestCall::simplePaginate(15);
        return view('home', ['request_calls' =>$request_calls]);
    }
}
