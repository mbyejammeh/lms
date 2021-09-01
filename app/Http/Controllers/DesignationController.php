<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Grade;
use Illuminate\Http\Request;


class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();

        return view('designations.index', compact('designations'));
    }


    public function create()
    {
        $grades = Grade::all();
        return view('designations.create',compact('grades'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'grade_id' => 'required',
        ]);

        Designation::create($request->all());

        return redirect()->route('designations.index')->with('success','Designation Created Successfully.');
    }


    public function show(Designation $designation)
    {
        return view('designations.show',compact('designation'));
    }


    public function edit(Designation $designation)
    {
        $grades = Grade::all();
        return view('designations.edit',compact('designation', 'grades'));
    }


    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'name' => 'required',
            'grade_id' => 'required',
        ]);

        $designation->update($request->all());

        return redirect()->route('designations.index')->with('success','Designation Updated Successfully');
    }


    public function destroy(Designation $designation)
    {
        $designation->delete();

       return redirect()->route('designations.index')->with('success','Designation Deleted Successfully');
    }
}
