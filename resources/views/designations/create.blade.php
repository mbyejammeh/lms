@extends('layouts.app', ['activePage' => 'designation', 'titlePage' => __('Add Designation')])

@if ($errors->any())
    <div class="alert alert-danger">
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
            <form method="post" action="{{ route('designations.store') }}" class="form-horizontal"> 
            @csrf           

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adding Different Designations') }}</h4>
                <p class="card-category">{{ __('Civil Servant Designations') }}</p>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Designation</label> 
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <input id="name" name="name" placeholder="Senior ICT Officer" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Grade</label> 
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <select id="grade" name="grade_id" class="custom-select">
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                        <option value="6">Grade 6</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="9">Grade 9</option>
                        <option value="10">Grade 10</option>
                        <option value="11">Grade 11</option>
                        <option value="12">Grade 12</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>           

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Designation') }}</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection