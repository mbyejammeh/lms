@extends('layouts.app', ['activePage' => 'loan', 'titlePage' => __('Edit Loan')])


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
            <form action="{{ route('loans.update',$loan->id) }}" method="POST" class="form-horizontal">
              @csrf
              @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editing Loan') }}</h4>
                <p class="card-category">{{ __('Loans for The Civil Service Revolving Loan Scheme') }}</p>
              </div>

              <div class="card ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Adding Loans') }}</h4>
                  <p class="card-category">{{ __('Loans for The Civil Service Revolving Loan Scheme') }}</p>
                </div>
  
            <div class="card-body ">
              <div class="row">
               <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                  <div class="col-sm-7" >
                    <div class="form-group">
                    <input id="amount" name="amount" value="{{ $loan->amount}}" placeholder="D1000.00" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body ">
              <div class="row">
               <label for="interest" class="col-sm-2 col-form-label">Interest</label>
                  <div class="col-sm-7" >
                    <div class="form-group">
                    <input id="interest" name="interest" value="{{ $loan->interest}}" placeholder="0.25%" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
  
            <div class="card-body ">
              <div class="row">
               <label for="borrower_id" class="col-sm-2 col-form-label">Borrower ID</label>
                  <div class="col-sm-7" >
                    <div class="form-group">
                      <select id="borrower_id" name="borrower_id" class="custom-select">
                        <!-- Retreive from database -->
  
                          @foreach($borrowers as $borrower)
                          <option value="{{$borrower->id}}">{{$borrower->payroll_number}}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="card-body ">
              <div class="row">
               <label for="type_id" class="col-sm-2 col-form-label">Loan Type ID</label>
                  <div class="col-sm-7" >
                    <div class="form-group">
                      <select id="type_id" name="type_id" class="custom-select">
                        <!-- Retreive from database -->
  
                          @foreach($types as $type)
                          <option value="{{$type->id}}">{{$type->name}}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="card-body ">
              <div class="row">
               <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                  <div class="col-sm-7" >
                    <div class="form-group">
                    <input id="purpose" name="purpose" value="{{ $loan->purpose}}" placeholder="Building a House for my Family" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update Loan') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
