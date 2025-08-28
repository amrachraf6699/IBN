<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Clients\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {

        $data = $request->validated();
        $data['added_by'] = auth()->id();
        $data['image'] = uploadFile($request->file('image'), 'clients');

        $client = Client::create($data);

        return redirect()->route('manage.clients.index')->with('success', __('dashboard.created_successfully'));
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
        $client = Client::findOrFail($id);

        return view('manage.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClientRequest $request, string $id)
    {
        $client = Client::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'clients');
        }

        $client->update($data);

        return redirect()->route('manage.clients.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('manage.clients.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
