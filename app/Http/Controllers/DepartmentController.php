<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments=Department::all();
        return view('Department.index',compact('departments'));
    }
    public function createDepartment()
    {
        return view('Department.createDepartment');
    }
    public function addDepartemnt(Request $request)
    {
        $department=new Department();
        $department->name=$request->nombre;
		$department->description=$request->descripcion;

        $department->save();
        return redirect()->route('indexDepartamentos');
    } 
}
