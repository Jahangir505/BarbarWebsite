<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Carbon\Carbon;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $slider = Slider::all();
        return view('backend.slider.all',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.slider.create');
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

            if(!file_exists('uploads/slider')){
                  mkdir('uploads/slider',0777,true);
            }

            $image->move('uploads/slider',$imagename);
        }else{
          $imagename  = 'default.png';
        }

        $slider   = new Slider();
        $slider->title  = $request->title;
        $slider->sub_title   = $request->subtitle;
        $slider->image    = $imagename;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','Slider Successfully Created');
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
        $slider  = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
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
      $slider =  Slider::find($id);
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/slider')){
                  mkdir('uploads/slider',0777,true);
            }
            
            $image->move('uploads/slider',$imagename);
        }else{
          $imagename  =$slider->image;
        }

        $slider->title  = $request->title;
        $slider->sub_title   = $request->subtitle;
        $slider->image    = $imagename;
        $slider->save();
        return redirect()->route('slider.index')->with('successMsg','Slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slider   =   Slider::find($id);
        unlink('uploads/slider/'.$slider->image);
        $slider->delete();
        return redirect()->back()->with('successMsg','Slider Successfully Deleted');
    }
}
