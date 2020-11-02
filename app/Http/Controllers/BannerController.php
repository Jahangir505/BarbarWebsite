<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Carbon\Carbon;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $banner   = Banner::all();
      return view('backend.banner.all',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
          'subtitle'   =>  'required',
          'description'   =>  'required',
          'icon'   =>  'required',
          'image'   =>  'required|mimes:jpeg,jpg,png',
        ]);

        $image  = $request->file('image');
        $slug     = str_slug('$request->title');
          if(isset($image)){
              $currentDate  =  Carbon::now()->toDateString();
              $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

              if(!file_exists('uploads/banner')){
                    mkdir('uploads/banner',0777,true);
              }

              $image->move('uploads/banner',$imagename);
          }else{
            $imagename  = 'default.png';
          }

          $banner  = new   Banner();
          $banner->title  = $request->title;
          $banner->subtitle   = $request->subtitle;
          $banner->description  = $request->description;
          $banner->icon   = $request->icon;
          $banner->image  = $imagename;
          $banner->save();
          return redirect()->route('banner.index')->with('successMsg','Banner Successfully Created');

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
        $banner = Banner::find($id);
        return view('backend.banner.edit',compact('banner'));
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
        'subtitle'   =>  'required',
        'description'   =>  'required',
        'icon'   =>  'required',
      ]);

      $image  = $request->file('image');
      $slug     = str_slug('$request->title');
      $banner  = Banner::find($id);
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/banner')){
                  mkdir('uploads/banner',0777,true);
            }
            unlink('uploads/banner/'.$banner->image);
            $image->move('uploads/banner',$imagename);
        }else{
          $imagename  = $banner->image;
        }

 
        $banner->title  = $request->title;
        $banner->subtitle   = $request->subtitle;
        $banner->description  = $request->description;
        $banner->icon   = $request->icon;
        $banner->image  = $imagename;
        $banner->save();
        return redirect()->route('banner.index')->with('successMsg','Banner Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
