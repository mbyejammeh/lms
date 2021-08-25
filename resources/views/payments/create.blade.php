@extends('layouts.app', ['activePage' => 'payment', 'titlePage' => __('Add Payment')])

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
            <form method="post" action="{{ route('payments.store') }}" class="form-horizontal">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adding Payment') }}</h4>
                <p class="card-category">{{ __('Payment for The Civil Service Revolving Loan Scheme') }}</p>
              </div>

          <div class="card-body ">
            <div class="row">
             <label for="loan_id" class="col-sm-2 col-form-label">Loan ID</label>
                <div class="col-sm-7" >
                  <div class="form-group">
                    <select id="loan_id" name="loan_id" class="custom-select">
                      <!-- Retreive from database -->

                        @foreach($loans as $loan)
                        <option value="{{$loan->id}}">{{$loan->name}}</option>
                        @endforeach
                    </select>
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
             <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="amount" name="amount" placeholder="D1000.00" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

        
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Payment') }}</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
