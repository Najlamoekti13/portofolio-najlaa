@extends('layouts.app')

@section('title', 'Tambah Project')

@section('content')
    <div class="max-w-2xl mx-auto bg-black bg-opacity-40 text-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">🚀 Tambah Project Baru</h2>

        @if ($errors->any())
            <div class="bg-red-800 text-white p-4 mb-4 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block mb-1">Judul Project</label>
                <input type="text" name="title" id="title"
                    class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-indigo-700 hover:bg-indigo-500 text-white font-semibold px-6 py-2 rounded-full transition">
                    Simpan 🚀
                </button>
            </div>
        </form>
    </div>
@endsection
