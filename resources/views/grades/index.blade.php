@extends('layouts.app', ['activePage' => 'retrieve', 'titlePage' => __('Retrieve Grades')])



@section('content')
  <div class="content">
    <div class="container-fluid"> 

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('grades.create') }}"> <Button class="btn btn-primary btn-block">Add Grade</Button></a>
      </div>
      <div class="row">        
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Grades</h4>
              <p class="card-category">Salary Scale</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Grade</th>
                  <th>Salary</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($grades as $grade)
                  <tr>
                    <td>{{ $grade->id }}</td>
                    <td>{{ $grade->grade }}</td>
                    <td>{{ $grade->salary }}</td>
                    <td  class="form-inline">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                        <a class="nav-link" href="{{ route('grades.edit',$grade->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info btn-link btn-sm">
                        <a class="nav-link" href="{{ route('grades.show',$grade->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>

                    
                      <form action="{{ route('grades.destroy',$grade->id) }}" method="POST">
   
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

