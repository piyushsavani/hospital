<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('layouts.admin.department', compact('departments'));
    }

    public function addDepartment()
    {
        return view('layouts.admin.add-department');
    }

    public function saveDepartment(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:800',
            'details' => 'required|string|max:8000'
        ]);    

        if($validator->fails()) {
           return redirect()->back();
        } else {

           Department::create([
            'name' => $request->name,
            'description' =>$request->description,
            'details' => $request->details,
        ]);

        return redirect('admin/departments')->with('message','Department Added Successfully');
    }
    }

    public function editDepartment($departmentId)   
    {
        $department = Department::findOrFail($departmentId);
        return view('layouts.admin.edit-department', compact('department'));
    }

    public function updateDepartment(Request $request, $departmentId)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:800',
            'details' => 'required|string|max:2000'
        ]);    

        if($validator->fails()) {
           return redirect()->back();
        } else {

            $department = Department::find($departmentId);

            if($department) {
                $department->update([
                    'name' => $request->name,
                    'description' =>$request->description,
                    'details' => $request->details,
                ]);

                return redirect('admin/departments')->with('message','Department Updated Successfully');
            } else {
                return redirect()->back()->with('message','No Such Deoartment Found');
            }        
    }
    }

    public function deleteDepartment($departmentId)
    {
        $department = Department::findOrFail($departmentId);
        if($department){
            $department->delete();
            return redirect('/admin/departments')->with('message','department Deleted Successfully');
        }
    }
}
