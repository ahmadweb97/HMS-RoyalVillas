<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Service::all();
        return view('service.index',['service'=>$service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'title'=>'required',
            'small_desc'=>'required',
            'detail_desc'=>'required',
            'photo'=>'required',
        ]);

        $service=new Service;
        $service->title=$request->title;
        $service->small_desc=$request->small_desc;
        $service->detail_desc=$request->detail_desc;
        $service->photo=$request->photo;

        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/services'), $filename);
            $service->photo = $filename;
        }

        $service->save();

        return redirect('admin/service')->with('message','Service has been added successfully!.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);
        return view('service.show',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('service.edit',['service'=>$service]);
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
            'title'=>'required',
            'small_desc'=>'required',
            'detail_desc'=>'required'
        ]);

        $service= Service::find($id);
        $service->title=$request->title;
        $service->small_desc=$request->small_desc;
        $service->detail_desc=$request->detail_desc;
        $service->photo=$request->photo;

        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/services'), $filename);
            $service->photo = $filename;
        }
        else{
            $filename = $request->prev_photo;
        }


        $service->save();


        return redirect('admin/service')->with('message','Service has been updated successfully!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id',$id)->delete();
        return redirect('admin/service')->with('message','Service has been deleted successfully!.');


    }
}
