@extends('layouts.app', ['activePage' => 'borrower', 'titlePage' => __('Add Borrower')])

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
            <form method="post" action="{{ route('borrowers.store') }}" class="form-horizontal"> 
            @csrf           

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adding Borrower') }}</h4>
                <p class="card-category">{{ __('Civil Service Revolving Loan Scheme') }}</p>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="first_name" class="col-sm-2 col-form-label">First Name</label> 
                  <div class="col-sm-7" >
                   <div class="form-group">
                     <input id="first_name" name="first_name" placeholder="First Name" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="middle_name" name="middle_name" placeholder="Middle Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="last_name" class="col-sm-2 col-form-label">Last Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="last_name" name="last_name" placeholder="Last Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="date_of_birth" name="date_of_birth" placeholder="2021-01-01" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row col-sm-12">
             <label for="phone1" class="col-sm-2 col-form-label">Phone 1</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="phone1" name="phone1" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>

              <label for="phone2" class="col-sm-1 col-form-label">Phone 2</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="phone2" name="phone2" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="address" class="col-sm-2 col-form-label">Address</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <textarea id="address" name="address" cols="40" rows="5" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="email" class="col-sm-2 col-form-label">Email</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="email" name="email" placeholder="loans@pmo.gov.gm" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="employment_date" class="col-sm-2 col-form-label">Employment Date</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="employment_date" name="employment_date" placeholder="2021-01-01" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="payroll_number" class="col-sm-2 col-form-label">Payroll</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="payroll_number" name="payroll_number" placeholder="123456" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="designation_id" class="col-sm-2 col-form-label">Designation ID</label> 
                <div class="col-sm-7" >
                  <div class="form-group">                     
                      <select id="designation_id" name="designation_id" class="custom-select">
                        <!-- Retreive from database -->

                          @foreach($designations as $designation)
                          <option value="{{$designation->id}}">{{$designation->name}}</option>
                          @endforeach
                      </select>                  
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="grade_id" class="col-sm-2 col-form-label">Grade ID</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                    <select id="grade_id" name="grade_id" class="custom-select">
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

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Borrower') }}</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection