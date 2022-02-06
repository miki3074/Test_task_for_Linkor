<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bookingorder;
use App\Models\Extradition;
use App\Models\Issue;
use App\Models\Order;
use App\Models\Otchet;
use App\Models\Scooter;
//use Hamcrest\Core\Is;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Exports\OtchetExport;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role == '1')
        {
            $scooter = Scooter::get();
            $issue = Issue::get();
            $user = User::get();
            $otchet = Otchet::get();
            return view('admin.dashboard')->with('issues', $issue)->with('scooters', $scooter)->with('users', $user)->with('otchets', $otchet);

        }
        elseif ($role == '2')
        {
            $order = Order::get();
            $booking = Booking::get();
            $extradition=Extradition::get();
            $otchet = Otchet::get();
            return view('manager.dashboard')->with('orders', $order)->with('bookings', $booking)->with('extraditions', $extradition)->with('otchets', $otchet);
        }
        elseif ($role == '0')
        {
            return view('home');
        }

        else
        {
            return view('welcome');
        }


    }
    public function createExtradition($id)
    {
        $role=Auth::user()->role;

        if($role == '2') {
            $order = Order::find($id);
            return view('manager.extradition')->with('orders', $order);
        }
        else
        {
            return view('welcome');
        }
    }

//    public function Issueupdate($id)
//    {
//        $issue = Issue::find($id);
//        return view('admin.issue.edit')->with('issues', $issue);
//    }




// Admin function
    public function updateIssue($id)

    {
        $role=Auth::user()->role;

        if($role == '1')
        {

            $issue = Issue::find($id);
            return view('admin.issue.issueedit')->with('issues', $issue);
        }
        else
        {
            return view('welcome');
        }
    }

    public function updateIssueid($id, Request $request)
    {
        $issue = Issue::find($id);
        $issue->name = $request ['name'];
        $issue->address = $request ['address'];
        $issue->timestart = $request ['timestart'];
        $issue->timeend = $request ['timeend'];
        $issue->save();
        return redirect('redirects');
    }

    public function updateScooter($id)
    {
        $role=Auth::user()->role;

        if($role == '1')
        {
        $issue = Issue::find($id);
        $scooter = Scooter::find($id);
        return view('admin.scooter.scooteredit')->with('issues', $issue)->with('scooters', $scooter);
        }
        else
        {
            return view('welcome');
        }
    }

    public function updateScooterid($id, Request $request)
    {
        $scooter =  Scooter::find($id);
        $scooter-> issue_id = $request ['issue_id'];
        $scooter-> scooter = $request ['scooter'];
        $scooter-> opis = $request ['opis'];
        $scooter->save();
        return redirect('redirects');
    }

    public function deleteIssue($id)
    {
            Issue::find($id)->delete();
        return redirect('redirects');
    }
    public function deleteScooter($id)
    {
        Scooter::find($id)->delete();
            return redirect('redirects');
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect('redirects');
    }




    public function deleteBooking($id)
    {
        Booking::find($id)->delete();
        return redirect('redirects');
    }

    public function deleteBookinguser($id)
    {
    //    Booking::find($id)->delete();
        $booking = Booking::find($id);
        if($booking != null) {
            $booking->delete();
            return redirect()->back();
        }

        return "Ошибка удаления";
    }


    public function deleteOrder($id)
    {
        Order::find($id)->delete();
        return redirect('redirects');
    }

    public function deleteExt($id)
    {
        Extradition::find($id)->delete();
        return redirect('redirects');
    }



    public function shift($id,Extradition $extradition)
    {
        $extradition = Extradition::where('id', $id)->get();

        foreach ($extradition as $key => $value) {
            Otchet::create([
                'ima' => $value -> ima,
                'surname' => $value -> surname,
                'name' => $value -> name,
                'issue_id' => $value -> issue_id,
                'timestart' => $value -> timestart,
                'timeend' => $value -> timeend,
                'price' => $value -> price,
                'manager' => $value -> manager,
            ]);
            Extradition::find($id)->delete();

            return redirect('redirects');
        }
    }

//    public function shiftbooking($id,Booking $booking)
//    {
//        $booking = Booking::where('id', $id)->get();
//
//        foreach ($booking as $key => $value) {
//            Order::create([
//                'ima' => $value -> ima,
//                'surname' => $value -> surname,
//                'name' => $value -> name,
//                'issue_id' => $value -> issue_id,
//                'timestart' => $value -> timestart,
//                'timeend' => $value -> timeend,
//
//            ]);
//            Booking::find($id)->delete();
//
//            return redirect('redirects');
//        }
//    }

        public function userEdit($id)
        {
            $role=Auth::user()->role;
            if($role == '1') {
                $current = User::find($id);
                return view('admin.userm.create')->with('user', $current);
            }
            else
            {
                return view('welcome');
            }
        }
        public function userEditid($id, Request $request)
        {
            $user = User::find($id);
            $user -> name = $request ['name'];
            $user -> email = $request ['email'];
            $user -> role = $request ['role'];
            $user -> save();
            return redirect('redirects');
        }

        public function otchetExport()
        {
            return Excel::download(new OtchetExport, 'otchet.xlsx');
        }


}
