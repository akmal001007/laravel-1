<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('slider/newIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('slider/show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('slider/create', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function ajax(){
        return "<h1>hello ajax</h1>";
    }
}
