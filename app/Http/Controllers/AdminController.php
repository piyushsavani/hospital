<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin');
    }

    public function allDoctors()
    {
        $doctors = Doctor::all();
        return view('layouts.inc.backend.doctors', compact('doctors'));
    }

    public function addDoctor()
    {
        $speciality = Department::all();
        return view('layouts.inc.backend.add-doctor', compact('speciality'));
    }

    public function saveDoctor(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:11|min:10',
            'speciality' => 'required|string|max:50'
        ]);

        if($validator->fails()) {
            return redirect()->back();
        } else {

            if ($request->file('image')) {
                $path = 'admin/uploads/';

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move($path,$filename);
            }

            Doctor::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'speciality' => $request->speciality,
                'image' => $path.$filename
            ]);

            return redirect('/admin/doctors')->with('message','Doctor Added Successfully');
        }
    }

    public function editDoctor($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        return view('layouts.inc.backend.editdoctor', compact('doctor'));
    }

    public function updateDoctor(Request $request, $doctorId)
    {

            $validator = Validator::make($request->all(),[
                'name' => 'required|string|max:50',
                'phone' => 'required|string|max:11|min:10',
                'speciality' => 'required|string|max:50'
            ]);
    
            if($validator->fails()) {
                return view('layouts.inc.backend.editdoctor', ['errors' => $validator->errors()]);
            } else {     

                $doctor = Doctor::findOrFail($doctorId);

                if($doctor) {  
                    
                    $doctor->name = $request->name;
                    $doctor->phone = $request->phone;
                    $doctor->speciality = $request->speciality;

                if ($request->hasFile('image')) {           
                    if(File::exists($doctor->image)){
                        File::delete($doctor->image);
                    } 

                $path = 'admin/uploads/';

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move($path,$filename); 
                $doctor->image = $path.$filename;
                }
                                 
                $doctor->update();                     

            return redirect('/admin/doctors')->with('message','Doctor Updated Successfully');
            
                }
            }
        }    
    

    public function deleteDoctor($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        if($doctor){
            $doctor->delete();
            return redirect('/admin/doctors')->with('message','Doctor Deleted Successfully');
        }
    }
}
