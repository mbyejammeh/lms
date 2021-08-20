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
                      <select id="grade" name="grade" value="{{ $grade->grade}}" class="custom-select">
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>  

         

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Salary</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="salary" name="salary" value="{{ $grade->salary}}" placeholder="D1000.00" type="text" class="form-control">
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