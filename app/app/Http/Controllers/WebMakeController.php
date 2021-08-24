<?php

namespace App\Http\Controllers;

use App\Models\WebMake;
use Illuminate\Http\Request;

class WebMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web_make');
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
     * @param  \App\Models\WebMake  $webMake
     * @return \Illuminate\Http\Response
     */
    public function show(WebMake $webMake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMake  $webMake
     * @return \Illuminate\Http\Response
     */
    public function edit(WebMake $webMake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebMake  $webMake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebMake $webMake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMake  $webMake
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebMake $webMake)
    {
        //
    }
}
