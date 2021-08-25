@extends('layouts.app', ['activePage' => 'loan', 'titlePage' => __('Retrieve Loans')])



@section('content')
  <div class="content">
    <div class="container-fluid">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('loans.create') }}"> <Button class="btn btn-primary btn-block">Add Loan</Button></a>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Loans</h4>
              <p class="card-category">Loans for The Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Amount</th>
                  <th>Interest</th>
                  <th>Borrower ID</th>
                  <th>Type ID</th>
                  <th>Purpose</th>
                  <th> Total Amount Payable</th>
                  <th>Total Monthly Payable</th>
                  <th>Action</th>
                </thead>
                <tbody>
                @foreach ($loans as $loan)
                  <tr>
                 
                    <td>Numbering</td>
                    <td>{{ $loan->amount }}</td>
                    <td>{{ $loan->interest }}</td>
                    <td>{{ $loan->borrower_id }}</td>
                    <td>{{ $loan->type_id }}</td>
                    <td>{{ $loan->purpose }}</td>
                    <td>{{ $loan->total_payable}}</td>
                    <td>{{ $loan->monthly_payable}}</td>
                    <td  class="form-inline">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                        <a class="nav-link" href="{{ route('loans.edit',$loan->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info btn-link btn-sm">
                        <a class="nav-link" href="{{ route('loans.show',$loan->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>


                      <form action="{{ route('loans.destroy',$loan->id) }}" method="POST">

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

