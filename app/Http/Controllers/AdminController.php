<?php

namespace App\Http\Controllers;

use App\Models\RequestCall;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $request_calls = RequestCall::simplePaginate(15);
        return view('home', ['request_calls' =>$request_calls]);
    }
}
