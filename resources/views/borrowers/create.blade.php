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
                 <label for="text" class="col-sm-2 col-form-label">First Name</label> 
                  <div class="col-sm-7" >
                   <div class="form-group">
                     <input id="text" name="text" placeholder="First Name" type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body ">
                <div class="row">
                 <label for="text" class="col-sm-2 col-form-label">Middle Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text1" name="text1" placeholder="Middle Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Last Name</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text2" name="text2" placeholder="Last Name" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Date of Birth</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text4" name="text4" placeholder="24-08-00" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row col-sm-12">
             <label for="text" class="col-sm-2 col-form-label">Phone 1</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="text3" name="text3" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>

              <label for="text" class="col-sm-1 col-form-label">Phone 2</label> 
                <div class="col-sm-2" >
                  <div class="form-group">
                  <input id="text3" name="text3" placeholder="777 7777" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Address</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Email</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text5" name="text5" placeholder="loans@pmo.gov.gm" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Employment Date</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text8" name="text8" placeholder="24-08-00" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Payroll</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <input id="text6" name="text6" placeholder="123456" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Designation ID</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                    <select class="form-select">
                      @foreach ($designations as $designation)
                          <option value="{{$designation->id}}">{{$designation->name}}</option>
                      @endforeach
                  
                </div>
              </div>
            </div>
          </div>

          <div class="card-body ">
            <div class="row">
             <label for="text" class="col-sm-2 col-form-label">Grade ID</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <select id="grade" name="grade" class="custom-select">
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
             <label for="text" class="col-sm-2 col-form-label">Loan Type ID</label> 
                <div class="col-sm-7" >
                  <div class="form-group">
                  <select id="select" name="select" class="custom-select">
                    <option value="Personal Loan">Personal Loan</option>
                    <option value="Car Loan">Car Loan</option>
                    <option value="Housing Loan">Housing Loan</option>
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