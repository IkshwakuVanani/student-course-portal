@extends('layouts.app')

@section('content')
  <h1>Available Courses</h1>
  <ul>
    @foreach($courses as $course)
      <li>{{ $course->title }} ({{ $course->credits }} credits)</li>
    @endforeach
  </ul>
  <a href="{{ route('courses.create') }}">Add New Course</a>
@endsection
