<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceOn;
use Carbon\Carbon;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = ServiceOn::all()->where('status',1);
        return view('backend.service-ons.all',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service-ons.create');
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
          'title'         => 'required',
          'description'   => 'required',
          'icon'          => 'required'
        ]);

        $services = new ServiceOn();
        $services->title        = $request->title;
        $services->description  = $request->description;
        $services->icon         = $request->icon;
        $services->save();
        return redirect()->route('service-on.index')->with('successMsg','Service Successfully Created');
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
        $serv = ServiceOn::find($id);

        return view('backend.service-ons.edit',compact('serv'));
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

      $request->validate([
        'title'         => 'required',
        'icon'          => 'required'
      ]);

      $services = ServiceOn::find($id);
      $services->title        = $request->title;
      $services->description  = $request->description;
      $services->icon         = $request->icon;
      $services->save();
      return redirect()->route('service-on.index')->with('successMsg','Service Successfully Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = ServiceOn::where('status',1)->where('id',$id)->update([
        'status' => 0
      ]);

      if($delete){
        return redirect()->route('service-on.index')->with('successMsg','Service Successfully Deleted');
      }else{
            return redirect()->route('service-on.index')->with('successMsg','Service Deleted Faild!');
      }

    }
}


01747630696
