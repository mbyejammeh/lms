@extends('layouts.app', ['activePage' => 'loan', 'titlePage' => __('Show Loan')])



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
              <h4 class="card-title">Loan</h4>
              <p class="card-category">Loans for The Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Amount</th>
                  <th>Interest</th>
                  <th>Borrower ID</th>
                  <th>Guarantor ID</th>
                  <th>Type ID</th>
                  <th>Purpose</th>
                  <th>Total Amount Payable</th>
                  <th>Total Monthly Payable</th>
                  <th>Status</th>
                </thead>
                <tbody>

                  <tr>
                    <td>{{ $loan->id }}</td>
                    <td>{{ $loan->amount }}</td>
                    <td>{{ $loan->interest }}</td>
                    <td>{{ $loan->borrower_id }}</td>
                    <td>{{ $loan->guarantor_id }}</td>
                    <td>{{ $loan->type_id }}</td>
                    <td>{{ $loan->purpose }}</td>
                    <td>{{ $loan->payable_amount }}</td>
                    <td>{{ $loan->monthly_payable }}</td>
                    <td>{{ $loan->status }}</td>
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

