@extends('layouts.master')
@section('title', 'Add Product')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('backend.product.create') }}</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
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
                    <li class="breadcrumb-item text-muted">{{ __('backend.product.create') }}</li>
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
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                {{-- <!--begin::Aside column-->data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html" --}}
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    {{-- <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('backend.product.image') }}</h2>
                            </div>
                            <!--end::Card title-->

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ asset('template/media/svg/files/blank-image.svg') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="{{ __('backend.product.create_image') }}">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                    <!--end::Inputs-->

                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="{{ __('backend.product.cancel_image') }}">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">{{ __('backend.product.image_description') }} </div>
                            <!--end::Description-->
                            @error('image')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                            <div class="flex flex-col items-start mt-5">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.product.image_alt') }}</label>
                                <!--end::Label-->
                                <input value="{{ old('image_alt') }}" type="text" name="image_alt"
                                    class="form-control w-full mb-2" placeholder="{{ __('backend.product.image_alt') }}">
                                @error('image_alt')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div> --}}
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ __('backend.common.status') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select name="status" class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select Status"
                                id="kt_ecommerce_add_category_status_select"
                                data-select2-id="select2-data-kt_ecommerce_add_category_status_select" tabindex="-1"
                                aria-hidden="true">
                                <option value="1">{{ __('backend.common.active') }}</option>
                                <option value="0">{{ __('backend.common.inactive') }}</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">{{ __('backend.product.status_description') }}</div>
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
                                <h2>{{ __('backend.product.create') }}</h2>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">{{ __('backend.product.name_en') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name') }}" type="text" name="name_en"
                                    class="form-control w-6/12 mb-2"
                                    placeholder="{{ __('backend.product.name_placeholder') }}">
                                <!--end::Input-->
                                @error('name_en')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="form-label">{{ __('backend.product.name_mm') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name_mm') }}" type="text" name="name_mm"
                                    class="form-control w-6/12 mb-2"
                                    placeholder="{{ __('backend.product.name_placeholder') }}">
                                <!--end::Input-->
                                @error('name_mm')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::General options-->

                    <!--begin::Variants-->
                    <div id="product_variants" data-attributes="{{ $attributes }}" class="card card-flush py-4"></div>
                    <!--end::Variants-->

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('product.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">{{ __('backend.common.cancel') }}</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">{{ __('backend.product.create_product') }}</span>
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
@push('script')
    <!-- React CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>

    <!-- Babel (JSX Support) -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
@endpush
