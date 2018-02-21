@extends('layouts.master')

@section('content')
<h1>Add Course</h1>
<form method="post" action="/courses">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="code">Course Code</label>
    <input type="text" name="code" class="form-control" id="code" placeholder="Code">
  </div>

  <div class="form-group">
    <label for="name">Course Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </div>

	<div class="form-group">
  <textarea name="description" id="desc" class="form-control">Enter Description</textarea>
</div>

  <div class="form-group">
  	<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>
@endsection