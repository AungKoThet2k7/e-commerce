<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
        })->with(['createdBy', 'updatedBy'])
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
        Category::create([
            "name" => $request->name,
            "created_by" => Auth::id(),
            "updated_by" => Auth::id(),
        ]);
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
        $category->update([
            "name" => $request->name,
            "updated_by" => Auth::id(),
        ]);
        return redirect()->route("category.index")->with("success", "Category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route("category.index")->with("success", "Category deleted successfully");
    }
}
