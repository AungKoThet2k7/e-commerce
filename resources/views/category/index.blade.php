@extends('layouts.master')
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
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Categories</li>
                    <!--end::Item-->
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
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
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
                                    data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14"
                                    placeholder="Search Category">
                            </form>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add category-->
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Add
                            Category</a>
                        <!--end::Add category-->
                    </div>
                    <!--end::Card toolbar-->
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
                                        <th class="min-w-250px sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Category: activate to sort column ascending"
                                            style="width: 569.938px;">Category</th>
                                        <th class="min-w-70px sorting_disabled" rowspan="1" colspan="1">Created At
                                        </th>
                                        <th class="text-center min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions" style="width: 96.2292px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    @forelse ($categories as $category)
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Category=-->
                                            <td>
                                                <div class="d-flex">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{route('category.show', $category->id)}}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url({{ asset('template/media//stock/ecommerce/71.gif') }});"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class=" flex items-center ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{route('category.show', $category->id)}}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                            data-kt-ecommerce-category-filter="category_name">{{ $category->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Category=-->
                                            <!--begin::Created at=-->
                                            <td class="">
                                                {{ $category->created_at->format('d M Y') }}
                                                <p>{{ $category->created_at->format('g : m A') }}</p>
                                            </td>
                                            <!--end::Created at=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <!--begin::Edit-->
                                                <div class="flex gap-1 px-3">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="px-3 bg-sky-400 p-2 rounded-md">
                                                        <i class="bi bi-pencil-square text-white"></i>
                                                    </a>

                                                    <!--end::Edit-->
                                                    <!--begin::Delete-->
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="px-3 bg-red-400 p-2 rounded-md">
                                                            <i class="bi bi-trash text-white"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <!--end::Delete-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <!--end::Table row-->
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No Category Found</td>
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
