@extends('layouts.master')
@section('title', 'Add Role')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Role</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('role.index') }}" class="text-muted text-hover-primary">Roles</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Add Role</li>
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
            <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data"
                id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Add Role</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name') }}" type="text" name="name" class="form-control mb-2"
                                    placeholder="Name">
                                <!--end::Input-->
                                @error('name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end::Input group-->

                            <!--start::Category-->
                            <div class="">
                                <!--begin::Permission-->
                                <label class="required form-label">Permissions</label>
                                @error('permissions')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                @error('permissions.*')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                @foreach ($permissions as $permission)
                                    <div class="form-check mb-0 flex justify-between items-center bg-gray-100 p-5">
                                        <label class=" form-check-label text-gray-700 text-hover-primary fs-5 fw-bolder"
                                            for="">{{ $permission->name }}</label>
                                        <input class=" form-check-input" name="permissions[]" multiple
                                            value="{{ $permission->name }}" type="checkbox">
                                    </div>
                                @endforeach

                                {{-- <select multiple name="permissions[]"
                                    class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                                    data-hide-search="true" data-placeholder="Permission"
                                    data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-10-whsc"
                                    tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="select2-data-12-pxpb"></option>
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}" @selected(old('permissions.*') == $permission->name)>
                                            {{ $permission->name }}</option>
                                    @endforeach
                                </select> --}}
                                <!--end::Permission-->
                            </div>
                            <!--end::Category-->

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('role.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Add New Role</span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
