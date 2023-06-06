@extends('admin.admin_master')
@section('admin')




<!-- column -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tasks List</h4>
            <h6 class="card-subtitle">Total Tasks <span class="badge badge-circle badge-info">{{count($tasks)}}</span></h6>
            <h6 class="card-subtitle">Drag and drop any row to sort the data</h6>
            <div class="table-responsive">
                <table class="table table-bordered taskTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Date Created</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tablecontents">
                        @foreach ($tasks as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->created_at}}</td>
                            <td class="text-nowrap">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="View roject"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                <a href="{{route('editTask', $item->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="{{route('deleteTask', $item->id)}}" class="sa-params" data-toggle="tooltip"> <i class="fa fa-close text-danger"></i> </a>
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