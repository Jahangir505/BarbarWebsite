<?php

namespace App\Http\Controllers;

use App\Notifications\ReservationConfirmed;
use Illuminate\Http\Request;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
class ReserveshowController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
     $this->middleware('superadmin');
  }

  public function index(){
      $all = Reservation::all();
      return view('backend.reservation.all',compact('all'));
  }

  public function status($id){
    $reservation = Reservation::find($id);
    $reservation->status  = true;
    $reservation->save();
    Notification::route('mail', $reservation->email)
            ->notify(new ReservationConfirmed());
    Toastr::success('Reservation Confirm Successfully. ','Success',["positionClass" =>"toast-top-center"]);
    return redirect()->back();
  }

  public function destroy($id){
    Reservation::find($id)->delete();
    Toastr::success('Reservation Successfully deleted. ','Success',["positionClass" =>"toast-top-center"]);
    return redirect()->back();
  }

}
