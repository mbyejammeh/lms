@extends('layouts.app', ['activePage' => 'guarantor', 'titlePage' => __('Retrieve Guarantors')])



@section('content')
  <div class="content">
    <div class="container-fluid"> 

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('guarantors.create') }}"> <Button class="btn btn-primary btn-block">Add Guarantor</Button></a>
      </div>
      <div class="row">        
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Guarantor</h4>
              <p class="card-category">Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Payroll</th>
                  <th>Guarantor's Info</th>
                  <th>Employment Info</th>
                  <th>Loan Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($guarantors as $guarantor)
                  <tr>
                    <td>{{ $guarantor->id }}</td>
                    <td>{{ $guarantor->payroll_number }}</td>
                    <td>{{ $guarantor->first_name }} {{ $guarantor->middle_name }} {{ $guarantor->last_name }}<br>
                      {{ $guarantor->date_of_birth }}<br>
                      {{ $guarantor->phone1 }}<br>
                      {{ $guarantor->phone2 }}<br>
                      {{ $guarantor->address }}<br>
                      {{ $guarantor->email }}<br>                    
                    </td>
                    <td>{{$guarantor->designation->name }}<br>
                      {{ $guarantor->grade->name }}<br>
                      {{ $guarantor->employment_date }}<br>
                      </td>
                      <td class="text-danger font-weight-bold"> Has Load </td>
                      <td  class="td-actions">
                        <button type="button" rel="tooltip" title="Edit" class="btn btn-success">
                        <a href="{{ route('guarantors.edit',$guarantor->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info">
                        <a href="{{ route('guarantors.show',$guarantor->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>

                    
                      <form action="{{ route('guarantors.destroy',$guarantor->id) }}" method="POST" class="d-inline">
   
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

