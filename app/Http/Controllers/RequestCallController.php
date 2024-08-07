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

    }

    /**
     * @param StoreMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function message(StoreMessageRequest $request): \Illuminate\Http\RedirectResponse|string
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
    public function show(RequestCall $requestCall): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('request-calls.show', ['requestCall' => $requestCall]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestCall $requestCall): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('request-calls.edit', ['requestCall' => $requestCall]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMessageRequest $request, RequestCall $requestCall): \Illuminate\Http\RedirectResponse
    {
        $requestCall->fill($request->all());
        try {
            $requestCall->save();
        } catch (Exception $e) {
            return back();
        }
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestCall $requestCall): \Illuminate\Http\RedirectResponse
    {
        try {
            $requestCall->delete();
        } catch (Exception $e) {
            return back();
        }
        return redirect()->route('admin');
    }
}
