@extends('layouts.master')
@section('title', 'Edit Category')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Category</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
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
                    <li class="breadcrumb-item text-muted">Edit Category</li>
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
            <form action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data" method="POST"
                id="kt_ecommerce_add_category_form"
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
                                <h2>Category Image</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ $category->image ? asset('storage/category/' . $category->image) : asset('template/media/svg/files/blank-image.svg') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change image">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                    {{-- <input type="hidden" name="image_remove"> --}}
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Cancel image">
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
                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg
                                image files are accepted</div>
                            <!--end::Description-->
                            @error('image')
                                <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                            <div class="flex flex-col items-start mt-5">
                                <!--begin::Label-->
                                <label class="required form-label">Image Alt</label>
                                <!--end::Label-->
                                <input value="{{ old('image_alt', $category->image_alt) }}" type="text" name="image_alt"
                                    class="form-control w-full mb-2" placeholder="image alt">
                                @error('image_alt')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                                <!--begin::Description-->
                                <!--end::Description-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
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
                                <h2>Status</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            {{-- <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status">
                                </div>
                            </div> --}}
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select name="status" class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select Status">
                                <option value="1" @selected(old('status', $category->status) == 1)>Active</option>
                                <option value="0" @selected(old('status', $category->status) == 0)>Inactive</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the category status.</div>
                            <!--end::Description-->
                            <!--begin::Datepicker-->
                            {{-- <div class="d-none mt-10">
                                <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select
                                    publishing date and time</label>
                                <input class="form-control flatpickr-input"
                                    id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date &amp; time"
                                    type="text" readonly="readonly">
                            </div> --}}
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->
                    <!--begin::Template settings-->
                    {{-- <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Store Template</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select store template-->
                            <label for="kt_ecommerce_add_category_store_template" class="form-label">Select a store
                                template</label>
                            <!--end::Select store template-->
                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_category_store_template"
                                data-select2-id="select2-data-kt_ecommerce_add_category_store_template" tabindex="-1"
                                aria-hidden="true">
                                <option></option>
                                <option value="default" selected="selected" data-select2-id="select2-data-13-8pfb">
                                    Default template</option>
                                <option value="electronics">Electronics</option>
                                <option value="office">Office stationary</option>
                                <option value="fashion">Fashion</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-12-hjx9" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select mb-2"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-kt_ecommerce_add_category_store_template-container"
                                        aria-controls="select2-kt_ecommerce_add_category_store_template-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-kt_ecommerce_add_category_store_template-container" role="textbox"
                                            aria-readonly="true" title="Default template">Default template</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Assign a template from your current theme to define how the
                                category products are displayed.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div> --}}
                    <!--end::Template settings-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Edit Category</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Category Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input value="{{ old('name', $category->name) }}" type="text" name="name"
                                    class="form-control w-6/12 mb-2" placeholder="category name">
                                @error('name')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">A category name is required and recommended to be unique.
                                </div>
                                <!--end::Description-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('category.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Update Category</span>
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
    <!--begin::Page Vendors Javascript(used by this page)-->
    {{-- <script src="{{ asset('template/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('template/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script> --}}
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="{{ asset('template/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
    <script src="{{ asset('template/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('template/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('template/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('template/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <!--end::Page Custom Javascript-->
@endpush
