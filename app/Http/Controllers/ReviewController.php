<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request, Review $review)
    {
        try{
            $review->fill($request->all());
            if($request->hasFile('file')){
                Review::saveAndUpdateImage($review, $request);
            }
        }catch (\Exception $e){
            return $e->getMessage();
        }
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('reviews.show', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('reviews.edit', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReviewRequest $request, Review $review): \Illuminate\Http\RedirectResponse|string
    {
        try {
            $review->fill($request->all());
            if ($request->hasFile('file')) {
                Review::saveAndUpdateImage($review, $request);
            } else {
                $review->save();
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review): \Illuminate\Http\RedirectResponse
    {
        try {
            $src = $review->src;
            if (Storage::exists($src)) {
                Review::deleteImage($src);
            }
            $review->delete();
        } catch (\Exception $e) {
            return back();
        }
        return redirect()->route('admin');
    }
}
