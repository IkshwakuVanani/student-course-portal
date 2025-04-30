@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Course List</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('courses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Add New Course
    </a>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Title</th>
                <th class="px-4 py-2 border">Credits</th>
                <th class="px-4 py-2 border">Created At</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td class="px-4 py-2 border">{{ $course->title }}</td>
                    <td class="px-4 py-2 border">{{ $course->credits }}</td>
                    <td class="px-4 py-2 border">{{ $course->created_at->format('Y-m-d') }}</td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('courses.edit', $course) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:underline ml-2"
                                onclick="return confirm('Delete this course?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 border text-center text-gray-500">
                        No courses found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
