<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Service;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
      // About Us

      function about_us(){
        $roomType=RoomType::all();
        $service=Service::all();
        $testimonials=Testimonial::all();
        $staff=Staff::all();
        $customer=Customer::all();
        return view('about_us',['roomType'=>$roomType, 'service'=>$service, 'testimonials'=>$testimonials, 'staff'=>$staff,'customer'=>$customer ]);
    }

    // Contact Us Form
    function contact_us(){
        return view('contact_us');
    }

    // Save Contact Us Form
    function save_contactus(Request $request){
        $request->validate([
            'full_name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'msg'=>'required',
        ]);

        $data = array(
            'name'=>$request->full_name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'msg'=>$request->msg,
        );

        Mail::send('mail', $data, function($message){
            $message->to('ashehade9.as@gmail.com', 'User')->subject('Contact Us Query');
            $message->from('ashehade9@gmail.com','Admin');
        });

        return redirect('page/contact-us')->with('message','Mail has been sent!.');
    }
}
