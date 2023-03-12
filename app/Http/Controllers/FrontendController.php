<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('index', compact('doctors'));
    }

    public function home()
    {
        $appointment = Appointment::where('user_id', auth()->user()->id)->first();
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('home', compact('doctors','departments','appointment'));
    }

    public function appointment(Request $request)
    {
        if(Auth::check()){
            $appointment = new Appointment;

            $appointment->name = $request->name;
            $appointment->email = $request->email;
            $appointment->phone = $request->phone;
            $appointment->date = $request->date;
            $appointment->message = $request->message;
            $appointment->doctor_id = $request->doctor;
            $appointment->department_id = $request->department;
            $appointment->user_id = auth()->user()->id;
            $appointment->save();
        }    
        
        return redirect()->back()->with('message','Appointment Booked Successfully');
    }

    public function yourAppointment()
    {
        $appointments = Appointment::where('user_id', auth()->user()->id)->get();
        return view('layouts.inc.frontend.your-appointment', compact('appointments'));
    }
}
