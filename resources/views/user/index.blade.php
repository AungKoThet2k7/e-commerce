@extends('layouts.master')
@section('title', 'Users')
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Users</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Users</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-52 mt-1">
                                @if (request('search'))
                                    <a href="{{ route('user.index') }}">
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
                            <form id="searchForm" action="{{ route('user.index') }}" method="GET">
                                <input value="{{ request('search') }}" name="search" type="text"
                                    data-kt-user-table-filter="search" class="form-control form-control-solid w-200px ps-5"
                                    placeholder="Search Users">
                            </form>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Add user-->
                            <a href="{{ route('user.create') }}" class="btn btn-primary flex">
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
                                <!--end::Svg Icon-->Add User</a>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
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
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="User: activate to sort column ascending"
                                            style="width: 228.167px;">User</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Role: activate to sort column ascending" style="width: 125px;">
                                            Email</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Joined Date: activate to sort column ascending"
                                            style="width: 125px;">Joined Date</th>
                                        <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions" style="width: 100px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                    <!--begin::Table row-->

                                    @forelse ($users as $user)
                                        <tr>
                                            <!--begin::User=-->
                                            <td class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset('template/media/avatars/300-11.jpg') }}"
                                                            alt="Profile image" class="w-100">
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::User details-->
                                                <div class="flex items-center">
                                                    <a href="{{ route('user.show', $user->id) }}"
                                                        class="text-gray-800 text-hover-primary">{{ $user->name }}</a>
                                                    {{-- <span>melody@altbox.com</span> --}}
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <!--end::User=-->
                                            <!--begin::Email=-->
                                            <td>{{ $user->email }}</td>
                                            <!--end::Email=-->
                                            <!--begin::created at-->
                                            <td>
                                                {{ $user->created_at->format('d M Y') }}
                                                <p>{{ $user->created_at->format('g : m A') }}</p>
                                            </td>
                                            <!--end:created at-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <!--begin::Edit-->
                                                <div class="flex gap-1 px-3">
                                                    <a href="{{ route('user.edit', $user->id) }}"
                                                        class="px-3 bg-sky-400 p-2 rounded-md">
                                                        <i class="bi bi-pencil-square text-white"></i>
                                                    </a>

                                                    <!--end::Edit-->
                                                    <!--begin::Delete-->
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No User Found</td>
                                        </tr>
                                    @endforelse
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--begin::Pagination-->
                    <div class="">
                        {{ $users->onEachSide(1)->links() }}
                    </div>
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
@push('script')
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('template/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('template/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('template/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
<script src="{{ asset('template/js/custom/apps/user-management/users/list/add.js') }}"></script>
<script src="{{ asset('template/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('template/js/custom/widgets.js') }}"></script>
<script src="{{ asset('template/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('template/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('template/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('template/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Page Custom Javascript-->
@endpush
