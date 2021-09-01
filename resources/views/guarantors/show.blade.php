@extends('layouts.app', ['activePage' => 'guarantor', 'titlePage' => __('Show Guarantor')])



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
              <h4 class="card-title">Guarantor</h4>
              <p class="card-category">Guarantors for the Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Payroll</th>
                  <th>Grade</th>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>{{ $guarantor->id }}</td>
                    <td>{{ $guarantor->first_name }} {{ $guarantor->middle_name }} {{ $guarantor->last_name }}</td>
                    <td>{{ $guarantor->payroll_number }}</td>
                    <td>{{ $guarantor->grade->name }}</td>
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

