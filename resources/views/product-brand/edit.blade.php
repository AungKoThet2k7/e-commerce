@extends('layouts.master')
@section('title', 'Edit Product Brand')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('backend.productbrand.edit') }}
                </h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('product-brand.index') }}"
                            class="text-muted text-hover-primary">{{ __('backend.productbrand.productbrands') }}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ __('backend.productbrand.edit') }}</li>
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
            <form action="{{ route('product-brand.update', $productBrand->id) }}" enctype="multipart/form-data"
                method="POST" id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                @method('PUT')
                {{-- <!--begin::Aside column-->data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html" --}}
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('backend.productbrand.image') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ $productBrand->logo ? asset('storage/product-brand/' . $productBrand->logo) : asset('template/media/svg/files/blank-image.svg') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="{{ __('backend.productbrand.change_image') }}">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg">
                                    {{-- <input type="hidden" name="image_remove"> --}}
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="{{ __('backend.productbrand.cancel_image') }}">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove logo">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">{{ __('backend.productbrand.image_description') }}</div>
                            <!--end::Description-->
                            @error('logo')
                                <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                            <div class="flex flex-col items-start mt-5">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.productbrand.image_alt') }}</label>
                                <!--end::Label-->
                                <input value="{{ old('logo_alt', $productBrand->logo_alt) }}" type="text"
                                    name="logo_alt" class="form-control w-full mb-2"
                                    placeholder="{{ __('backend.productbrand.image_alt') }}">
                                @error('logo_alt')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('backend.common.status') }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select name="status" class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select Status">
                                <option value="1" @selected(old('status', $productBrand->status) == 1)>{{ __('backend.common.active') }}</option>
                                <option value="0" @selected(old('status', $productBrand->status) == 0)>{{ __('backend.common.inactive') }}</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">{{ __('backend.productbrand.status_description') }}</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ __('backend.productbrand.edit') }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.productbrand.name_en') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name_en', $productBrand->name) }}" type="text" name="name_en"
                                    class="form-control w-6/12 mb-2" placeholder="{{ __('backend.productbrand.name_placeholder') }}">
                                @error('name_en')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.productbrand.name_mm') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name_mm', $productBrand->name_mm) }}" type="text" name="name_mm"
                                    class="form-control w-6/12 mb-2" placeholder="{{ __('backend.productbrand.name_placeholder') }}">
                                @error('name_mm')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('product-brand.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">{{ __('backend.common.cancel') }}</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">{{ __('backend.productbrand.update_productbrand') }}</span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
                <div></div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection
