<?php

namespace App\Http\Controllers;

use App\Models\Click;
use App\Models\Client;
use App\Http\Requests\StoreClickRequest;
use App\Http\Requests\UpdateClickRequest;
use DB;

class ClickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(StoreClickRequest $request)
    {
        // Get all clients
        $clients = Client::get();
        if ($clients->isEmpty()) {
            return response()->json(['message' => 'No clients found.'], 404);
        }

        // Find the client with the least click_count
        $nextClient = $clients->sortBy('click_count')->first();

        // Increment the click_count for the selected advertiser
        DB::table('clients')
            ->where('id', $nextClient->id)
            ->increment('click_count');

        // Create a new click record
        $click = new Click();
        $click->client_id = $nextClient->id;
        $click->save();

        return response()->json(['message' => 'Click saved successfully.','url'=>$nextClient->url]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Click $click)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Click $click)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClickRequest $request, Click $click)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Click $click)
    {
        //
    }
}
