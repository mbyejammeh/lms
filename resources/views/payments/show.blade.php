@extends('layouts.app', ['activePage' => 'payment', 'titlePage' => __('Show Payment')])



@section('content')
  <div class="content">
    <div class="container-fluid">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif


      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Payment</h4>
              <p class="card-category">Payment for The Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Loan ID</th>
                  <th>Borrower ID</th>
                  <th>Amount</th>                  
                  <th>Total Amount Payable</th>
                  <th>Monthly Payment</th>
                  <th>Balance</th>
                </thead>
                <tbody>

                  <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->loan_id }}</td>
                    <td>{{ $payment->borrower->payroll_number }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->payable_amount }}</td>
                    <td>{{ $payment->monthly_payment }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

