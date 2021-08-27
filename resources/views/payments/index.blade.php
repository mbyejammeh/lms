@extends('layouts.app', ['activePage' => 'payment', 'titlePage' => __('Retrieve Payments')])



@section('content')
  <div class="content">
    <div class="container-fluid">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('payments.create') }}"> <Button class="btn btn-primary btn-block">Add Payment</Button></a>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Payments</h4>
              <p class="card-category">Payments for The Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Loan ID</th>
                  <th>Borrower ID</th>
                  <th>Amount</th>                 
                  <th>Total Amount Payable</th>
                  <th>Total Monthly Payment</th>
                  <th>Balance</th>
                  <th>Action</th>
                </thead>
                <tbody>
                @foreach ($payments as $payment)
                  <tr>
                 
                    <td>Numbering</td>
                    <td>{{ $payment->loan_id }}</td>
                    <td>{{ $payment->borrower_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->total_amount_payable }}</td>
                    <td>{{ $payment->total_monthly_payment}}</td>
                    <td>{{ $payment->balance}}</td>
                    <td  class="form-inline">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                        <a class="nav-link" href="{{ route('payments.edit',$payment->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info btn-link btn-sm">
                        <a class="nav-link" href="{{ route('payments.show',$payment->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>


                      <form action="{{ route('payments.destroy',$payment->id) }}" method="POST">

                      @csrf
                      @method('DELETE')
                          <button type="submit" rel="tooltip" title="Delete" class="btn btn-info btn-link btn-sm"><i class="material-icons">close</i></button>
                      </form>

                    </td>
                 
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
