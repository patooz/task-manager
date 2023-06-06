@extends('admin.admin_master')
@section('admin')


<!-- column -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Project Details</h4>
            
            <div class="table-responsive">
                <table class=" table table-bordered">
                    <thead>
                        <tr>
                            
                            <th>Project Name</th>
                            <th>Project Tasks</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Date Created</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                         
                        <tr>
                            
                            <td>{{$project->name}}</td>
                            <td>{{$project->task}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>{{$project->created_at}}</td>
                            <td class="text-nowrap">
                                
                                <a href="{{route('editProject', $project->id)}}" data-toggle="tooltip" data-original-title="Edit Project"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="{{route('deleteProject', $project->id)}}" class="sa-params" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
              
                     
                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- column -->
              
@endsection