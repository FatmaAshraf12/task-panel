@extends('layouts.master')
@section('content')
    

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Statistics</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Statistics Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Task count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($statistics as $stat)
                        <tr>
                            <td>{{$stat->user->name}}</td>
                            <td>{{$stat->tasks_count}}</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection