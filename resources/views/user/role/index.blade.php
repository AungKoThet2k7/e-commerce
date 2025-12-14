@extends('layouts.master')
@section('title', 'Role')
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Roles</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    {{-- @trashed
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('role.index') }}" class="text-muted text-hover-primary">Users</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Trashed Users</li>
                        <!--end::Item-->
                    @else --}}
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Roles</li>
                    <!--end::Item-->
                    {{-- @endtrashed --}}
                </ul>
                <!--end::Breadcrumb-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-36 mt-1">
                                @if (request('search'))
                                    <a href="{{ route('role.index') }}">
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
                            <form id="searchForm" action="{{ route('role.index') }}" method="GET">
                                <input value="{{ request('search') }}" name="search" type="text"
                                    data-kt-user-table-filter="search" class="form-control form-control-solid w-150px ps-5"
                                    placeholder="Search ...">
                            </form>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <div class="flex justify-center items-center gap-3">
                        {{-- @trashed
                        @else
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::trash-->
                                <a href="{{ route('role.index', ['trashed' => true]) }}"
                                    class="btn bg-amber-500/95 hover:bg-amber-500 flex justify-center items-center gap-1">
                                    <i class="bi bi-trash text-white"></i>
                                    <span class="text-white">Trash</span>
                                </a>
                                <!--end::trash-->
                            </div>
                            <!--end::Card toolbar-->
                        @endtrashed --}}
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <a href="{{ route('role.create') }}" class="btn btn-primary flex">
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
                                    <!--end::Svg Icon-->Add Role</a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>#</th>
                                        <th class=" min-w-250px text-nowrap  sorting" tabindex="0"
                                            aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                            aria-label="Category: activate to sort column ascending">Name</th>
                                        
                                        <th class="text-nowarp min-w-70px sorting_disabled" rowspan="1"
                                            colspan="1">
                                            Created Date
                                        </th>
                                        <th class="text-nowarp text-center min-w-70px sorting_disabled" rowspan="1"
                                            colspan="1" aria-label="Actions" style="width: 96.2292px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                    <!--begin::Table row-->

                                    @forelse ($roles as $role)
                                        <tr>
                                            <!--begin::Id=-->
                                            <td>{{ $role->id }}</td>
                                            <!--end::Id=-->
                                            <!--begin::Role=-->
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" flex items-center">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('role.edit', $role->id) }}"
                                                            class="text-gray-700 text-hover-primary fs-5 fw-bolder"
                                                            data-kt-ecommerce-category-filter="category_name">{{ $role->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Role=-->
                                            <!--begin::created at-->
                                            <td>
                                                {{ $role->created_at->format('d M Y') }}
                                                <p>{{ $role->created_at->format('g : i A') }}</p>
                                            </td>
                                            <!--end:created at-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <div class="flex justify-center gap-1 px-3">
                                                    {{-- @trashed
                                                        <!--begin:: Recycle-->
                                                        <form
                                                            action="{{ route('role.destroy', [$role->id, 'delete' => 'restore']) }}"
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
                                                            action="{{ route('role.destroy', [$role->id, 'delete' => 'force']) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                        <!--begin:: Force Delete-->
                                                    @else --}}
                                                        <!--begin::Edit-->
                                                        <a href="{{ route('role.edit', $role->id) }}"
                                                            class="px-3 bg-green-500 p-2 rounded-md">
                                                            <i class="bi bi-pencil-square text-white"></i>
                                                        </a>
                                                        <!--end::Edit-->
                                                        <!--begin::Delete-->
                                                        <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-3 bg-red-500 p-2 rounded-md">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                        <!--end::Delete-->
                                                    {{-- @endtrashed --}}
                                                </div>
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                    @empty
                                        <tr>
                                            {{-- @trashed
                                                <td colspan="6" class="text-center">No Trashed Category Found</td>
                                            @else --}}
                                                <td colspan="6" class="text-center">No Role Found</td>
                                            {{-- @endtrashed --}}
                                        </tr>
                                    @endforelse
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--begin::Pagination-->
                        {{-- <div class="">
                            {{ $roles->onEachSide(1)->links() }}
                        </div> --}}
                        <!--end::Pagination-->
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
