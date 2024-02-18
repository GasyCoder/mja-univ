<?php

namespace App\Http\Controllers;

use App\Models\President;
use App\Http\Requests\StorePresidentRequest;
use App\Http\Requests\UpdatePresidentRequest;

class PresidentController extends Controller
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
    public function store(StorePresidentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(President $president)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(President $president)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePresidentRequest $request, President $president)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(President $president)
    {
        //
    }
}
