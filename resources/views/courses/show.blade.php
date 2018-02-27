@extends ('layouts.master')

@section ('content')

<h1>Courses Info</h1>
<div class="text-center">
  <a href="/courses" class="btn btn-primary btn-lg" role="button">Back</a>
</div>

<hr>

<div class="jumbotron">
  <h2>{{ $course->code}} </h2>
  <h1>{{ $course->name }}</h1>
  <div>{{ $course->description }}</div>
  <hr>
  <small>Written on {{ $course->created_at }}</small>
</div>

<hr>

<div class="text-center">
  <a href="/courses/{{ $course->id }}/edit" class="btn btn-success btn-lg">Edit</a>
</div>

@endsection