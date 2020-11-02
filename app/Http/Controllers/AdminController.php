<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Slider;
use App\Team;
use App\Reservation;
class AdminController extends Controller
{
  public function __construct(){
         $this->middleware('auth');
   }


   public function index(){
     $totalUser = User::where('status',1)->count('id');
     $totalSlider   = Slider::all()->count('id');
     $totalTeam    =  Team::all()->count('id');
     $totalReserv   = Reservation::where('status',0)->count('id');
     return view('backend.dashboard.index',compact('totalUser','totalSlider','totalTeam','totalReserv'));
   }
}
