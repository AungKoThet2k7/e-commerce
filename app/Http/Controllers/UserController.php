<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
            $q->orWhere("email", "like", "%" . request("search") . "%");
        })->paginate(5)->withQueryString();
        return view('user.index', compact(["users"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreuserRequest $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        return redirect()->route("user.index")->with("success", "New User Added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view('user.edit', compact(["user"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserRequest $request, user $user)
    {
        // return $user;
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        
        return redirect()->route("user.index")->with("success", "User info updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route("user.index")->with("success", "User deleted successfully");
    }
}
