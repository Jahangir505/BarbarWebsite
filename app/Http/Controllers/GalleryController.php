<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Carbon\Carbon;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $all  =   Gallery::all();
        return view('backend.gallery.all',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
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

            if(!file_exists('uploads/gallery')){
                  mkdir('uploads/gallery',0777,true);
            }

            $image->move('uploads/gallery',$imagename);
        }else{
          $imagename  = 'default.png';
        }

        $gallery   = new Gallery();
        $gallery->title  = $request->title;
        $gallery->subtitle   = $request->subtitle;
        $gallery->image    = $imagename;
        $gallery->save();
        return redirect()->route('gallery.index')->with('successMsg','Gallery Successfully Created');
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
        $gallery  = Gallery::find($id);
        return view('backend.gallery.edit',compact('gallery'));
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
      $gallery  = Gallery::find($id);
        if(isset($image)){
            $currentDate  =  Carbon::now()->toDateString();
            $imagename   =  $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/gallery')){
                  mkdir('uploads/gallery',0777,true);
            }
            unlink('uploads/gallery/'.$gallery->image);
            $image->move('uploads/gallery',$imagename);
        }else{
          $imagename  = $gallery->image;
        }

        $gallery->title  = $request->title;
        $gallery->subtitle   = $request->subtitle;
        $gallery->image    = $imagename;
        $gallery->save();
        return redirect()->route('gallery.index')->with('successMsg','Gallery Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gallery   =   Team::find($id);
        unlink('uploads/gallery/'.$gallery->image);
        $gallery->delete();
        return redirect()->back()->with('successMsg','Gallery Successfully Deleted');
    }
}
