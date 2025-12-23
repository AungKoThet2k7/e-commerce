@extends('layouts.master')
@section('title', 'Edit Role')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('backend.role.edit') }}</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('role.index') }}"
                            class="text-muted text-hover-primary">{{ __('backend.role.roles') }}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ __('backend.role.edit') }}</li>
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
            <form action="{{ route('role.update', $role->id) }}" method="POST" enctype="multipart/form-data"
                id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                @method('PUT')
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ __('backend.role.edit') }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.role.name') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name', $role->name) }}" type="text" name="name"
                                    class="form-control mb-2" placeholder="{{ __('backend.role.name') }}">
                                <!--end::Input-->
                                @error('name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end::Input group-->

                            <!--Begin::Permission Accordion-->
                            <label for="" class=" required form-label">{{ __('backend.role.permissions') }}</label>
                            <div id="accordion-collapse" data-accordion="collapse"
                                class="bg-gray-100 rounded-lg border border-default overflow-hidden">
                                @foreach ($permissions as $groupName => $permissionGroup)
                                    <h1 id="accordion-collapse-heading-{{ $groupName }}">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-5 fs-5 fw-bolder rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3"
                                            data-accordion-target="#accordion-collapse-body-{{ $groupName }}"
                                            aria-expanded="false"
                                            aria-controls="accordion-collapse-body-{{ $groupName }}">
                                            <span>{{ $groupName }}</span>
                                            <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m5 15 7-7 7 7" />
                                            </svg>
                                        </button>
                                    </h1>
                                    <div id="accordion-collapse-body-{{ $groupName }}"
                                        class="hidden border border-s-0 border-e-0 border-t-0 border-b-default"
                                        aria-labelledby="accordion-collapse-heading-{{ $groupName }}">
                                        @foreach ($permissionGroup as $permission)
                                            <div class="form-check bg-white mb-0 flex justify-between items-center p-5">
                                                <label
                                                    class=" form-check-label text-gray-700 text-hover-primary font-medium"
                                                    for="">{{ $permission->name }}</label>
                                                <input class="size-6 form-check-input" name="permissions[]" multiple
                                                    value="{{ $permission->name }}" @checked($role->hasPermissionTo($permission->name))
                                                    type="checkbox">
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <!--end::Permission Accordion-->

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('role.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">{{ __('backend.common.cancel') }}</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">{{ __('backend.role.update_role') }}</span>
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
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
@endpush
