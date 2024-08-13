<?php

namespace App\Http\Controllers;

use App\Models\RequestCall;
use App\Models\Review;
use App\Models\User;
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
        return view('admin.home', [
            'request_calls' => RequestCall::simplePaginate(15),
            'reviews' => Review::simplePaginate(15),
            'users' => User::simplePaginate(15)
        ]);
    }
}
