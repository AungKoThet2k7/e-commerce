<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest("id")->when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
            $q->orWhere("email", "like", "%" . request("search") . "%");
        })->when(request('trashed'), fn($q) => $q->onlyTrashed())
            ->paginate(5)
            ->withQueryString();
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
        // return $request;
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($request->hasFile('image')) {
            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('user', $newImageName, 'public');

            //store image to database
            $user->image = $newImageName;

            //store image alt to database
            $user->image_alt = $request->image_alt;
        }

        $user->save();

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
        // return $request;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($request->hasFile('image')) {
            //delete old image
            Storage::disk('public')->delete('user/' . $user->image);

            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('user', $newImageName, 'public');

            //store image to database
            $user->image = $newImageName;

            //store image alt to database
            $user->image_alt = $request->image_alt;
        }

        $user->update();

        return redirect()->route("user.index")->with("success", "User info updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = user::withTrashed()->findOrFail($id);

        if (request("delete") === "restore") {

            //restore user
            $user->restore();

            return redirect()->route("user.index")->with("success", "User Restore successfully");
        } elseif (request("delete") === "force") {

            //delete image from storage
            if (isset($user->image)) {
                Storage::disk('public')->delete('user/' . $user->image);
            }

            //force delete from database
            $user->forceDelete();

            return redirect()->route("user.index")->with("success", "User delete successfully");
        } else {

            //Move user to trash
            $user->delete();

            return redirect()->route("user.index")->with("success", "User trash successfully");
        }
    }
}
