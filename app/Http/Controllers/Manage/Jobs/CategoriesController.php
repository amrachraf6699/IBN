<?php

namespace App\Http\Controllers\Manage\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Jobs\StoreCategoryRequest;
use App\Models\JobPostingCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = JobPostingCategory::latest()->when($request->search, function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->search . '%');
        })
        ->withCount('jobs')
        ->get();

        return view('manage.jobs.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('manage.jobs.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        JobPostingCategory::create($request->validated());

        return redirect()->route('manage.categories.index')->with('success', __('dashboard.created_successfully'));
    }

    public function show(JobPostingCategory $category)
    {
        return view('manage.jobs.categories.show', compact('category'));
    }

    public function edit(JobPostingCategory $category)
    {
        return view('manage.jobs.categories.edit', compact('category'));
    }

    public function update(StoreCategoryRequest $request, JobPostingCategory $category)
    {
        $category->update($request->validated());

        return redirect()->route('manage.categories.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy(JobPostingCategory $category)
    {
        $category->delete();

        return redirect()->route('manage.categories.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
