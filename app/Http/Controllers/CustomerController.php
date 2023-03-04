<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index',['customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');

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
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required',
            'photo'=>'nullable'
        ]);

   /*      if($request->hasFile('photo')){
            $imgPath=$request->file('photo')->store('public/images');
        }else{
            $imgPath="null";
        } */
        $customer=new Customer;
        $customer->full_name=$request->full_name;
        $customer->email=$request->email;
        $customer->password=sha1($request->password);
        $customer->mobile=$request->mobile;
        $customer->address=$request->address;
        $customer->photo = $request->photo;

        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/customers'), $filename);
            $customer->photo = $filename;
        }



        $customer->save();

        // $ref=$request->ref;
        // if($ref=='front'){
        //     return redirect('register')->with('success','Data has been saved.');
        // }

        return redirect('admin/customer')->with('message','Customer has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::find($id);
        return view('customer.show',['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customer.edit',['customer'=>$customer]);
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
            'full_name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
        ]);

        $customer= Customer::find($id);
        $customer->full_name=$request->full_name;
        $customer->email=$request->email;
        $customer->mobile=$request->mobile;
        $customer->address=$request->address;
        $customer->photo = $request->photo;

        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/customers'), $filename);
            $customer->photo = $filename;
        }
        else{
            $filename = $request->prev_photo;
        }


        $customer->save();


        return redirect('admin/customer')->with('message','Customer has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    /*     Customer::where('id',$id)->delete();
        return redirect('admin/customer')->with('message','Customer has been deleted successfully!'); */

        $customer = Customer::find($id);

        $path = 'images/customers'.$customer->photo;
        if(File::exists($path)){
            File::delete($path);
        }

        $customer->delete();

        return redirect('admin/customer')->with('message','Customer has been deleted successfully!');

    }

      // Login
      function login(){
        return view('frontend_login');
    }


    function customer_login(Request $request){
        $email=$request->email;
        $pwd=$request->password;
        $customer = Customer::where(['email' => $email])->first();

        if($customer && Hash::check($pwd, $customer->password)){
            session(['customerlogin'=>true,'data'=>$customer]);
            return redirect('/');
        } else {
            return redirect('login')->with('error','Invalid email/password!!');
        }
    }


    // register
    function register(){
        return view('register');
    }

    function customer_register(Request $request){
        // validate customer input
        $validated = $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|unique:customers,email|max:255',
            'password' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        // create new customer record
        $customer = new Customer();
        $customer->full_name = $validated['full_name'];
        $customer->email = $validated['email'];
        $customer->mobile = $validated['mobile'];
        $customer->address = $validated['address'];
        $customer->password = Hash::make($validated['password']);
        $customer->save();

        // check if registration was successful
        if($customer){
            return redirect('/login')->with('success', 'Registration successful. Please log in.');
        } else {
            // registration failed
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }



    function logout(){
        session()->forget(['customerlogin','data']);
        return redirect('login');
    }

}
