@extends('layouts.app', ['activePage' => 'grade', 'titlePage' => __('Edit Grade')])


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <form action="{{ route('grades.update',$grade->id) }}" method="POST" class="form-horizontal">
              @csrf
              @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editing Grade & Basic Salary') }}</h4>
                <p class="card-category">{{ __('Civil Servant Grading Scale') }}</p>
              </div>

                <div class="card-body ">
                    <div class="row">
                        <label for="text" class="col-sm-2 col-form-label">Grade</label>
                        <div class="col-sm-7" >
                            <div class="form-group">
                                <input id="name" name="name" value="{{ $grade->name}}" placeholder="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="salary" name="salary" value="{{ $grade->salary}}" placeholder="" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update Salary') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
