<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=Banner::all();
        return view('banner.index',['banner'=>$banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner_src'=>'required|image',
            'alt_text'=>'required',
            'publish_status'=>'nullable',
        ]);

        $banner=new Banner;
        $banner->alt_text=$request->alt_text;
        $banner->publish_status = $request->publish_status ? 1 : 0;
        $banner->banner_src=$request->banner_src;


       if($request->hasFile('banner_src')){

            $file = $request->file('banner_src');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/banners'), $filename);
            $banner->banner_src = $filename;
        }

        $banner->save();

        return redirect('admin/banner')->with('message','Banner has been added successfully!.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner=Banner::find($id);
        return view('banner.show',['banner'=>$banner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Banner::find($id);
        return view('banner.edit',['banner'=>$banner]);
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
            'prev_photo'=>'required',
            'alt_text'=>'required',
            'publish_status'=>'nullable',

        ]);

        $banner=Banner::find($id);
        $banner->alt_text=$request->alt_text;
        $banner->publish_status = $request->publish_status ? 1 : 0;
        $banner->banner_src=$request->banner_src;

        if($request->hasFile('banner_src')){

            $file = $request->file('banner_src');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/banners'), $filename);
            $banner->banner_src = $filename;
        }
        else{
            $filename = $request->prev_photo;
        }

        $banner->save();

        return redirect('admin/banner')->with('message','Banner has been updated successfully!.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::where('id',$id)->delete();
        return redirect('admin/banner')->with('message','Banner has been deleted successfully!.');

    }
}
