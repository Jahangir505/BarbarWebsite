<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factgrid;
use Carbon\Carbon;
class FactgridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factgrid   =   Factgrid::where('status',1)->get();
        return view('backend.factgrid.all',compact('factgrid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.factgrid.create');
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
          'title'     =>    'required',
          'number'    =>    'required',
          'icon'      =>    'required'
      ]);

      $factgrid           = new Factgrid();
      $factgrid->title    =   $request->title;
      $factgrid->number   =   $request->number;
      $factgrid->icon     =   $request->icon;
      $factgrid->save();
      return redirect()->route('factgrid.index')->with('successMsg','Factgrid Successfully Created');

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
        $factgrid   =   Factgrid::find($id);
        return view('backend.factgrid.edit',compact('factgrid'));
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
        'title'     =>  'required',
        'number'    =>    'required',
        'icon'      =>    'required'
    ]);
    $factgrid           = Factgrid::find($id);
    $factgrid->title    =   $request->title;
    $factgrid->number   =   $request->number;
    $factgrid->icon     =   $request->icon;
    $factgrid->save();
    return redirect()->route('factgrid.index')->with('successMsg','Factgrid Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = Factgrid::where('status',1)->where('id',$id)->update([
        'status' => 0
      ]);

      if($delete){
        return redirect()->route('factgrid.index')->with('successMsg','Factgrid Successfully Deleted');
      }else{
            return redirect()->route('factgrid.index');
      }
    }
}
