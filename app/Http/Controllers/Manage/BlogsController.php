<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Blogs\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogs = Blog::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $data = $request->validated();
        $data['image'] = uploadFile($request->file('image'), 'blogs');
        $blog = Blog::create($data);

        return redirect()->route('manage.blogs.index')->with('success', __('dashboard.created_successfully'));
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
        $blog = Blog::findOrFail($id);

        return view('manage.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBlogRequest $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'blogs');
        }

        $blog->update($data);

        return redirect()->route('manage.blogs.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('manage.blogs.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
