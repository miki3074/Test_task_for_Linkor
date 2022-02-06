<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Issue;
use App\Models\Order;
use App\Models\Scooter;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function createOrder($id)
    {
        $issue = Issue::where('id', $id)->get();
        $scooter = Scooter::where('id', $id)->get();
        return view('order.create')->with('issues', $issue)->with('scooters', $scooter);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order = new Order();
        $order -> ima = $request ['ima'];
        $order -> surname = $request ['surname'];
        $order -> name = $request ['name'];
        $order -> issue_id = $request ['issue_id'];
        $order -> timestart = $request ['timestart'];
        $order -> timeend = $request ['timeend'];
        $order->save();


        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
