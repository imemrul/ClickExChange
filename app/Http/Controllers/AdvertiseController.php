<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Http\Requests\StoreAdvertiseRequest;
use App\Http\Requests\UpdateAdvertiseRequest;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = Advertise::get();
        return view("advertise", compact("advertises"));
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
    public function store(StoreAdvertiseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertise $advertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvertiseRequest $request, Advertise $advertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertise $advertise)
    {
        //
    }
}
