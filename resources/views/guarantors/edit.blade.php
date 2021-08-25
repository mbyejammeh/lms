@extends('layouts.app', ['activePage' => 'guarantor', 'titlePage' => __('Edit Guarantor')])


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
            <form action="{{ route('guarantors.update',$guarantor->id) }}" method="POST" class="form-horizontal"> 
              @csrf          
              @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editing Guarantor') }}</h4>
                <p class="card-category">{{ __('Civil Service Revolving Loan Scheme') }}</p>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="first_name" class="col-sm-2 col-form-label">First Name</label> 
                  <div class="col-sm-7" >
                   <div class="form-group">
                     <input id="first_name" name="first_name" value="{{ $guarantor->first_name}}" placeholder="First Name" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="middle_name" name="middle_name" value="{{ $guarantor->middle_name}}" placeholder="Middle Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="last_name" class="col-sm-2 col-form-label">Last Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="last_name" name="last_name" value="{{ $guarantor->last_name}}" placeholder="Last Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="date_of_birth" name="date_of_birth" value="{{ $guarantor->date_of_birth}}" placeholder="2021-01-01" type="date" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row col-sm-12">
             <label for="phone1" class="col-sm-2 col-form-label">Phone 1</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="phone1" name="phone1" value="{{ $guarantor->phone1}}" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>

              <label for="phone2" class="col-sm-1 col-form-label">Phone 2</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="phone2" name="phone2" value="{{ $guarantor->phone2}}" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="address" class="col-sm-2 col-form-label">Address</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <textarea id="address" name="address" cols="40" rows="5" class="form-control">{{ $guarantor->address}}</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="email" class="col-sm-2 col-form-label">Email</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="email" name="email" value="{{ $guarantor->email}}" placeholder="loans@pmo.gov.gm" type="email" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="employment_date" class="col-sm-2 col-form-label">Employment Date</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="employment_date" name="employment_date" value="{{ $guarantor->employment_date}}" placeholder="2021-01-01" type="date" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="payroll_number" class="col-sm-2 col-form-label">Payroll</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="payroll_number" name="payroll_number"  value="{{ $guarantor->payroll_number}}" placeholder="123456" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="designation_id" class="col-sm-2 col-form-label">Designation</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="designation_id" name="designation_id"  value="{{ $guarantor->designation_id}}" placeholder="123456" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="grade_id" class="col-sm-2 col-form-label">Grade</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="grade_id" name="grade_id" value="{{ $guarantor->grade_id}}" placeholder="Senior ICT Officer" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="borrower_id" class="col-sm-2 col-form-label">Borrower</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="borrower_id" name="borrower_id" value="{{ $guarantor->borrower_id}}" placeholder="123456" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>       


<!-- Retreive from database in a dropdown would be the best-->

           
          

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update Guarantor') }}</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection