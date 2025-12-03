<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
        })->with(['category', 'createdBy', 'updatedBy'])->paginate(3)->withQueryString();
        return view('sub-category.index', compact(["subCategories"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sub-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        // return $request;
        SubCategory::create([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "created_by" => Auth::id(),
            "updated_by" => Auth::id(),
        ]);
        return redirect()->route("sub-category.index")->with("success", "New Sub Category Added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        return abort(404, "Page Not Found");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('sub-category.edit', compact(["subCategory"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {   
        $subCategory->update([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "updated_by" => Auth::id(),
        ]);

        return redirect()->route("sub-category.index")->with("success", "Sub Category updated successfully");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route("sub-category.index")->with("success", "Sub Category delete successfully");
    }
}
