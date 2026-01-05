<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductBrandRequest;
use App\Http\Requests\UpdateProductBrandRequest;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductBrandController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:productbrands.index', only: ['index']),
            new Middleware('permission:productbrands.create', only: ['create']),
            new Middleware('permission:productbrands.store', only: ['store']),
            new Middleware('permission:productbrands.show', only: ['show']),
            new Middleware('permission:productbrands.edit', only: ['edit']),
            new Middleware('permission:productbrands.update', only: ['update']),
            new Middleware('permission:productbrands.destroy', only: ['destroy']),
            new Middleware('permission:productbrands.status', only: ['updateStatus']),
            new Middleware('permission:productbrands.sort', only: ['updateSort']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $request->validate([
            'search' => 'nullable|string',
            'status' => 'nullable|in:all,0,1',
            'trashed' => 'nullable|in:1',
        ]);

        $productBrands = ProductBrand::orderBy('sort', 'desc')
            ->when(request('search'), function ($q) {
                $q->where(function ($q) {
                    // search by Product Brand Name
                    $q->where('name_en', 'like', '%'.request('search').'%')
                        ->orWhere('name_mm', 'like', '%'.request('search').'%')

                        // search with Username (updated_by)
                        ->orwhereHas('updatedBy', function ($q) {
                            $q->where('name', 'like', '%'.request('search').'%');
                        });
                });
            })  // filter by status
            ->when(request('status') != 'all' && request('status') != null, fn ($q) => $q->where('status', request('status')))
            // trashed
            ->when(request('trashed'), fn ($q) => $q->onlyTrashed())
            ->with(['createdBy', 'updatedBy'])
            ->paginate(3)
            ->withQueryString();

        return view('product-brand.index', compact(['productBrands']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product-brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductBrandRequest $request)
    {
        $productBrand = new ProductBrand;

        $maxSortNumber = ProductBrand::all()->max('sort');

        $productBrand->name_en = $request->name_en;
        $productBrand->name_mm = $request->name_mm;
        $productBrand->status = $request->status;
        $productBrand->sort = $maxSortNumber + 1;
        $productBrand->created_by = Auth::id();
        $productBrand->updated_by = Auth::id();

        if ($request->hasFile('logo')) {
            $newLogoName = uniqid().'-'.$request->file('logo')->getClientOriginalName();

            $request->logo->storeAs('product-brand', $newLogoName, 'public');

            $productBrand->logo = $newLogoName;

            $productBrand->logo_alt = $request->logo_alt;
        }

        $productBrand->save();

        return redirect()->route('product-brand.index')->with('success', 'New Product Brand Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductBrand $productBrand)
    {
        return abort(404, 'Page Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductBrand $productBrand)
    {
        return view('product-brand.edit', compact(['productBrand']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductBrandRequest $request, ProductBrand $productBrand)
    {
        $productBrand->name_en = $request->name_en;
        $productBrand->name_mm = $request->name_mm;
        $productBrand->status = $request->status;
        $productBrand->updated_by = Auth::id();

        if ($request->hasFile('logo')) {

            Storage::disk('public')->delete('product-brand/'.$productBrand->logo);

            $newLogoName = uniqid().'-'.$request->file('logo')->getClientOriginalName();

            $request->logo->storeAs('product-brand', $newLogoName, 'public');

            $productBrand->logo = $newLogoName;

            $productBrand->logo_alt = $request->logo_alt;
        }

        $productBrand->update();

        return redirect()->route('product-brand.index')->with('success', 'Product Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $productBrand = ProductBrand::withTrashed()->findOrFail($id);
        if (request('delete') == 'restore') {
            // restore product brand
            $productBrand->restore();

            return redirect()->back()->with('success', 'Product Brand Restored Successfully');

        } elseif (request('delete') == 'force') {
            // force delete

            Storage::disk('public')->delete('product-brand/'.$productBrand->logo);

            $productBrand->forceDelete();

            return redirect()->back()->with('success', 'Product Brand Deleted Successfully');

        } else {
            // trash product brand
            $productBrand->delete();

            return redirect()->route('product-brand.index')->with('success', 'Product Brand trashed Successfully');

        }
    }

    public function updateSort(Request $request, $id)
    {
        $request->validate([
            'sort' => 'required|integer',
        ]);

        $productBrand = ProductBrand::findOrFail($id);

        $productBrand->sort = $request->sort;
        $productBrand->updated_by = Auth::id();

        $productBrand->update();

        return redirect()->back();
    }

    public function updateStatus(Request $request, $id)
    {
        $productBrand = ProductBrand::findOrFail($id);

        $productBrand->status = $productBrand->status == 1 ? 0 : 1;
        $productBrand->updated_by = Auth::id();

        $productBrand->update();

        return redirect()->back();
    }
}
