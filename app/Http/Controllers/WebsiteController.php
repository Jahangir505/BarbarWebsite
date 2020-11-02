<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\SocialMedia;
use Carbon\Carbon;
use App\Slider;
use App\Team;
use App\Gallery;
use App\About;
use App\Facts;
use App\Factgrid;
use App\Banner;
use Session;
use App\Service;
use App\ServiceOn;
class WebsiteController extends Controller
{
    public function __construct(){

    }

    public function index(){
      $facts    =  Facts::find(1);
      $factgrid   =   Factgrid::where('status',1)->limit(3)->get();
      $teams   =  Team::where('status',1)->orderBy('id','DESC')->limit(4)->get();
      $slider   = Slider::all();
      $media = SocialMedia::find(1);
      $about  = About::find(1);
      $banner   = Banner::find(1);
      $services = ServiceOn::where('status',1)->limit(3)->get();
        return view('frontend.index',compact('media','slider','teams','about','banner','facts','factgrid','services'));
    }
    

    public function about(){
      $teams   =  Team::all();
      $media = SocialMedia::find(1);
      $banner   = Banner::find(2);
      return view('frontend.about',compact('media','teams','banner'));
    }


    public function contact(){
      $media = SocialMedia::find(1);
      return view('frontend.contact',compact('media'));
    }



    public function service(){
      $facts    =  Facts::find(1);
      $factgrid   =   Factgrid::where('status',1)->get();
      $services = ServiceOn::all();
      $media = SocialMedia::find(1);
      return view('frontend.service',compact('media','services','facts','factgrid'));
    }


    public function gellary(){
      $gallerys   =   Gallery::all();
      $media = SocialMedia::find(1);
      return view('frontend.gellary',compact('media','gallerys'));
    }



    public function insert_contact(Request $request){
      $this->validate($request,[
        'name'  =>  'required',
        'number'  =>  'required',
      ],[
        'name.required' => 'Please enter your name!',
        'number.required' => 'Please enter your number!',
      ]);
      $insert = Contact::insert([
        'name'  =>  htmlentities($_POST['name'],ENT_QUOTES),
        'number'  =>  htmlentities($_POST['number'],ENT_QUOTES),
        'email'  =>  htmlentities($_POST['email'],ENT_QUOTES),
        'subject'  =>  htmlentities($_POST['subject'],ENT_QUOTES),
        'description'  =>  htmlentities($_POST['description'],ENT_QUOTES),
        'created_at'  =>  Carbon::now()->toDateTimeString()
      ]);
      if($insert){
        Session::flash('success','value');
        return redirect('contact');
      }else{
        Session::flash('error','value');
        return redirect('contact');
      }
    }
}
