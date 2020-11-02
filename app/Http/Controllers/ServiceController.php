<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Carbon\Carbon;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $service  = Service::all();
      return view('backend.service.all',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
          'title'   =>  'required',
          'subtitle'  =>  'required',
          'price'   =>  'required'
        ]);

        $service  = new Service();
        $service->title   =   $request->title;
        $service->subtitle  = $request->subtitle;
        $service->price  = $request->price;
        $service->save();
        return redirect()->route('service.index')->with('successMsg','Service Successfully Created');
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
        $service  =   Service::find($id);
        return view('backend.service.edit',compact('service'));
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
        'title'   =>  'required',
        'subtitle'  =>  'required',
        'price'   =>  'required'
      ]);
      $service = Service::find($id);
      $service->title   =   $request->title;
      $service->subtitle  = $request->subtitle;
      $service->price  = $request->price;
      $service->save();
      return redirect()->route('service.index')->with('successMsg','Service Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services   =   Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('successMsg','Service Successfully Deleted');
    }
}
