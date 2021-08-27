<?php

namespace App\Http\Controllers;

use App\Models\Guarantor;
use App\Models\Designation;
use App\Models\Grade;
use Illuminate\Http\Request;

class GuarantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guarantors = Guarantor::all();

        return view('guarantors.index', compact('guarantors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designations = Designation::all();
        $grades = Grade::all();
        return view('guarantors.create',compact('designations', 'grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'phone1' => 'required',
            'phone2' => 'nullable',
            'address' => 'required',
            'email' => 'nullable|email',
            'employment_date' => 'required',
            'payroll_number' => 'required',
            'designation_id' => 'required',            
            'grade_id' => 'required'          
        ]);

        Guarantor::create($request->all());

        return redirect()->route('guarantors.index')->with('success','Guarantor Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guarantor $guarantor)
    {
        return view('guarantors.show',compact('guarantor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guarantor $guarantor)
    {
        return view('guarantors.edit',compact('guarantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guarantor $guarantor)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'phone1' => 'required',
            'phone2' => 'nullable',
            'address' => 'required',
            'email' => 'nullable',
            'employment_date' => 'required',
            'payroll_number' => 'required',
            'designation_id' => 'required',            
            'grade_id' => 'required'
        ]);

        $guarantor->update($request->all());

        return redirect()->route('guarantors.index')->with('success','Guarantor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guarantor $guarantor)
    {
        $guarantor->delete();

       return redirect()->route('guarantors.index')
                       ->with('success','Guarantor Deleted Successfully');
    }
}
