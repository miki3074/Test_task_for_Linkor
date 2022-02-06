<?php

namespace App\Http\Controllers;

use App\Models\Sadmin;
use App\Models\Issue;
use Illuminate\Http\Request;

class SadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issue = Issue::get();
        return view('admin.dashboard')->with('issues', $issue);
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
     * @param  \App\Models\Sadmin  $sadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Sadmin $sadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sadmin  $sadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Sadmin $sadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sadmin  $sadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sadmin $sadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sadmin  $sadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sadmin $sadmin)
    {
        //
    }
}
