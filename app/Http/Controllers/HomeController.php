<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Issue;
use App\Models\Scooter;

use DateTime;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $issue = Issue::get();
        $scooter = Scooter::get();
        $booking = Booking::where( 'user_id', $request->user()->id )->get();



            foreach ($booking as $sc) {

                $now = new DateTime('now');
                $now = $now ->format('Y-m-d H:i:s');
                if ($sc->book_freeztime < $now ) {
                    Booking::where('id', $sc->id)->delete();
                }
            }

        return view('home')->with('issues', $issue)->with('scooters', $scooter)->with('bookings', $booking);


    }
    public function show($id, Issue $issue,Scooter $scooter)
    {

        $issue = Issue::find($id);
        $scooter = Scooter::find($id);
        return view('home')->with('issues', $issue)->with('scooters', $scooter);
    }
}
