@extends('layouts.app', ['activePage' => 'borrower', 'titlePage' => __('Retrieve Borrowers')])



@section('content')
  <div class="content">
    <div class="container-fluid"> 
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('borrowers.create') }}"> <Button class="btn btn-primary btn-block">Add Borrower</Button></a>
      </div>
      <div class="row">        
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Borrower</h4>
              <p class="card-category">Civil Service Revolving Loan Scheme</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Payroll</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Designation / Salary</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($borrowers as $borrower)
                  <tr>
                    <td>{{ $borrower->id }}</td>
                    <td>{{ $borrower->payroll_number }}</td>
                    <td>{{ $borrower->first_name}}</td>
                    <td>{{ $borrower->middle_name}}</td>
                    <td>{{ $borrower->last_name }}</td>
                    <td> {{ $borrower->designation->name }}</td>
                    <td> {{ $borrower->phone1 }} / {{ $borrower->phone2 }}</td>
                    <td> {{ $borrower->email }}</td>
                    <td  class="td-actions">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-success">
                        <a href="{{ route('borrowers.edit',$borrower->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info">
                        <a href="{{ route('borrowers.show',$borrower->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>

                      <!-- Button trigger modal -->
                      <button type="button" rel="tooltip" title="Delete" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $borrower->id }}">
                        <i class="material-icons">close</i>
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="deleteModal-{{ $borrower->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="deleteModalLabel">Delete Notification</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="false">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <h5 class="text-center">Are you sure you want to delete?</h5>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <form action="{{ route('borrowers.destroy',$borrower->id) }}" method="POST" class="d-inline">
                               @csrf
                               @method('DELETE')
                                   <button type="submit" rel="tooltip" class="btn btn-danger">Yes, Delete</button>
                               </form>
                           </div>
                         </div>
                       </div>
                     </div>   
                     <!--Modal End-->
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

