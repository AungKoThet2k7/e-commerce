@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('backend.product.products') }}
                </h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    @trashed
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('product.index') }}"
                                class="text-muted text-hover-primary">{{ __('backend.product.products') }}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">{{ __('backend.product.trashed_products') }}</li>
                        <!--end::Item-->
                    @else
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">{{ __('backend.product.products') }}</li>
                        <!--end::Item-->
                    @endtrashed
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Product-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-36 mt-1">
                                @if (request('search'))
                                    <a href="{{ route('product.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor">
                                            </rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                        </svg>
                                    </a>
                                @else
                                    <button form="filterForm" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor">
                                            </rect>
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </button>
                                @endif
                            </span>

                            <!--end::Svg Icon-->
                            <form id="filterForm" action="{{ route('product.index') }}" method="GET">
                                <input value="{{ request('search') }}" name="search" type="text"
                                    data-kt-user-table-filter="search" class="form-control form-control-solid w-150px ps-5"
                                    placeholder="{{ __('backend.common.search') }} ...">
                            </form>
                        </div>
                        <!--end::Search-->
                        <!--start::Status-->
                        <div class="ms-3">
                            <!--begin::Select2-->
                            <select form="filterForm" onchange="this.form.submit()" name="status"
                                class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="{{ __('backend.common.status') }}"
                                data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-10-whsc"
                                tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-12-pxpb"></option>
                                <option value="all" @selected(request('status') == 'all')>{{ __('backend.common.all') }}</option>
                                <option value="1" @selected(request('status') == '1')>{{ __('backend.common.active') }}
                                </option>
                                <option value="0" @selected(request('status') == '0')>{{ __('backend.common.inactive') }}
                                </option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Status-->
                    </div>
                    <!--end::Card title-->
                    <div class="flex gap-3">
                        @trashed
                        @else
                            {{-- @can('delete') --}}
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::trash-->
                                <a href="{{ route('product.index', ['trashed' => true]) }}"
                                    class="btn bg-amber-500/95 hover:bg-amber-500 flex justify-center items-center gap-1">
                                    <i class="bi bi-trash text-white"></i>
                                    <span class="text-white">{{ __('backend.common.trash') }}</span>
                                </a>
                                <!--end::trash-->
                            </div>
                            <!--end::Card toolbar-->
                            {{-- @endcan --}}
                        @endtrashed

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            @trashed
                                <!--begin::Product list-->
                                <a href="{{ route('product.index') }}"
                                    class="btn btn-primary flex items-center justify-center">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{ __('backend.product.products') }}
                                </a>
                                <!--end::Product list-->
                            @else
                                <!--begin::Add category-->
                                <a href="{{ route('product.create') }}"
                                    class="btn btn-primary flex items-center justify-center">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                            </rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{ __('backend.product.create') }}
                                </a>
                                <!--end::Add category-->
                            @endtrashed
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <div id="kt_ecommerce_category_table_wrapper" class=" dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 no-footer"
                                id="kt_ecommerce_category_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>#</th>
                                        <th class=" text-nowrap  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Category: activate to sort column ascending">
                                            {{ __('backend.product.product') }}</th>
                                        <th class="text-nowarp text-center  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">
                                            {{ __('backend.common.status') }}</th>
                                        <th class="text-nowarp  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">
                                            {{ __('backend.common.sorting') }}</th>
                                        <th class="text-nowarp min-w-70px sorting_disabled" rowspan="1"
                                            colspan="1">
                                            {{ __('backend.common.last_updated') }}
                                        </th>
                                        <th class="text-nowarp text-center min-w-80px sorting_disabled" rowspan="1"
                                            colspan="1" aria-label="Actions">{{ __('backend.common.actions') }}</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    @forelse ($products as $key => $product)
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <!--begin::Product=-->
                                            <td>
                                                <div class="d-flex">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url({{ $product->image ? asset('storage/product/' . $product->image) : asset('template/media/svg/files/blank-image.svg') }});">
                                                        </span>
                                                        <!--Image with img tag-->
                                                        {{-- <img class="fs-8" src="{{ asset('storage/product/' . $product->image) }}"
                                                                alt="product image"> --}}
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class=" flex items-center ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('product.edit', $product->id) }}"
                                                            class="text-gray-700 text-hover-primary fs-5 fw-bolder"
                                                            data-kt-ecommerce-category-filter="category_name">{{ $product->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Product=-->
                                            <!--Begin::Status=-->
                                            <td>
                                                <form action="{{ route('product.update-status', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div
                                                        class="flex justify-center form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input onchange="this.form.submit()" class="form-check-input"
                                                            type="checkbox" value="" name="status"
                                                            @checked($product->status)>
                                                    </div>
                                                </form>
                                            </td>
                                            <!--Begin::Status=-->
                                            <!--Begin::Sorting=-->
                                            <td class="text-start">
                                                <form class="flex gap-1"
                                                    action="{{ route('product.update-sort', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input value="{{ $product->sort }}" type="number" name="sort"
                                                        class=" w-100px px-3 py-2 rounded-md border border-gray-900 focus:outline-none">

                                                    <button type="submit"
                                                        class="px-3.5 py-2 rounded-md bg-purple-700 text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M12 2h-2v3h2z" />
                                                            <path
                                                                d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                            <!--begin::Updated at=-->
                                            <td class="">
                                                <div>
                                                    <h1 class="text-gray-700 fs-5 fw-bolder">
                                                        {{ $product->updatedBy?->name ?? '---' }}</h1>
                                                    <p class=" text-nowrap">{{ $product->updated_at->format('j M Y') }}
                                                        <span>{{ $product->updated_at->format('g : i A') }}</span>
                                                    </p>
                                                </div>
                                            </td>
                                            <!--end::Updated at=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <div class="flex justify-center gap-1 px-3">
                                                    @trashed
                                                        @can('products.destroy')
                                                            <!--begin:: Recycle-->
                                                            <form
                                                                action="{{ route('product.destroy', [$product->id, 'delete' => 'restore']) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="px-3 bg-green-500 p-2 rounded-md">
                                                                    <i class="bi bi-recycle text-white"></i>
                                                                </button>
                                                            </form>
                                                            <!--end:: Recycle-->
                                                            <!--begin:: Force Delete-->
                                                            <form
                                                                action="{{ route('product.destroy', [$product->id, 'delete' => 'force']) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                    <i class="bi bi-trash text-white"></i>
                                                                </button>
                                                            </form>
                                                            <!--end:: Force Delete-->
                                                        @endcan
                                                    @else
                                                        @can('products.edit')
                                                            <!--begin::Edit-->
                                                            <a href="{{ route('product.edit', $product->id) }}"
                                                                class="px-3 bg-green-500 p-2 rounded-md">
                                                                <i class="bi bi-pencil-square text-white"></i>
                                                            </a>
                                                            <!--end::Edit-->
                                                        @endcan
                                                        @can('products.destroy')
                                                            <!--begin::Delete-->
                                                            <form action="{{ route('product.destroy', $product->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                    <i class="bi bi-trash text-white"></i>
                                                                </button>
                                                            </form>
                                                            <!--end::Delete-->
                                                        @endcan
                                                    @endtrashed
                                                </div>
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <!--end::Table row-->
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">{{ __('backend.product.not_found') }}
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                                <!--end::Table body-->

                            </table>
                        </div>
                        <!--begin::Pagination-->
                        <div class="">
                            {{ $products->onEachSide(1)->links() }}
                        </div>

                        <!--end::Pagination-->
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Product-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
