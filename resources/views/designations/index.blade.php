@extends('layouts.app', ['activePage' => 'designation', 'titlePage' => __('Retrieve Designation')])



@section('content')
  <div class="content">
    <div class="container-fluid">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="col-md-2">
        <a class="nav-link" href="{{ route('designations.create') }}"> <Button class="btn btn-primary btn-block">Add Designation</Button></a>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Designation</h4>
              <p class="card-category">Civil Servant Designations</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>No</th>
                  <th>Name</th>
                  <th>Grade</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($designations as $designation)
                  <tr>
                    <td> Numbering </td>
                    <td>{{ $designation->name }}</td>
                    <td>{{ $designation->grade->name }}</td>
                    <td  class="td-actions">
                      <button type="button" rel="tooltip" title="Edit" class="btn btn-success">
                        <a href="{{ route('designations.edit',$designation->id) }}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="button" rel="tooltip" title="View" class="btn btn-info">
                        <a href="{{ route('designations.show',$designation->id) }}"> <i class="material-icons">visibility</i></a>
                      </button>

                      <!-- Button trigger modal -->
                      <button type="button" rel="tooltip" title="Delete" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $designation->id }}">
                        <i class="material-icons">close</i>
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="deleteModal-{{ $designation->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                             <form action="{{ route('designations.destroy',$designation->id) }}" method="POST" class="d-inline">
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

