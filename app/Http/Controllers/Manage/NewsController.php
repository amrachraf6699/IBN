<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\News\StoreNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = News::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $data['image'] = uploadFile($request->file('image'), 'newss');
        $news = News::create($data);

        return redirect()->route('manage.news.index')->with('success', __('dashboard.created_successfully'));
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
        $news = News::findOrFail($id);
        return view('manage.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNewsRequest $request, string $id)
    {
        $news = News::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'newss');
        }

        $news->update($data);

        return redirect()->route('manage.news.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('manage.news.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
