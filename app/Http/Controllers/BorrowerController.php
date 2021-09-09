<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use App\Models\Designation;
use App\Models\Grade;

use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowers = Borrower::all();

        return view('borrowers.index', compact('borrowers'));
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
        return view('borrowers.create',compact('designations', 'grades'));

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
            'payroll_number' => 'required|unique:borrowers',
            'designation_id' => 'required',
            'grade_id' => 'required',
        ]);

        Borrower::create($request->all());

        return redirect()->route('borrowers.index')->with('success','Borrower Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Borrower $borrower)
    {
        return view('borrowers.show',compact('borrower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrower $borrower)
    {
        $grades = Grade::all();
        $designations = Designation::all();
        return view('borrowers.edit',compact('borrower', 'designations', 'grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrower $borrower)
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
            'grade_id' => 'required', 
        ]);

        $borrower->update($request->all());

        return redirect()->route('borrowers.index')->with('success','Borrower Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrower $borrower)
    {
        $borrower->delete();

       return redirect()->route('borrowers.index')->with('success','Borrower Deleted Successfully');
    }
}
