<?php

namespace App\Http\Controllers;

use App\Endowment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EndowmentsController extends Controller
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

    public function logout()
    {
        Auth::guard('endowment')->logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.dashboard', compact('endowment'))->render();
    }
    public function profile()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.profile', compact('endowment'))->render();
    }
    public function messages()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.messages', compact('endowment'))->render();
    }
    public function bookmarks()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.bookmarks', compact('endowment'))->render();
    }
    public function selectedProjects()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.selectedProjects', compact('endowment'))->render();
    }
    public function inProgressProjects()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.inProgressProjects', compact('endowment'))->render();
    }
    public function donatedProjects()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.donatedProjects', compact('endowment'))->render();
    }
    public function alkhair()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.alkhair', compact('endowment'))->render();
    }
    public function projectDetails()
    {
        $endowment = Endowment::find(Auth::guard('endowment')->id());
        return view('Endowments.projectDetails', compact('endowment'))->render();
    }
}
