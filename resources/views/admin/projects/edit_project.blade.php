@extends('admin.admin_master')
@section('admin')


  <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Project Information</h5>
                                <form class="form-material form-horizontal" method="POST" action="{{route('updateProject', $project->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Project Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="name" name="name" class="form-control" value="{{$project->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="start_date">Start Date</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="start_date" name="start_date" value="{{$project->start_date}}">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12" for="end_date">End Date</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="end_date" name="end_date" value="{{$project->end_date}}">
                                        </div>
                                    </div>
                                    
                    
                     
                          
                                
                                <div class="row">
               
                                   
                                    <div class="col-md-12">
                                         <label class="col-md-12" for="bdate">Select Tasks</span>
                                        </label>
                                        <select name="tasks[]" id="tasks" class="selectpicker" multiple data-style="form-control btn-secondary" value="{{$project->tasks}}">
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

@endsection