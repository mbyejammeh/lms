@extends('layouts.app', ['activePage' => 'type', 'titlePage' => __('Show Loan Type')])



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
              <h4 class="card-title">Designation</h4>
              <p class="card-category">Civil Servant Designations</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Duration</th>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>{{ $type->duration }}</td>
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

