<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Team\StoreTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $team = Team::when($request->search, function ($query) use ($request) {
            $query->where('name->ar', 'like', '%' . $request->search . '%')
                ->orWhere('name->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();
        $data['image'] = uploadFile($request->file('image'), 'teams');
        $team = Team::create($data);

        return redirect()->route('manage.team.index')->with('success', __('dashboard.created_successfully'));
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
        $team = Team::findOrFail($id);
        return view('manage.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTeamRequest $request, string $id)
    {
        $team = Team::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = uploadFile($request->file('image'), 'team');
        }

        $team->update($data);

        return redirect()->route('manage.team.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('manage.team.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
