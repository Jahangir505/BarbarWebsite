<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialMedia;
class ManageController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
       $this->middleware('superadmin');
    }

    public function social(){
      $data = SocialMedia::find(1);
      return view('backend.manage.social',compact('data'));
    }

    public function update(){
      $update = SocialMedia::where('sm_status',1)->where('id',1)->update([
        'sm_facebook' =>$_POST['facebook'],
        'sm_twetter' =>$_POST['twitter'],
        'sm_google' =>$_POST['google'],
        'sm_skype' =>$_POST['skype'],
        'sm_rss' =>$_POST['rss'],
        'sm_linkedin' =>$_POST['linkedin'],
        'sm_phone' =>$_POST['phone'],
        'sm_email' =>$_POST['email'],
        'sm_address' =>$_POST['address'],
      ]);

      if($update){
        return redirect('admin/manage/social');
      }else{
        return redirect('admin/manage/social');
      }
    }
}
