@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add New Course</h1>

    <form action="{{ route('courses.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block">Title</label>
            <input name="title" class="w-full border px-3 py-2" required>
        </div>
        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border px-3 py-2" required></textarea>
        </div>
        <div>
            <label class="block">Credits</label>
            <input name="credits" type="number" class="w-full border px-3 py-2" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
