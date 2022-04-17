<?php

namespace App\Http\Controllers;

use App\Models\Bukutamu;
use Illuminate\Http\Request;

class BukutamuDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.DaftarTamu');
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
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function show(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bukutamu $bukutamu)
    {
        //
    }
}
