<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\doctor;

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
}
