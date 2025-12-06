<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
        })->when(request('trashed'), fn($q) => $q->onlyTrashed())
            ->with(['createdBy', 'updatedBy'])
            ->paginate(3)
            ->withQueryString();
        return view('category.index', compact(["categories"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->created_by = Auth::id();
        $category->updated_by = Auth::id();

        if ($request->file('image')) {
            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('category', $newImageName, 'public');

            //store image to database
            $category->image = $newImageName;
        }

        $category->save();

        return redirect()->route("category.index")->with("success", "New Category Added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return abort(404, "Page Not Found");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact(["category"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // return $request;
        $category->name = $request->name;
        $category->updated_by = Auth::id();

        if ($request->file('image')) {
            //delete old image
            Storage::disk('public')->delete('category/' . $category->image);

            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('category', $newImageName, 'public');

            //store image to database
            $category->image = $newImageName;
        }

        $category->update();

        return redirect()->route("category.index")->with("success", "Category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::withTrashed()->findOrFail($id);

        if (request("delete") === "restore") {

            //restore category
            $category->restore();

            return redirect()->route("category.index")->with("success", "Category Restore successfully");
        } elseif (request("delete") === "force") {

            //delete image from storage
            if (isset($category->image)) {
                Storage::disk('public')->delete('category/' . $category->image);
            }

            //force delete from database
            $category->forceDelete();

            return redirect()->route("category.index")->with("success", "Category delete successfully");
        } else {

            //Move category to trash
            $category->delete();

            return redirect()->route("category.index")->with("success", "Category trash successfully");
        }
    }
}
