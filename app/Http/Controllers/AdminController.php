<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\doctor;
use App\Models\Appointment;
use App\Models\User;



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
    
    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function showusers()
    {
        $data = User::all();
        return view('admin.showusers', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
