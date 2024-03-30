@extends('layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Create Task</h1>
<br/>
<form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Admin Name</label>
      <div class="col-sm-8">
        <select class="form-select form-control" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
              </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="title" placeholder="title">
      </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Assigned User</label>
        <div class="col-sm-8">
            <select class="form-select form-control" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
      </div>
   
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>

@endsection