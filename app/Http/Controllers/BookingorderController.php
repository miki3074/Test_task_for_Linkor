<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bookingorder;
use Illuminate\Http\Request;
use DateTime;

class BookingorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBookingorder($id)
    {
        $booking = Booking::where('id', $id)->get();

        return view('bookingorder')->with('bookings', $booking);
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
     * @param  \App\Models\Bookingorder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingorder $bookingorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookingorder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingorder $bookingorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookingorder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookingorder $bookingorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookingorder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingorder $bookingorder)
    {
        //
    }
}
