<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Admins\StoreAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admins = Admin::latest()->get();
        return view('manage.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('manage.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        $validated = $request->validated();
        $admin = Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);
        $admin->assignRole($validated['role']);

        return redirect()->route('manage.admins.index')->with('success', __('dashboard.created_successfully'));
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
        $admin = Admin::findOrFail($id);
        $roles = Role::all();
        return view('manage.admins.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAdminRequest $request, string $id)
    {
        $validated = $request->validated();
        $role = $validated['role'];
        unset($validated['role']);

        if($validated['password'] == null) {
            unset($validated['password']);
        }


        $admin = Admin::findOrFail($id);
        $admin->update($validated);
        $admin->syncRoles($role);

        return redirect()->route('manage.admins.index')->with('success', __('dashboard.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('manage.admins.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
