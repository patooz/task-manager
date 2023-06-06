@extends('admin.admin_master')
@section('admin')


<!-- column -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Projects</h4>
            <h6 class="card-subtitle">Total Projects <span class="badge badge-circle badge-info">{{count($projects)}}</span></h6>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Project Tasks</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Date Created</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $item)
                         
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->task}}</td>
                            <td>{{$item->start_date}}</td>
                            <td>{{$item->end_date}}</td>
                            <td>{{$item->created_at}}</td>
                            <td class="text-nowrap">
                                <a href="{{route('singleProject', $item->id)}}" data-toggle="tooltip" data-original-title="View roject"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                <a href="{{route('editProject', $item->id)}}" data-toggle="tooltip" data-original-title="Edit Project"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="{{route('deleteProject', $item->id)}}" class="sa-params" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                     
                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- column -->
              
@endsection