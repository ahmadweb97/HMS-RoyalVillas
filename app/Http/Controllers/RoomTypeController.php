<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Models\RoomTypeImage;
use Illuminate\Support\Facades\File;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomType = RoomType::all();
        return view('room-type.index',['roomType'=>$roomType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room-type.create');

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
            'price'=>'required',
            'detail'=>'required',
        ]);

        $data = new RoomType;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->detail = $request->detail;


    /*     if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/room_type'), $filename);
            $data->photo = $filename;
        } */

        if($request->hasFile('photo')){
            $uploadPath = 'images/room_type/';


            $i=1;
            foreach($request->file('photo') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().$i++.'.'.$extension; // unique name should be created
                $imageFile->move($uploadPath, $fileName);
                $finalImagePathName = $uploadPath.$fileName;

           /*      $imgData=new RoomTypeImage;
                $imgData->room_type_id=$data->id;
                $imgData->img_src=$finalImagePathName;
                $imgData->img_alt=$request->title;
                $imgData->save(); */
                $data->save();
                $data->roomTypeImages()->create([
                    'room_type_id' => $data->id,
                    'img_src' =>  $finalImagePathName,
                    'img_alt' => $request->title,


                ]);
            }
        }

        $data->save();




        return redirect('admin/room-type')->with('message','Room Type has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomType = RoomType::find($id);
        return view('room-type.show',['roomType'=>$roomType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $roomType = RoomType::find($id);
       // $images = $roomType->roomTypeimgs()->get();

        return view('room-type.edit',['roomType'=>$roomType]);


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

        $roomType = RoomType::find( $id);
        $roomType->title = $request->title;
        $roomType->price = $request->price;
        $roomType->detail = $request->detail;


        if($request->hasFile('photo')){
            $uploadPath = 'images/room_type/';


            $i=1;
            foreach($request->file('photo') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().$i++.'.'.$extension; // unique name should be created
                $imageFile->move($uploadPath, $fileName);
                $finalImagePathName = $uploadPath.$fileName;

                $roomType->save();
                $roomType->roomTypeImages()->create([
                    'room_type_id' => $roomType->id,
                    'img_src' =>  $finalImagePathName,
                    'img_alt' => $request->title,


                ]);
            }
        }
        else{
            $fileName = $request->prev_photo;
        }

        $roomType->save();




        return redirect('admin/room-type')->with('message','Room Type has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RoomType::where('id',$id)->delete();

        return redirect('admin/room-type')->with('message','Room Type has been deleted successfully!');

    }

    public function destroyImg(int $roomType_image_id)
    {

        $roomTypeImage = RoomTypeImage::findOrFail($roomType_image_id);

        if($roomTypeImage){

           if(File::exists($roomTypeImage->img_src)){
            File::delete($roomTypeImage->img_src);
           }
        }
        $roomTypeImage->delete();

        return redirect()->back()->with('message', 'Room Type image is deleted! ');

    }
}
