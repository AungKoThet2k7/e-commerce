<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:roles.index', only: ['index']),
            new Middleware('permission:roles.create', only: ['create']),
            new Middleware('permission:roles.store', only: ['store']),
            new Middleware('permission:roles.show', only: ['show']),
            new Middleware('permission:roles.edit', only: ['edit']),
            new Middleware('permission:roles.update', only: ['update']),
            new Middleware('permission:roles.destroy', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();

        // return $roles;
        return view('user.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all()->groupBy(fn ($permission) => explode('.', $permission->name)[0]);
        // return $permissions;

        return view('user.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name|min:3|max:20',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,name',
        ]);

        // return $request->permissions;

        $role = Role::create([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('role.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404, 'Page Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy(fn ($permission) => explode('.', $permission->name)[0]);

        // return $permissions;
        return view('user.role.edit', compact(['role', 'permissions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => [
                'required',
                'min:3',
                'max:20',
                Rule::unique('roles', 'name')->ignore($id),
            ],
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,name',
        ]);

        // return $request;
        $role = Role::findOrFail($id);

        $role->update([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('role.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role deleted successfully');
    }
}
