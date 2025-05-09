<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller

{
    public function redirect()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype =="0")
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }

        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }



    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;       
        $data->appointment_date = $request->appointment_date;
        $data->status = 'In Progress';
        
        if (Auth::id())
        {
            $data->patient_id = Auth::user()->id;
        }
        else
        {
            return redirect('login');
        }
        $data->save();
       
        return redirect()->back()->with('message', 'Appointment Request Successful');
    }

    public function myappointment()
    {
        if (Auth::id())
        {
            $userid = Auth::user()->id;
            $appointments = appointment::where('patient_id', $userid)->get();
            return view('user.my_appointment', compact('appointments'));
        }
        else
        {
            return redirect('login');
        }
    }
    

}

