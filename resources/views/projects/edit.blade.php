@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="max-w-2xl mx-auto bg-black bg-opacity-40 text-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">🛠️ Edit Project</h2>

        @if ($errors->any())
            <div class="bg-red-800 text-white p-4 mb-4 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block mb-1">Judul Project</label>
                <input type="text" name="title" id="title" value="{{ $project->title }}"
                    class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>{{ $project->description }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-indigo-700 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded-full transition">
                    Update 🌌
                </button>
            </div>
        </form>
    </div>
@endsection
