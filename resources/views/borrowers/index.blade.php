@extends('layouts.app', ['activePage' => 'borrower', 'titlePage' => __('Retrieve Borrowers')])



@section('content')
  <div class="content">
    <div class="container-fluid"> 
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('borrowers.create') }}"> <Button class="btn btn-primary btn-block">Add Borrower</Button></a>
      </div>
      <div class="row">        
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Borrower</h4>
              <p class="card-category">Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Payroll</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Designation / Salary</th>
                  <th>Balance </th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Loan Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($borrowers as $borrower)
                  <tr>
                    <td>{{ $borrower->id }}</td>
                    <td>{{ $borrower->payroll_number }}</td>
                    <td>{{ $borrower->first_name}}</td>
                    <td>{{ $borrower->middle_name}}</td>
                    <td>{{ $borrower->last_name }}</td>
                    <td> {{ $borrower->designation->name }}</td>
                    <td class="text-danger font-weight-bold"> ( -D56,988.00) </td>
                    <td> {{ $borrower->phone1 }} / {{ $borrower->phone2 }}</td>
                    <td> {{ $borrower->email }}</td>
                    <td class="text-danger font-weight-bold"> Has Load </td>
                    <td  class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-success">
                        <a href="{{ route('borrowers.edit',$borrower->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info">
                        <a href="{{ route('borrowers.show',$borrower->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>
                      <form action="{{ route('borrowers.destroy',$borrower->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                          <button type="submit" rel="tooltip" title="Delete" class="btn btn-danger"><i class="material-icons">close</i></button>
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

