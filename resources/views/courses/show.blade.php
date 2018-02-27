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

<a href="/courses/{{ $course->id }}/edit" class="btn btn-success btn-lg pull-left">Edit</a>
<form method="post" action="/courses/{{ $course->id }}">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
  <button type="submit" class="btn btn-danger btn-lg pull-right">Delete</button>
</form>

@endsection