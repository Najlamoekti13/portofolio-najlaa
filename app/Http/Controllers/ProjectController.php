<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Tampilkan semua data project
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // Form untuk buat data baru
    public function create()
    {
        return view('projects.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // Form edit project
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Update data project
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate!');
    }

    // Hapus project
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus!');
    }
}
