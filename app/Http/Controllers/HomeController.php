<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $roomType=RoomType::all();
        $service=Service::all();
        $testimonials=Testimonial::all();
        $customer = Customer::with('customerTest')->get();
        $banners = Banner::where('publish_status', '1')->get();
        $rooms=Room::all();

        $customer=Customer::all();
        return view('home',['roomType'=>$roomType,'service'=>$service, 'testimonials'=>$testimonials, 'banners'=>$banners, 'customer'=>$customer, 'rooms'=>$rooms, 'data'=>$customer,]);
    }





        // Service Detail Page
        function service_detail(Request $request, $id){
            $service=Service::find($id);
            $service=Service::all();
            return View('service_detail',['service'=>$service]);
        }

        function services(){
            $service=Service::all();
            return View('service_detail',['service'=>$service]);
        }


            // Add Testimonial
    function add_testimonial(){

        return view('add-testimonial');
    }

        // Save Testimonial
        function save_testimonial(Request $request){
            try {
                $customerId = session('data')[0]->id;

                $data = new Testimonial;
                $data->testi_cont = $request->testi_cont;
                $data->customer_id = $customerId;

                $data->save();

                return redirect('customer/add-testimonial')->with('message', 'Thank you for your feedback!');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred! ');
            }
        }




        public function frontend_booking(Request $request)
        {
            $request->validate([
                'customer_id'=>'required',
                'room_id'=>'required',
                'checkin_date'=>'required',
                'checkout_date'=>'required',
                'total_adults'=>'required',
            ]);

                $data=new Booking;
                $data->customer_id=$request->customer_id;
                $data->room_id=$request->room_id;
                $data->checkin_date=$request->checkin_date;
                $data->checkout_date=$request->checkout_date;
                $data->total_adults=$request->total_adults;
                $data->total_children=$request->total_children;
                if($request->ref=='front'){
                    $data->ref='front';
                }else{
                    $data->ref='front';
                }
                $data->save();
                return redirect('/')->with('message','Your booking has been added successfully!.');
        }



}
