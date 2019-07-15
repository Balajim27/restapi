<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
    	$employees = new Employee();

    	$employees->fname = $request->input('fname');
    	$employees->lname = $request->input('lname');
    	$employees->email = $request->input('email');
    	$employees->password = $request->input('password');

    	$employees->save();
    	return response()->json($employees);

    }

    public function show(Request $request)
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function showbyid($id)
    {
        $employees = Employee::find($id);
        return response()->json($employees);
    }

    public function updatebyid(Request $request, $id)
    {
        $employees = Employee::find($id);
        $employees->fname = $request->input('fname');
        $employees->lname = $request->input('lname');
        $employees->email = $request->input('email');
        $employees->password = $request->input('password');

        $employees->save();
        return response()->json($employees);
    }

    public function deletebyid(Request $request, $id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return response()->json($employees);
    }
}
