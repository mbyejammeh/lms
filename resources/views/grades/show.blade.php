@extends('layouts.app', ['activePage' => 'retrieve', 'titlePage' => __('Show Grade')])



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
              <h4 class="card-title">Grade</h4>
              <p class="card-category">Salary Scale</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Grade</th>
                  <th>Salary</th>
                </thead>
                <tbody>

                  <tr>
                    <td> genere code count </td>
                    <td>{{ $grade->name }}</td>
                    <td>{{ $grade->salary }}</td>
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

