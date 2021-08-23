<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Type;
use App\Models\Borrower;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function calc_interest() {
//        $types = Type::all();
//
//        $amount = ;
//        $interest = ;

    }


    public function index()
    {
        $loans = Loan::all();
        $types = Type::all();

        $total_interest = ($loans[0]['amount'] * $loans[0]['interest'] * $types[0]['duration']) / 100;
        $total_payable = $total_interest + $loans[0]['amount'];
        $monthly_payable = $total_payable / $types[0]['duration'];

//        return $loans[0]['interest'];
        return view('loans.index', compact('loans', 'monthly_payable', 'total_payable'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $borrowers = Borrower::all();
        $types = Type::all();
        return view('loans.create',compact('borrowers', 'types'));
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
            'amount' => 'required',
            'interest' => 'required',
            'borrower_id' => 'required',
            'type_id' => 'required',
            'purpose' => 'required',
/*            'payable_amount' => 'required',
            'monthly_payable' => 'required'*/
        ]);

        Loan::create($request->all());

        return redirect()->route('loans.index')->with('success','Loans Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        return view('loans.show',compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        return view('loans.edit',compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'amount' => 'required',
            'interest' => 'required',
            'borrower_id' => 'required',
            'type_id' => 'required',
            'purpose' => 'required',
           /* 'payable_amount' => 'required',
            'monthly_payable' => 'required'*/
        ]);

//        $borrower->update($request->all());

        return redirect()->route('loans.index')->with('success','Loan Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

       return redirect()->route('loans.index')
                       ->with('success','Loan Deleted Successfully');
    }

    /*public function calculator()
    {
        $loans = Loan::all();
        $types = Type::all();

        $simple_interest = $amount * $types->$interest * $types->$duration;
        $payable_amount = $simple_interest + $amount;

        $monthly_payable = $payable_amount / $types->$duration;



       return redirect()->route('loans.index')
                       ->with('success','Loan Deleted Successfully');
    }*/
}
