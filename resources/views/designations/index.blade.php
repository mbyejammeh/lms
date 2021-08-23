@extends('layouts.app', ['activePage' => 'designation', 'titlePage' => __('Retrieve Designation')])



@section('content')
  <div class="content">
    <div class="container-fluid">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('designations.create') }}"> <Button class="btn btn-primary btn-block">Add Designation</Button></a>
      </div>
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
                  <th>No</th>
                  <th>Name</th>
                  <th>Grade ID</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($designations as $designation)
                  <tr>
                    <td> Numbering </td>
                    <td>{{ $designation->name }}</td>
                    <td>{{ $designation->grade->name }}</td>
                    <td  class="form-inline">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                        <a class="nav-link" href="{{ route('designations.edit',$designation->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info btn-link btn-sm">
                        <a class="nav-link" href="{{ route('designations.show',$designation->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>
                      <form action="{{ route('designations.destroy',$designation->id) }}" method="POST">
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

