@extends('layouts.app', ['activePage' => 'grade', 'titlePage' => __('Add Grade')])

@if ($errors->any())
    <div class="card card-nav-tabs text-center alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('grades.store') }}" class="form-horizontal">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adding Each Grade Basic Salary') }}</h4>
                <p class="card-category">{{ __('Civil Servant Grading Scale') }}</p>
              </div>

                <div class="card-body ">
                    <div class="row">
                        <label for="text" class="col-sm-2 col-form-label">Grade</label>
                        <div class="col-sm-7" >
                            <div class="form-group">
                                <input id="name" name="name" placeholder="Grade Name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="salary" name="salary" placeholder="D1000.00" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>



              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Salary') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
