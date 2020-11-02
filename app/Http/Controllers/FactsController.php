<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facts;
use Carbon\Carbon;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts  = Facts::where('status',1)->get();
        return view('backend.facts.all',compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.facts.create');
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
          'description'   =>  'required',
          'image'   =>  'required|mimes:jpeg,jpg,png'
        ]);
        // Get Image Name
        $image  = $request->file('image');
        $slug     = str_slug('$request->title');
          if(isset($image)){
              $currentDate  =  Carbon::now()->toDateString();
              $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

              if(!file_exists('uploads/facts')){
                    mkdir('uploads/facts',0777,true);
              }

              $image->move('uploads/facts',$imagename);
          }else{
            $imagename  = 'default.png';
          }

          $facts  = new Facts();
          $facts->title   = $request->title;
          $facts->description   = $request->description;
          $facts->image   =   $imagename;
          $facts->save();
          return redirect()->route('facts.index')->with('successMsg','Facts Successfully Created');

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
        $facts  =   Facts::find($id);
        return view('backend.facts.edit',compact('facts'));
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
        'description'   =>  'required',
        'image'   =>  'mimes:jpeg,jpg,png'
      ]);

      $image  = $request->file('image');
      $slug     = str_slug('$request->title');
      $facts    = Facts::find($id);
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/facts')){
                  mkdir('uploads/facts',0777,true);
            }
            unlink('uploads/facts/'.$facts->image);
            $image->move('uploads/facts',$imagename);
        }else{
          $imagename  = $facts->image;
        }

        $facts->title   = $request->title;
        $facts->description   = $request->description;
        $facts->image   =   $imagename;
        $facts->save();
        return redirect()->route('facts.index')->with('successMsg','Facts Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = Facts::where('status',1)->where('id',$id)->update([
        'status' => 0
      ]);

      if($delete){
        return redirect()->route('facts.index')->with('successMsg','Facts Successfully Deleted');
      }else{
            return redirect()->route('facts.index')->with('successMsg','Facts Deleted Faild!');
      }

    }

}
