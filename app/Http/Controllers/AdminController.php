<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\doctor;
use App\Models\Appointment;



class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }


    public function upload(Request $request)
    {
        $doctor = new doctor;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->specialization = $request->specialization;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }

    public function viewappointment()
    {
        $data = appointment::all();
        return view('admin.viewappointment' , compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = Appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }
    

}
