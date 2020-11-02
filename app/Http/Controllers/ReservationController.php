<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
class ReservationController extends Controller
{
      public function reserve(Request $request){
          $this->validate($request,[
            'name'    =>  'required',
            'number'    =>  'required',
            'email'    =>  'required|email',
            'address'    =>  'required',
            'datepicker'    =>  'required',
          ]);

          $reservation = new Reservation();
          $reservation->name  = $request->name;
          $reservation->	phone  = $request->number;
          $reservation->	email  = $request->email;
          $reservation->address  = $request->address;
          $reservation->date_and_time  = $request->datepicker;
          $reservation->status  = false;
          $reservation->save();
          Toastr::success('Reservation Request Sent Successfully. We will confirm to you shortly ','Success',["positionClass" =>"toast-top-center"]);
          return redirect()->back();
      }
}
