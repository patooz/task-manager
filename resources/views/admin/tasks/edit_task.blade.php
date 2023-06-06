@extends('admin.admin_master')
@section('admin')


<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Project Information</h5>
                <form class="form-material form-horizontal" method="POST" action="{{route('updateTask', $task->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Task Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="name" name="name" class="form-control" value="{{$task->name}}">
                        </div>
                        <input type="hidden" name="priority" value="1">
                    </div>
                   

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 tst3">Submit</button>
                    <a href="{{route('viewTask')}}">
                    <button type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </a>
                    
                </form>

            </div>
        </div>
    </div>
</div>

@endsection