<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlideCircle;
use Illuminate\Http\Request;

class SlideCircleController extends Controller
{

    const FOLDER = "admin.circle";
    const TITLE = "Slider Circle";
    const ROUTE = "/admin/slider-circle";
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
     * @param  \App\Models\SlideCircle  $slideCircle
     * @return \Illuminate\Http\Response
     */
    public function show(SlideCircle $slideCircle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SlideCircle  $slideCircle
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideCircle $slideCircle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SlideCircle  $slideCircle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideCircle $slideCircle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SlideCircle  $slideCircle
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideCircle $slideCircle)
    {
        //
    }
}
