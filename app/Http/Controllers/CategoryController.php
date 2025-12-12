<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $request->validate([
            "search" => "nullable|string",
            "trashed" => "nullable|in:1",
            "status" => "nullable|in:all,0,1",
        ]);

        $categories = Category::orderBy("sort", "desc")
            ->when(request("search"), function ($q) {

                $q->where(function ($q) {
                    //search by Category Name
                    $q->where("name", "like", "%" . request("search") . "%")

                        //search by Username (updated_by)
                        ->orWhereHas("updatedBy", function ($q) {
                            $q->where("name", "like", "%" . request("search") . "%");
                        });
                });
            })
            ->when(request('trashed'), fn($q) => $q->onlyTrashed())
            //filter by status
            ->when(request('status') !== null && request('status') !== 'all', fn($q) => $q->where('status', request('status')))
            ->with(['createdBy', 'updatedBy'])
            ->paginate(5)
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
        // return $request;
        $maxSortNumber = Category::all()->max('sort');

        $category = new Category();

        $category->name = $request->name;
        $category->status = $request->status;
        $category->sort = $maxSortNumber + 1;
        $category->created_by = Auth::id();
        $category->updated_by = Auth::id();

        if ($request->hasFile('image')) {
            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('category', $newImageName, 'public');

            //store image to database
            $category->image = $newImageName;

            //store image alt to database
            $category->image_alt = $request->image_alt;
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
        $category->status = $request->status;
        $category->updated_by = Auth::id();

        if ($request->hasFile('image')) {
            //delete old image
            Storage::disk('public')->delete('category/' . $category->image);

            //new image name
            $newImageName =  uniqid() . '-' . $request->file('image')->getClientOriginalName();

            //store image to storage
            $request->image->storeAs('category', $newImageName, 'public');

            //store image to database
            $category->image = $newImageName;

            //store image alt to database
            $category->image_alt = $request->image_alt;
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

    public function updateStatus($id)
    {
        $category = Category::findOrFail($id);

        $category->status = $category->status == 1 ? 0 : 1;
        $category->updated_by = Auth::id();

        $category->update();

        return redirect()->back();
    }

    public function updateSort(Request $request, $id)
    {
        $request->validate([
            'sort' => 'required|integer',
        ]);

        $category = Category::findOrFail($id);

        $category->sort = $request->sort;
        $category->updated_by = Auth::id();

        $category->update();

        return redirect()->back();
    }
}
