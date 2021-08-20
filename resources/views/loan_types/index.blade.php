@extends('layouts.app', ['activePage' => 'loans', 'titlePage' => __('Retrieve Loan Types')])



@section('content')
  <div class="content">
    <div class="container-fluid"> 

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('loan_types.create') }}"> <Button class="btn btn-primary btn-block">Add Loan Type</Button></a>
      </div>
      <div class="row">        
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Loan Types</h4>
              <p class="card-category">Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Duration</th>
                  <th>Interest</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($loan_types as $loan_type)
                  <tr>
                    <td>{{ $loan_type->id }}</td>
                    <td>{{ $loan_type->name }}</td>
                    <td>{{ $loan_type->description }}</td>
                    <td>{{ $loan_type->duration }}</td>
                    <td>{{ $loan_type->interest }}</td>
                    <td  class="form-inline">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                        <a class="nav-link" href="{{ route('loan_types.edit',$loan_type->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info btn-link btn-sm">
                        <a class="nav-link" href="{{ route('loan_types.show',$loan_type->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>

                    
                      <form action="{{ route('loan_types.destroy',$loan_type->id) }}" method="POST">
   
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

