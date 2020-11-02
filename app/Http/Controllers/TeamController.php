<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Carbon\Carbon;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $team   = Team::all();
        return view('backend.team.all',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'title'             =>  'required',
        'subtitle'       =>  'required',
        'image'         =>  'required|mimes:jpg,jpeg,png'
      ]);
      $image  = $request->file('image');
      $slug     = str_slug('$request->title');
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/team')){
                  mkdir('uploads/team',0777,true);
            }

            $image->move('uploads/team',$imagename);
        }else{
          $imagename  = 'default.png';
        }

        $team   = new Team();
        $team->title  = $request->title;
        $team->subtitle   = $request->subtitle;
        $team->	facebook  = $request->facebook;
        $team->twitter  = $request->twitter;
        $team->image    = $imagename;
        $team->save();
        return redirect()->route('team.index')->with('successMsg','Team Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team   =   Team::find($id);
        return view('backend.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'title'             =>  'required',
        'subtitle'       =>  'required',
        'image'         =>  'mimes:jpg,jpeg,png'
      ]);
      $image  = $request->file('image');
      $slug     = str_slug('$request->title');
      $team   =   Team::find($id);
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/team')){
                  mkdir('uploads/team',0777,true);
            }
            unlink('uploads/team/'.$team->image);

            $image->move('uploads/team',$imagename);
        }else{
          $imagename  = $team->image;
        }

        $team->title  = $request->title;
        $team->subtitle   = $request->subtitle;
        $team->facebook  = $request->facebook;
        $team->twitter  = $request->twitter;
        $team->image    = $imagename;
        $team->save();
        return redirect()->route('team.index')->with('successMsg','Team Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $team   =   Team::find($id);
        unlink('uploads/team/'.$team->image);
        $team->delete();
        return redirect()->back()->with('successMsg','Team Successfully Deleted');
    }
}
