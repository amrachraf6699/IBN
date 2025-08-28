<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Projects\StoreProjectsRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projects = Project::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectsRequest $request)
    {
        $data = $request->validated();
        $data['image'] = uploadFile($request->file('image'), 'projects');
        $project = Project::create($data);

        return redirect()->route('manage.projects.index')->with('success', __('dashboard.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('manage.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectsRequest $request, string $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'projects');
        }
        $project->update($data);

        return redirect()->route('manage.projects.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('manage.projects.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
