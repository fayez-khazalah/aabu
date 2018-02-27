@extends ('layouts.master')

@section ('content')

<h1>Courses List</h1>
<div class="text-center">
  <a href="/courses/create" class="btn btn-primary" role="button">Add Course</a>
</div>
<hr>

@foreach ($courses as $course)
<div class="well">
  <h3><a href="/courses/{{ $course->id }}">{{ $course->name }}</a></h3>
</div>
@endforeach

@endsection