@extends('layouts.master')
@section('content')
    

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tasks</h1>
   <br/>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tasks List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Assigned Name</th>
                            <th>Admin Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->description}}</td>
                            <td>{{$task->user->name}}</td>
                            <td>{{$task->admin->name}}</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                    
                </table>
                {{ $tasks->links("pagination::bootstrap-4") }}

            </div>
        </div>
    </div>

    @endsection