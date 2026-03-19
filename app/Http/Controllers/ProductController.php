<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeOption;
use App\Models\ProductVariant;
use App\Models\ProductVariantOption;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // Query
        $query = Product::query();

        // Sort
        $query->orderBy('sort', 'desc');

        // Search
        $query->search($request->search);

        // Trashed
        $query->when($request->trashed == '1', fn ($q) => $q->onlyTrashed());

        // filter by status
        $validStatus = ['0', '1'];
        $query->status($request->status, $validStatus);

        // Filter by brand
        $query->when($request->filter_by_brand, fn ($q) => $q->where('brand_id', $request->filter_by_brand));

        // Filter by sub category
        $query->when($request->filter_by_subcategory, fn ($q) => $q->where('sub_category_id', $request->filter_by_subcategory));

        // Filter by category
        $query->when($request->filter_by_category, fn ($q) => $q->where('category_id', $request->filter_by_category));

        $query->with(['createdBy', 'updatedBy', 'productVariants.productAttributeOptions.productAttribute', 'brand', 'subCategory' , 'category']);

        // Paginate
        $products = $query->paginate(5)->withQueryString();

        // return $products;

        return view('product.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributes = ProductAttribute::with(['productAttributeOptions'])->get();
        $options = ProductAttributeOption::with(['productAttribute'])->get();

        return view('product.create', compact(['attributes', 'options']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        DB::transaction(function () use ($request) {
            // Get max sort number
            $maxSortNumber = product::orderByDesc('sort')->value('sort') ?? 0;

            $userId = Auth::id();

            // Unique image name
            $defaultImageName = uniqid().'-'.$request->file('default_image')->getClientOriginalName();

            // Store image to storage
            $request->default_image->storeAs('product', $defaultImageName, 'public');

            // Get category from sub category
            $categoryId = SubCategory::find($request->sub_category_id)->category_id;

            // Create product
            $product = Product::firstOrCreate([
                'name_en' => $request->name_en,
            ], [
                'name_mm' => $request->name_mm,
                'default_image' => $defaultImageName,
                'default_image_alt' => $request->default_image_alt,
                'sub_category_id' => $request->sub_category_id,
                'category_id' => $categoryId,
                'brand_id' => $request->brand_id,
                'status' => $request->status,
                'sort' => $maxSortNumber + 1,
                'created_by' => $userId,
                'updated_by' => $userId,
            ]);

            // temp attribute options
            $tmpAttributeOptions = [];

            foreach ($request->variants as $variantData) {
                // Create variant and get id
                $variantId = ProductVariant::insertGetId([
                    'product_id' => $product->id,
                    'stock' => $variantData['stock'],
                    'price' => $variantData['price'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Add attribute options to temp array
                foreach ($variantData['attributeOptions'] as $OptionId) {
                    $tmpAttributeOptions[] = [
                        'product_variant_id' => $variantId,
                        'product_attribute_option_id' => $OptionId,
                    ];
                }
            }

            // Insert attribute options
            ProductVariantOption::insert($tmpAttributeOptions);

        });

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
