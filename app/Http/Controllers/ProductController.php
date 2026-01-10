<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:products.index', only: ['index']),
            new Middleware('permission:products.create', only: ['create']),
            new Middleware('permission:products.store', only: ['store']),
            new Middleware('permission:products.show', only: ['show']),
            new Middleware('permission:products.edit', only: ['edit']),
            new Middleware('permission:products.update', only: ['update']),
            new Middleware('permission:products.destroy', only: ['destroy']),
            new Middleware('permission:products.status', only: ['updateStatus']),
            new Middleware('permission:products.sort', only: ['updateSort']),
        ];
    }

    public function index(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string',
            'trashed' => 'nullable|in:1',
            'status' => 'nullable|in:all,0,1',
        ]);

        $products = Product::orderBy('sort', 'desc')
            ->when(request('search'), function ($q) {

                $q->where(function ($q) {
                    // search by Product Name
                    $q->where('name_en', 'like', '%'.request('search').'%')
                        ->orWhere('name_mm', 'like', '%'.request('search').'%')

                        // search by Username (updated_by)
                        ->orWhereHas('updatedBy', function ($q) {
                            $q->where('name', 'like', '%'.request('search').'%');
                        });
                });
            })
            ->when(request('trashed'), fn ($q) => $q->onlyTrashed())
            // filter by status
            ->when(request('status') !== null && request('status') !== 'all',
                fn ($q) => $q->where('status', request('status')))
            ->with(['createdBy', 'updatedBy', 'productVariants.productAttributeOptions.productAttribute'])
            ->paginate(5)
            ->withQueryString();

        // return $products;

        return view('product.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributes = ProductAttribute::with(['productAttributeOptions'])->get();

        return view('product.create', compact(['attributes']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // return $request;
        $maxSortNumber = product::all()->max('sort');
        $product = Product::firstOrCreate([
            'name_en' => $request->name_en,
        ], [
            'name_mm' => $request->name_mm,
            'status' => $request->status,
            'sort' => $maxSortNumber + 1,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        ]);

        foreach ($request->variants as $variant) {
            $productVariant = $product->productVariants()->create([
                'stock' => $variant['stock'],
                'price' => $variant['price'],
            ]);

            $productVariant->productAttributeOptions()->sync($variant['attributeOptions']);
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function updateStatus(Product $product, Request $request)
    {
        $product->status = $product->status == 1 ? 0 : 1;
        $product->updated_by = Auth::id();
        $product->update();

        return redirect()->back();
    }

    public function updateSort(Request $request, Product $product)
    {
        $request->validate([
            'sort' => 'required|integer',
        ]);

        $product->sort = $request->sort;
        $product->updated_by = Auth::id();
        $product->update();

        return redirect()->back();
    }
}
