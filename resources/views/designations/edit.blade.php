@extends('layouts.app', ['activePage' => 'designation', 'titlePage' => __('Edit Designation')])

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
            <form action="{{ route('designations.update',$designation->id) }}" method="POST" class="form-horizontal">
              @csrf
              @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editing Designation') }}</h4>
                <p class="card-category">{{ __('Civil Servant Designations') }}</p>
              </div>

                <div class="card-body ">
                    <div class="row">
                        <label for="text" class="col-sm-2 col-form-label">Grade</label>
                        <div class="col-sm-7" >
                            <div class="form-group">
                                <select id="grade" name="grade_id" class="custom-select">
                                    <!-- Retreive from database -->

                                    @foreach($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-7" >
                      <div class="form-group">
                        <input id="name" name="name" value="{{ $designation->name}}" placeholder="Senior ICT Officer" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update Designation') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
