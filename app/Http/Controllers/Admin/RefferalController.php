<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Refferal;
use Illuminate\Http\Request;

class RefferalController extends Controller
{

    const FOLDER = "admin.referrals";
    const TITLE = "Referrals";
    const ROUTE = "/admin/referrals";
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
     * @param  \App\Models\Refferal  $refferal
     * @return \Illuminate\Http\Response
     */
    public function show(Refferal $refferal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refferal  $refferal
     * @return \Illuminate\Http\Response
     */
    public function edit(Refferal $refferal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refferal  $refferal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refferal $refferal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refferal  $refferal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refferal $refferal)
    {
        //
    }
}
