@extends('layouts.app', ['activePage' => 'type', 'titlePage' => __('Add Loan Type')])

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
            <form method="post" action="{{ route('types.store') }}" class="form-horizontal">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adding Loan Types') }}</h4>
                <p class="card-category">{{ __('Civil Servant Loan Types') }}</p>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <input id="name" name="name" placeholder="Car Loan" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

                <div class="card-body ">
                    <div class="row">
                        <label for="text" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-7" >
                            <div class="form-group">
                                <input id="description" name="description" placeholder="Loan Description" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-7" >
                      <div class="form-group">
                      <input id="duration" name="duration" placeholder="24 Months" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Loan Type') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
