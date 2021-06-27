<?php

namespace App\Http\Controllers;

use App\Charity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharitiesController extends Controller
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
     * @param  \App\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function edit(Charity $charity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charity $charity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charity $charity)
    {
        //
    }

    public function profile()
    {
        $charity = Charity::find(Auth::guard('charity')->id());
        return view('Charities.profile', compact('charity'))->render();
    }

    public function showLogin()
    {
        return view('Charity.login');
    }

    public function logout()
    {
        Auth::guard('charity')->logout();
        return redirect('/');
    }
}
