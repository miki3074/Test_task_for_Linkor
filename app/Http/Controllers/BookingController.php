<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Issue;
use App\Models\Scooter;

use DateTime;
use DateInterval;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//          $booking1 = Booking::get();
//            foreach ($booking1 as $sc) {
//                $now = new DateTime('now');
//                if ($sc->book_freeztime < $now ) {
//                    Booking::where('id', $sc->id)->delete();
//                }
//            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBooking($id)
    {
        $issue = Issue::where('id', $id)->get();
        $scooter = Scooter::where('id', $id)->get();



        return view('booking')->with('issues', $issue)->with('scooters', $scooter);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = new DateTime('now');
        $date ->add(new DateInterval('PT15M'));


        $booking = new Booking();
        $booking -> ima = $request ['ima'];
        $booking -> surname = $request ['surname'];
        $booking -> name = $request ['name'];
        $booking -> issue_id = $request ['issue_id'];
        $booking -> user_id = $request -> user()->id;
        $booking ->book_freeztime = $date;
        $booking -> timebooking = $request ['timebooking'];

        $booking->save();

return redirect('redirects');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {

    }
}
