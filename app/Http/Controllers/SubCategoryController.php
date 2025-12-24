<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:subcategories.index', only: ['index']),
            new Middleware('permission:subcategories.create', only: ['create']),
            new Middleware('permission:subcategories.store', only: ['store']),
            new Middleware('permission:subcategories.show', only: ['show']),
            new Middleware('permission:subcategories.edit', only: ['edit']),
            new Middleware('permission:subcategories.update', only: ['update']),
            new Middleware('permission:subcategories.destroy', only: ['destroy']),
            new Middleware('permission:subcategories.status', only: ['updateStatus']),
            new Middleware('permission:subcategories.sort', only: ['updateSort']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string',
            'trashed' => 'nullable|in:1',
            'status' => 'nullable|in:all,0,1',
            'category' => 'nullable|exists:categories,id',
        ]);
        // return $request;
        $subCategories = SubCategory::orderBy('sort', 'desc')
            ->when(request('search'), function ($q) {
                $q->where(function ($q) {
                    // search by Sub Category Name
                    $q->where('name_en', 'like', '%'.request('search').'%')
                        ->orWhere('name_mm', 'like', '%'.request('search').'%')

                        // search with Category Name (category_id)
                        ->orWhereHas('category', function ($q) {
                            $q->where('name_en', 'like', '%'.request('search').'%')
                                ->orWhere('name_mm', 'like', '%'.request('search').'%');
                        })

                        // search with Username (updated_by)
                        ->orWhereHas('updatedBy', function ($q) {
                            $q->where('name', 'like', '%'.request('search').'%');
                        });
                });
            })
            ->when(request('trashed'), fn ($q) => $q->onlyTrashed())
            // filter by status
            ->when(request('status') !== 'all' && request('status') !== null, fn ($q) => $q->where('status', request('status')))
            ->when(request('category'), fn ($q) => $q->where('category_id', request('category')))
            ->with(['category', 'createdBy', 'updatedBy'])
            ->paginate(3)
            ->withQueryString();

        return view('sub-category.index', compact(['subCategories']));
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
        $maxSortNumber = SubCategory::all()->max('sort');

        $subCategory = new SubCategory;

        $subCategory->name_en = $request->name_en;
        $subCategory->name_mm = $request->name_mm;
        $subCategory->status = $request->status;
        $subCategory->sort = $maxSortNumber + 1;
        $subCategory->category_id = $request->category_id;
        $subCategory->created_by = Auth::id();
        $subCategory->updated_by = Auth::id();

        if ($request->hasFile('image')) {
            // new image name
            $newImageName = uniqid().'-'.$request->file('image')->getClientOriginalName();

            // store image to storage
            $request->image->storeAs('sub-category', $newImageName, 'public');

            // store image to database
            $subCategory->image = $newImageName;

            // store image alt to database
            $subCategory->image_alt = $request->image_alt;
        }

        $subCategory->save();

        return redirect()->route('sub-category.index')->with('success', 'New Sub Category Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        return abort(404, 'Page Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('sub-category.edit', compact(['subCategory']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        // return $request;
        $subCategory->name_en = $request->name_en;
        $subCategory->name_mm = $request->name_mm;
        $subCategory->status = $request->status;
        $subCategory->category_id = $request->category_id;
        $subCategory->updated_by = Auth::id();

        if ($request->hasFile('image')) {
            // delete old image
            Storage::disk('public')->delete('sub-category/'.$subCategory->image);

            // new image name
            $newImageName = uniqid().'-'.$request->file('image')->getClientOriginalName();

            // store image to storage
            $request->image->storeAs('sub-category', $newImageName, 'public');

            // store image to database
            $subCategory->image = $newImageName;

            // store image alt to database
            $subCategory->image_alt = $request->image_alt;
        }

        $subCategory->update();

        return redirect()->route('sub-category.index')->with('success', 'Sub Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subCategory = SubCategory::withTrashed()->findOrFail($id);

        if (request('delete') === 'restore') {

            // Restore sub category
            $subCategory->restore();

            return redirect()->route('sub-category.index')->with('success', 'Sub Category Recycle successfully');
        } elseif (request('delete') === 'force') {

            // Delete image from storage
            Storage::disk('public')->delete('sub-category/'.$subCategory->image);

            // Force delete from database
            $subCategory->forceDelete();

            return redirect()->route('sub-category.index')->with('success', 'Sub Category delete successfully');
        } else {

            // Move sub category to trash
            $subCategory->delete();

            return redirect()->route('sub-category.index')->with('success', 'Sub Category trash successfully');
        }
    }

    public function updateStatus($id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $subCategory->status = $subCategory->status == 1 ? 0 : 1;
        $subCategory->updated_by = Auth::id();

        $subCategory->update();

        return redirect()->back();
    }

    public function updateSort(Request $request, $id)
    {
        $request->validate([
            'sort' => 'required|integer',
        ]);

        $subCategory = SubCategory::findOrFail($id);

        $subCategory->sort = $request->sort;
        $subCategory->updated_by = Auth::id();

        $subCategory->update();

        return redirect()->back();
    }
}
