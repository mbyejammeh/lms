@extends('layouts.app', ['activePage' => 'borrower', 'titlePage' => __('Show Borrower')])



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
              <h4 class="card-title">Borrower</h4>
              <p class="card-category">Borrowers for the Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Borrower ID</th>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>{{ $borrower->id }}</td>
                    <td>{{ $borrower->first_name }} {{ $borrower->middle_name }} {{ $borrower->last_name }}</td>
                    <td>{{ $borrower->grade_id }}</td>
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

