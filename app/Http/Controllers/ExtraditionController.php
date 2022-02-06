<?php

namespace App\Http\Controllers;

use App\Models\Extradition;
use App\Models\Order;
use App\Models\Otchet;
use Illuminate\Http\Request;

class ExtraditionController extends Controller
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
    public function store(Request $request )
    {
        $extradition = new Extradition();
        $extradition -> ima = $request ['ima'];
        $extradition -> surname = $request ['surname'];
        $extradition -> name = $request ['name'];
        $extradition -> issue_id = $request ['issue_id'];
        $extradition -> timestart = $request ['timestart'];
        $extradition -> timeend = $request ['timeend'];
        $extradition -> price = $request ['price'];
        $extradition -> manager = $request ['manager'];
        $extradition->save();

        return redirect('redirects');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Extradition  $extradition
     * @return \Illuminate\Http\Response
     */
    public function show(Extradition $extradition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Extradition  $extradition
     * @return \Illuminate\Http\Response
     */
    public function edit(Extradition $extradition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extradition  $extradition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extradition $extradition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extradition  $extradition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extradition $extradition)
    {
        //
    }
}
