@extends('layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Create Task</h1>
<br/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('tasks.store') }}">
  @csrf
    <div class="form-group row">
      <label for="admin" class="col-sm-2 col-form-label">Admin Name</label>
      <div class="col-sm-8">
        <select class="form-select form-control" aria-label="Default select example" name="admin_id" required>
          @foreach ($admins as $admin)
          <option value="{{$admin->id}}">{{$admin->name}}</option>
        @endforeach
          </select>
              </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="title" placeholder="title" name="title" required>
      </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="description" placeholder="description" name="description" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="user" class="col-sm-2 col-form-label">Assigned User</label>
        <div class="col-sm-8">
            <select class="form-select form-control" aria-label="Default select example" name="user_id" required>
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
             
              </select>
        </div>
      </div>
   
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

@endsection