@extends('layouts.app', ['activePage' => 'type', 'titlePage' => __('Edit Loan Type')])


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
            <form action="{{ route('types.update',$type->id) }}" method="POST" class="form-horizontal"> 
              @csrf          
              @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editing Loan Type') }}</h4>
                <p class="card-category">{{ __('Civil Servant Loan Type') }}</p>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Name</label> 
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <input id="name" name="name" placeholder="Car Loan" value="{{ $type->name}}" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Description</label> 
                    <div class="col-sm-7" >
                      <div class="form-group">
                        <textarea id="description" name="description" cols="40" rows="5" class="form-control">{{$type->description}}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Duration</label> 
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <input id="duration" name="duration" value="{{ $type->duration}}" placeholder="24 Months" type="text" class="form-control">
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