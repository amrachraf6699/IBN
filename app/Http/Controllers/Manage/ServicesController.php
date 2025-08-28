<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Services\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = Service::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['image'] = uploadFile($request->file('image'), 'services');
        $data['icon'] = uploadFile($request->file('icon'), 'services');
        $service = Service::create($data);

        return redirect()->route('manage.services.index')->with('success', __('dashboard.created_successfully'));
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
        $service = Service::findOrFail($id);
        return view('manage.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiceRequest $request, string $id)
    {
        $service = Service::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'services');
        }

        if ($request->hasFile('icon')) {
            $data['icon'] = uploadFile($request->file('icon'), 'services');
        }

        $service->update($data);

        return redirect()->route('manage.services.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('manage.services.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
