<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Scooter;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $scooter = Scooter::get();
        $issue = Issue::get();
        return view('admin.dashboard')->with('issues', $issue)->with('scooters', $scooter);
    }
}
