<?php

namespace App\Http\Controllers;

use App\Endowment;
use Illuminate\Http\Request;

class EndwomentsController extends Controller
{
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
     * @param  \App\Endowment  $endowment
     * @return \Illuminate\Http\Response
     */
    public function show(Endowment $endowment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Endowment  $endowment
     * @return \Illuminate\Http\Response
     */
    public function edit(Endowment $endowment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Endowment  $endowment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endowment $endowment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Endowment  $endowment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endowment $endowment)
    {
        //
    }

    public function showLogin()
    {
        return view('Endowment.login');
    }
}
