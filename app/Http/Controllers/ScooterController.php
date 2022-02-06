<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Scooter;
use Illuminate\Http\Request;

use DateTime;
use DateInterval;
use Illuminate\Support\Facades\Auth;

class ScooterController extends Controller
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
        $role=Auth::user()->role;

        if($role == '1') {
            $issue = Issue::get();

            return view('admin.scooter.create')->with('issues', $issue);
        }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $scooter = new Scooter();
        $scooter-> issue_id = $request ['issue_id'];
        $scooter-> scooter = $request ['scooter'];
        $scooter-> opis = $request ['opis'];

        $scooter->save();
        return redirect('redirects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function show(Scooter $scooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Scooter $scooter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scooter $scooter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scooter  $scooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scooter $scooter)
    {
        //
    }
}
