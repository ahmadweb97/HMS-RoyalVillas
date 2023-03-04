<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Department;
use App\Models\StaffPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff=Staff::all();
        return view('staff.index',['staff'=>$staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=Department::all();
        return view('staff.create',['department'=>$department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff=new Staff;

       // $imgPath=$request->file('photo')->store('public/imgs');


        $staff->full_name=$request->full_name;
        $staff->department_id=$request->department_id;
        $staff->photo=$request->photo;
        $staff->bio=$request->bio;
        $staff->salary_type=$request->salary_type;
        $staff->salary_amt=$request->salary_amt;


        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/staff'), $filename);
            $staff->photo = $filename;
        }
        $staff->save();

        return redirect('admin/staff')->with('message','Staff has been added successfully!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff=Staff::find($id);
        return view('staff.show',['staff'=>$staff]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department=Department::all();
        $staff=Staff::find($id);
        return view('staff.edit',['staff'=>$staff,'department'=>$department]);
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
        $staff=Staff::find($id);

        $staff->full_name=$request->full_name;
        $staff->department_id=$request->department_id;
        $staff->photo=$request->photo;
        $staff->bio=$request->bio;
        $staff->salary_type=$request->salary_type;
        $staff->salary_amt=$request->salary_amt;

        if($request->hasFile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move(public_path('images/staff'), $filename);
            $staff->photo = $filename;
        }
        else{
            $filename = $request->prev_photo;
        }

        $staff->save();

        return redirect('admin/staff')->with('message','Staff has been updated successfully!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::where('id',$id)->delete();
        return redirect('admin/staff')->with('message','Staff has been deleted successfully!.');

    }

    // All Payments
    function all_payments(Request $request,$staff_id){
        $staff_payment=StaffPayment::where('staff_id',$staff_id)->get();
        $staff=Staff::find($staff_id);
        return view('staffpayment.index',['staff_id'=>$staff_id,'staff_payment'=>$staff_payment,'staff'=>$staff]);
    }

    // Add Payment
    function add_payment($staff_id){
        return view('staffpayment.create',['staff_id'=>$staff_id]);
    }

    function save_payment(Request $request,$staff_id){

        $staff_payment=new StaffPayment;
        $staff_payment->staff_id=$staff_id;
        $staff_payment->amount=$request->amount;
        $staff_payment->payment_date=$request->amount_date;
        $staff_payment->save();

        return redirect('admin/staff/payments/'.$staff_id)->with('message','Staff payment has been added successfully!.');
    }

    public function delete_payment($id,$staff_id)
    {
       StaffPayment::where('id',$id)->delete();
       return redirect('admin/staff/payments/'.$staff_id)->with('message','Staff payment has been deleted successfully!.');
    }
}
