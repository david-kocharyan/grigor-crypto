<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlideTwo;
use Illuminate\Http\Request;

class SlideTwoController extends Controller
{

    const FOLDER = "admin.two";
    const TITLE = "Slider Two";
    const ROUTE = "/admin/slider-two";
    const LIMIT = 15;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SlideTwo  $slideTwo
     * @return \Illuminate\Http\Response
     */
    public function show(SlideTwo $slideTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SlideTwo  $slideTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideTwo $slideTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SlideTwo  $slideTwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideTwo $slideTwo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SlideTwo  $slideTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideTwo $slideTwo)
    {
        //
    }
}
