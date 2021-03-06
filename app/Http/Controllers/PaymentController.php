<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Loan;
use App\Models\Borrower;
use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all()->sortByDesc("created_at");;

        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $borrowers = Borrower::all();
        $loans = Loan::all();
        return view('payments.create',compact('borrowers', 'loans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loans = Loan::all();
        $payments = Payment::all();

        //Form Input values
        $borrower_id = $request->input('borrower_id');
        $payment = $request->input('payment');
        //DB Search Results
        $amount_payable = DB::table('loans')->where('borrower_id', $borrower_id)->value('amount_payable');
        $loan_id = DB::table('loans')->where('borrower_id', $borrower_id)->value('id');
        

        $request->validate([
            'borrower_id' => 'required',  
            'payment' => 'required', 
            'payment_for' => 'required', 
        ]);

            if (Payment::where('borrower_id', $borrower_id)->exists()) {
                //Borrower Id with the same id has atleast made a payment
                $previous_balance = DB::table('payments')->where('borrower_id', $borrower_id)->orderBy('id', 'desc')->value("balance");
                $balance = $previous_balance - $payment;
                
                Payment::create(array_merge($request->all(), ['loan_id' => $loan_id, 'payment' => $payment, 'balance' => $balance]));           
                //return redirect()->route('payments.index')->with('success','Payment Created Successfully.');                 
                
                //Once Payment is Less than or Equals to Zero Update Loans Table Staus to 0 which is complete
                if ($balance <= 0.00) {
                    DB::table('loans')->where('borrower_id', $borrower_id)->update(['status' => 0]);
                    return redirect()->route('payments.index')->with('success','Payment Created Successfully.');                     
                }
             }else{ 
                //Borrower Id with the same id has not made a payment 
                $balance = $amount_payable - $payment;

                Payment::create(array_merge($request->all(), ['loan_id' => $loan_id, 'payment' => $payment, 'balance' => $balance]));  
                return redirect()->route('payments.index')->with('success','Payment Created Successfully.'); 
             } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('payments.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('payments.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([                  
            'borrower_id' => 'required',  
            'payment' => 'required', 
            'balance' => 'required', 
            'payment_for' => 'required' 
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success','Payment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')->with('success','Payment Deleted Successfully');
    }
}
