<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Type;
use App\Models\Borrower;
use App\Models\Guarantor;
use Illuminate\Http\Request;

use DB;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $loans = Loan::all();
        $types = Type::all();

        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $borrowers = Borrower::all();
        $guarantors = Guarantor::all();
        $types = Type::all();
        return view('loans.create',compact('borrowers', 'guarantors', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = Type::all();

        $amount = $request->input('amount');
        $interest = $request->input('interest');
        $type_id = $request->input('type_id');
        $borrower_id = $request->input('borrower_id');
        $guarantor_id = $request->input('guarantor_id');

        $duration = DB::table('types')->where('id', $type_id)->value('duration');

        $total_interest = ($amount * $interest * $duration) / 100;
        $amount_payable = $total_interest + $amount;
        $monthly_payable = $amount_payable / $duration;
       
        $request->validate([
            'amount' => 'required',
            'interest' => 'required',
            'borrower_id' => 'required',
            'guarantor_id' => 'required',
            'type_id' => 'required',
            'purpose' => 'required',
        ]); 

        if (Loan::where('borrower_id', $borrower_id)->where('status', 1)->exists()) {
            // Borrower Id with the same id and has a Loan with Status Active already exists
            return redirect()->route('loans.create')->with('warning','Barrower Has an Active Loan');
         }elseif (Loan::where('guarantor_id', $guarantor_id)->where('status', 1)->exists()){
             // Guarantor Id with the same id and has Guarantee an Loan with Status Active already exists
            return redirect()->route('loans.create')->with('warning','Currently Guarateeing an Active Loan');
         }else{

            Loan::create(array_merge($request->all(), ['amount_payable' => $amount_payable, 'monthly_payable' => $monthly_payable]));

            return redirect()->route('loans.index')->with('success','Loans Created Successfully.');
         }

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
        $borrowers = Borrower::all();
        $guarantors = Guarantor::all();
        $types = Type::all();
        return view('loans.edit',compact('loan', 'borrowers', 'guarantors', 'types'));
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
        $types = Type::all();

        $amount = $request->input('amount');
        $interest = $request->input('interest');
        $type_id = $request->input('type_id');
        $borrower_id = $request->input('borrower_id');
        $guarantor_id = $request->input('guarantor_id');

        $duration = DB::table('types')->where('id', $type_id)->value('duration');

        $total_interest = ($amount * $interest * $duration) / 100;
        $amount_payable = $total_interest + $amount;
        $monthly_payable = $amount_payable / $duration;

        $request->validate([
            'amount' => 'required',
            'interest' => 'required',
            'borrower_id' => 'required',
            'guarantor_id' => 'required',
            'type_id' => 'required',
            'purpose' => 'required',
        ]);

        $loan->update(array_merge($request->all(), ['amount_payable' => $amount_payable, 'monthly_payable' => $monthly_payable]));

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

       return redirect()->route('loans.index')->with('success','Loan Deleted Successfully');
    }
}
