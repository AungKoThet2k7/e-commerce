<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subCategories = SubCategory::when(request("search"), function ($q) {
            $q->where("name", "like", "%" . request("search") . "%");
        })->when(request('trashed'), fn($q) => $q->onlyTrashed())
            ->with(['category', 'createdBy', 'updatedBy'])
            ->paginate(3)
            ->withQueryString();
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
        $subCategory = new SubCategory();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->created_by = Auth::id();
        $subCategory->updated_by = Auth::id();

        if ($request->file('image')) {
            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('sub-category', $newImageName, 'public');

            //store image to database
            $subCategory->image = $newImageName;
        }

        $subCategory->save();

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
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->updated_by = Auth::id();

        if ($request->file('image')) {
            //delete old image
            Storage::disk('public')->delete('sub-category/' . $subCategory->image);

            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('sub-category', $newImageName, 'public');

            //store image to database
            $subCategory->image = $newImageName;
        }

        $subCategory->update();

        return redirect()->route("sub-category.index")->with("success", "Sub Category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subCategory = SubCategory::withTrashed()->findOrFail($id);

        if (request("delete") === "restore") {

            //Restore sub category
            $subCategory->restore();

            return redirect()->route("sub-category.index")->with("success", "Sub Category Recycle successfully");
        } elseif (request("delete") === "force") {

            //Delete image from storage
            Storage::disk('public')->delete('sub-category/' . $subCategory->image);

            //Force delete from database
            $subCategory->forceDelete();

            return redirect()->route("sub-category.index")->with("success", "Sub Category delete successfully");
        } else {

            //Move sub category to trash
            $subCategory->delete();

            return redirect()->route("sub-category.index")->with("success", "Sub Category trash successfully");
        }
    }
}
