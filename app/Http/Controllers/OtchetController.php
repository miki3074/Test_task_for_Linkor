<?php

namespace App\Http\Controllers;

use App\Models\Otchet;
use Illuminate\Http\Request;

class OtchetController extends Controller
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
        $otchet = new Otchet();
        $otchet -> ima = $request ['ima'];
        $otchet -> surname = $request ['surname'];
        $otchet -> name = $request ['name'];
        $otchet -> issue_id = $request ['issue_id'];
        $otchet -> timestart = $request ['timestart'];
        $otchet -> timeend = $request ['timeend'];
        $otchet -> price = $request ['price'];
        $otchet -> manager = $request ['manager'];
        $otchet->save();
        return redirect('redirects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Otchet  $otchet
     * @return \Illuminate\Http\Response
     */
    public function show(Otchet $otchet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Otchet  $otchet
     * @return \Illuminate\Http\Response
     */
    public function edit(Otchet $otchet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Otchet  $otchet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otchet $otchet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Otchet  $otchet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otchet $otchet)
    {
        //
    }
}
