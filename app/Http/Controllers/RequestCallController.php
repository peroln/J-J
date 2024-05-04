<?php

namespace App\Http\Controllers;

use App\Events\RequestCallSaved;
use App\Http\Requests\StoreMessageRequest;
use App\Models\RequestCall;
use Illuminate\Http\Request;
use Exception;

class RequestCallController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        try {
            $requestCall = RequestCall::create($request->all());
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
        RequestCallSaved::dispatch($requestCall);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(RequestCall $requestCall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestCall $requestCall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RequestCall $requestCall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestCall $requestCall)
    {
        //
    }
}
