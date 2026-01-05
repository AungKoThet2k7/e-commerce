<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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
            ->when(request('status') !== null && request('status') !== 'all', fn ($q) => $q->where('status', request('status')))
            ->with(['createdBy', 'updatedBy'])
            ->paginate(5)
            ->withQueryString();

        return view('product.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
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

    public function updateStatus(Product $product)
    {
        //
    }

    public function updateSort(Request $request, Product $product)
    {
        //
    }
}
