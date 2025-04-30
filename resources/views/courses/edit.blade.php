@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Course</h1>

    <form action="{{ route('courses.update', $course) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block">Title</label>
            <input name="title" value="{{ old('title', $course->title) }}" class="w-full border px-3 py-2" required>
        </div>
        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border px-3 py-2" required>{{ old('description', $course->description) }}</textarea>
        </div>
        <div>
            <label class="block">Credits</label>
            <input name="credits" type="number" value="{{ old('credits', $course->credits) }}" class="w-full border px-3 py-2" required>
        </div>
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
