@extends('layouts.app')

@section('title', 'Daftar Project')

@section('content')
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold mb-2 text-white">🚀 Daftar Project</h2>
        <a href="{{ route('projects.create') }}"
           class="bg-indigo-700 hover:bg-indigo-500 text-white font-semibold py-2 px-4 rounded-full transition">
            + Tambah Project
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-700 text-white px-4 py-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full table-auto bg-black bg-opacity-40 text-white rounded-lg shadow-md">
            <thead class="bg-indigo-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">Judul</th>
                    <th class="px-4 py-2 text-left">Deskripsi</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr class="border-b border-indigo-600">
                        <td class="px-4 py-3">{{ $project->title }}</td>
                        <td class="px-4 py-3">{{ $project->description }}</td>
                        <td class="px-4 py-3 text-center">
                            <a href="{{ route('projects.edit', $project->id) }}"
                               class="bg-yellow-600 hover:bg-yellow-500 text-white px-3 py-1 rounded mr-2">Edit</a>

                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Yakin ingin menghapus project ini?')"
                                        class="bg-red-700 hover:bg-red-500 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-300">Belum ada project yang ditambahkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
