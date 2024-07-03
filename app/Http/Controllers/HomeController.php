<?php

namespace App\Http\Controllers;


use App\Models\Review;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reviews = Review::all()->where('publish', true);
//        dd($reviews);
        return view('welcome', ['reviews' => $reviews]);
    }
}
