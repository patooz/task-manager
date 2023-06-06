@extends('admin.admin_master')
@section('admin')


  <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Project Information</h5>
                                <form class="form-material form-horizontal" method="POST" action="{{route('storeProject')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Project Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter project name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="start_date">Start Date</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="start_date" name="start_date" placeholder="enter your birth date">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12" for="end_date">End Date</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="end_date" name="end_date" placeholder="enter your birth date">
                                        </div>
                                    </div>
                                    
                    
                     
                          
                                
                                <div class="row">
               
                                   
                                    <div class="col-md-12">
                                         <label class="col-md-12" for="bdate">Select Tasks</span>
                                        </label>
                                        <div class="d-flex justify-content-end align-items-right">
                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#taskModal" data-whatever="@fat">Add new Task</button>
                    </div>
                                        <select name="tasks[]" id="tasks" class="selectpicker" multiple data-style="form-control btn-secondary">
                                            @foreach($tasks as $item)
                                            <option value="{{ $item->name }}"
                                                **@if(in_array($item->id,
                                                request()->get('tasks')??[]))selected="selected"
                                                @endif**>
                                                {{ ucfirst($item->name) }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                
                           
                        
                  
                
              
                                   <div class="form-group">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 sa-success">Submit</button>
                                    <a href="{{route('viewProject')}}">
                                    <button type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- ============================================================== -->
            <!-- start task modal -->
    <div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">New Task</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('storeTask')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Task Name:</label>
                                                        <input type="text" name="name" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <input type="hidden" name="priority" value="1">
                                                    
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary sa-success">Add Task</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end task modal -->

@endsection