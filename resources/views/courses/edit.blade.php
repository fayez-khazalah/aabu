@extends('layouts.master')

@section('content')
<h1>Edit Course</h1>
<form method="post" action="/courses/{{ $course->id }}">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="code">Course Code</label>
    <input type="text" name="code" value="{{ $course->code }}" class="form-control" id="code" placeholder="Code">
  </div>

  <div class="form-group">
    <label for="name">Course Name</label>
    <input type="text" name="name" value="{{ $course->name }}" class="form-control" id="name" placeholder="Name">
  </div>

  <div class="form-group">
  <textarea name="description" id="desc" class="form-control" placeholder="Enter Description">{{ $course->description }}</textarea>
</div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endsection