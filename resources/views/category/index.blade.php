@extends('layouts.master')
@section('title', 'Category')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Categories</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    @trashed
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('category.index') }}" class="text-muted text-hover-primary">Categories</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Trashed Categories</li>
                        <!--end::Item-->
                    @else
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Categories</li>
                        <!--end::Item-->
                    @endtrashed
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Page Success Message-->
            @session('success')
                <h1 class=" text-green-500 font-sm">{{ session('success') }}</h1>
            @endsession
            <!--end::Page Success Message-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-52 mt-1">
                                @if (request('search'))
                                    <a href="{{ route('category.index') }}">
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
                                    <button form="searchForm" type="submit">
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
                            <form id="searchForm" action="{{ route('category.index') }}" method="GET">
                                <input value="{{ request('search') }}" name="search" type="text"
                                    data-kt-user-table-filter="search" class="form-control form-control-solid w-200px ps-5"
                                    placeholder="Search Categories">
                            </form>
                        </div>
                        <!--end::Search-->
                        <!--start::Status-->
                        <div class="ms-3">
                            <select class=" w-150px form-select form-select-solid" data-kt-select2="true"
                                data-placeholder="Status" data-allow-clear="true" data-select2-id="select2-data-7-l7k0"
                                tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-9-3eq9"></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                        <!--end::Status-->
                    </div>
                    <!--end::Card title-->
                    <div class="flex gap-3">
                        @trashed
                        @else
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::trash-->
                                <a href="{{ route('category.index', ['trashed' => true]) }}"
                                    class="px-3 bg-red-500 p-2 rounded-md">
                                    <i class="bi bi-trash text-white">Trash</i>
                                </a>
                                <!--end::trash-->
                            </div>
                            <!--end::Card toolbar-->
                        @endtrashed
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Add category-->
                            <a href="{{ route('category.create') }}" class="btn btn-primary">
                                Add Category
                            </a>
                            <!--end::Add category-->
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
                                            aria-label="Category: activate to sort column ascending">Category</th>
                                        <th class="text-nowarp text-center  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">
                                            Status</th>
                                        <th class="text-nowarp  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">
                                            Sorting</th>
                                        <th class="text-nowarp min-w-70px sorting_disabled" rowspan="1"
                                            colspan="1">
                                            Last Updated
                                        </th>
                                        <th class="text-nowarp text-center min-w-70px sorting_disabled" rowspan="1"
                                            colspan="1" aria-label="Actions" style="width: 96.2292px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    @forelse ($categories as $category)
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <!--begin::Category=-->
                                            <td>
                                                <div class="d-flex">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('category.show', $category->id) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url({{ asset('template/media//stock/ecommerce/71.gif') }});"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class=" flex items-center ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('category.show', $category->id) }}"
                                                            class="text-gray-700 text-hover-primary fs-5 fw-bolder"
                                                            data-kt-ecommerce-category-filter="category_name">{{ $category->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Category=-->
                                            <!--Begin::Status=-->
                                            <td>
                                                <div
                                                    class="flex justify-center form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="notifications" checked="checked">
                                                </div>
                                            </td>
                                            <!--Begin::Status=-->
                                            <!--Begin::Sorting=-->
                                            <td class="text-start">
                                                <div class="flex gap-1">
                                                    <form id="sortForm" action="{{ route('category.index') }}"
                                                        method="GET">
                                                        <input type="text" name="sort"
                                                            class=" w-100px px-3 py-2 rounded-md border border-gray-900 focus:outline-none">
                                                    </form>
                                                    <button type="submit" form="sortForm"
                                                        class="px-3.5 py-2 rounded-md bg-purple-700 text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M12 2h-2v3h2z" />
                                                            <path
                                                                d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <!--begin::Created at=-->
                                            <td class="">
                                                <div>
                                                    <h1 class="text-gray-700 fs-5 fw-bolder">
                                                        {{ $category->updatedBy->name }}</h1>
                                                    <p>{{ $category->created_at->format('j M Y') }}
                                                        <span>{{ $category->created_at->format('g : m A') }}</span>
                                                    </p>
                                                    <p></p>
                                                </div>

                                            </td>
                                            <!--end::Created at=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <div class="flex gap-1 px-3">
                                                    @trashed
                                                        <!--begin:: Recycle-->
                                                        <form
                                                            action="{{ route('category.destroy', [$category->id, 'delete' => 'restore']) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="px-3 bg-green-500 p-2 rounded-md">
                                                                <i class="bi bi-recycle text-white"></i>
                                                            </button>
                                                        </form>
                                                        <!--begin:: Recycle-->
                                                        <!--begin:: Force Delete-->
                                                        <form
                                                            action="{{ route('category.destroy', [$category->id, 'delete' => 'force']) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                        <!--begin:: Force Delete-->
                                                    @else
                                                        <!--begin::Edit-->
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="px-3 bg-sky-500 p-2 rounded-md">
                                                            <i class="bi bi-pencil-square text-white"></i>
                                                        </a>
                                                        <!--end::Edit-->
                                                        <!--begin::Delete-->
                                                        <form action="{{ route('category.destroy', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                        <!--end::Delete-->
                                                    @endtrashed
                                                </div>
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <!--end::Table row-->
                                    @empty
                                        <tr>
                                            @trashed
                                                <td colspan="6" class="text-center">No Trashed Category Found</td>
                                            @else
                                                <td colspan="6" class="text-center">No Category Found</td>
                                            @endtrashed
                                        </tr>
                                    @endforelse

                                </tbody>
                                <!--end::Table body-->

                            </table>
                        </div>
                        <!--begin::Pagination-->
                        <div class="">
                            {{ $categories->onEachSide(1)->links() }}
                        </div>

                        <!--end::Pagination-->
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@push('script')
    <!--begin::Page Vendors Javascript(used by this page)-->
    {{-- <script src="{{ asset('template/plugins/custom/datatables/datatables.bundle.js') }}"></script> --}}
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="{{ asset('template/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
    <script src="{{ asset('template/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('template/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('template/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <!--end::Page Custom Javascript-->
@endpush
