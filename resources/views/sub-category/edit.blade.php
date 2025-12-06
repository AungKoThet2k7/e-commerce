@extends('layouts.master')
@section('title', 'Edit Sub Category')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Sub Category</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('sub-category.index') }}" class="text-muted text-hover-primary">Sub Categories</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Edit Sub Category</li>
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
            <form action="{{ route('sub-category.update', $subCategory->id) }}" enctype="multipart/form-data" method="POST" id="kt_ecommerce_add_category_form"
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
                                <h2>Sub Category Image</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ $subCategory->image ? asset('storage/sub-category/' . $subCategory->image) : asset('template/media/svg/files/blank-image.svg') }})">
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
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    {{-- <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px"
                                    id="kt_ecommerce_add_category_status"></div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_category_status_select"
                                data-select2-id="select2-data-kt_ecommerce_add_category_status_select" tabindex="-1"
                                aria-hidden="true">
                                <option></option>
                                <option value="published" selected="selected" data-select2-id="select2-data-11-zyfp">
                                    Published</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="unpublished">Unpublished</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-10-v0de" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select mb-2"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-kt_ecommerce_add_category_status_select-container"
                                        aria-controls="select2-kt_ecommerce_add_category_status_select-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-kt_ecommerce_add_category_status_select-container" role="textbox"
                                            aria-readonly="true" title="Published">Published</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the category status.</div>
                            <!--end::Description-->
                            <!--begin::Datepicker-->
                            <div class="d-none mt-10">
                                <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select
                                    publishing date and time</label>
                                <input class="form-control flatpickr-input"
                                    id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date &amp; time"
                                    type="text" readonly="readonly">
                            </div>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div> --}}
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
                                <h2>Add Sub Category</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Sub Category Name</label>
                                <!--end::Label-->
                                <div class="flex justify-center gap-10">
                                    <div class="">
                                        <!--begin::Input-->
                                        <input value="{{ old('name', $subCategory->name) }}" type="text" name="name"
                                            class="form-control w-80 mb-2" placeholder="Sub Category Name">
                                        <!--end::Input-->
                                        <!--begin::Error Message-->
                                        @error('name')
                                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                        <!--end::Error Message-->
                                    </div>
                                    <!--start::Category-->
                                    <div class="ms-3">
                                        <select name="category_id" class=" w-250px form-select form-select-solid" data-kt-select2="true"
                                            data-placeholder="Category" data-allow-clear="true"
                                            data-select2-id="select2-data-7-l7k0" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-3eq9"></option>
                                            @foreach (\App\Models\Category::all() as $category)
                                                <option value="{{ $category->id }}" @selected(old('category_id', $subCategory->category_id) == $category->id)>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Category-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            {{-- <div>
                                <!--begin::Label-->
                                <label class="form-label">Description</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                            class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0"
                                                role="button" aria-expanded="false"
                                                aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                tabindex="-1" id="ql-picker-options-0"><span tabindex="0"
                                                    role="button" class="ql-picker-item" data-value="1"></span><span
                                                    tabindex="0" role="button" class="ql-picker-item"
                                                    data-value="2"></span><span tabindex="0" role="button"
                                                    class="ql-picker-item ql-selected"></span></span></span><select
                                            class="ql-header" style="display: none;">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option selected="selected"></option>
                                        </select></span><span class="ql-formats"><button type="button"
                                            class="ql-bold"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke"
                                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                </path>
                                                <path class="ql-stroke"
                                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                </path>
                                            </svg></button><button type="button" class="ql-italic"><svg
                                                viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="13" y1="4"
                                                    y2="4"></line>
                                                <line class="ql-stroke" x1="5" x2="11" y1="14"
                                                    y2="14"></line>
                                                <line class="ql-stroke" x1="8" x2="10" y1="14"
                                                    y2="4"></line>
                                            </svg></button><button type="button" class="ql-underline"><svg
                                                viewBox="0 0 18 18">
                                                <path class="ql-stroke"
                                                    d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                    width="12" x="3" y="15"></rect>
                                            </svg></button></span><span class="ql-formats"><button type="button"
                                            class="ql-image"><svg viewBox="0 0 18 18">
                                                <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                <polyline class="ql-even ql-fill"
                                                    points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                            </svg></button><button type="button" class="ql-code-block"><svg
                                                viewBox="0 0 18 18">
                                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                                <line class="ql-stroke" x1="10" x2="8" y1="5"
                                                    y2="13"></line>
                                            </svg></button></span></div>
                                <div id="kt_ecommerce_add_category_description"
                                    name="kt_ecommerce_add_category_description"
                                    class="min-h-200px mb-2 ql-container ql-snow">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                        data-placeholder="Type your text here...">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com"
                                            data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                                <!--end::Description-->
                            </div> --}}
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Meta options-->
                    {{-- <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Meta Options</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label">Meta Tag Title</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" name="meta_title"
                                    placeholder="Meta tag name">
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                    keywords.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label">Meta Tag Description</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                            class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0"
                                                role="button" aria-expanded="false"
                                                aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                tabindex="-1" id="ql-picker-options-1"><span tabindex="0"
                                                    role="button" class="ql-picker-item" data-value="1"></span><span
                                                    tabindex="0" role="button" class="ql-picker-item"
                                                    data-value="2"></span><span tabindex="0" role="button"
                                                    class="ql-picker-item ql-selected"></span></span></span><select
                                            class="ql-header" style="display: none;">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option selected="selected"></option>
                                        </select></span><span class="ql-formats"><button type="button"
                                            class="ql-bold"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke"
                                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                </path>
                                                <path class="ql-stroke"
                                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                </path>
                                            </svg></button><button type="button" class="ql-italic"><svg
                                                viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="13" y1="4"
                                                    y2="4"></line>
                                                <line class="ql-stroke" x1="5" x2="11" y1="14"
                                                    y2="14"></line>
                                                <line class="ql-stroke" x1="8" x2="10" y1="14"
                                                    y2="4"></line>
                                            </svg></button><button type="button" class="ql-underline"><svg
                                                viewBox="0 0 18 18">
                                                <path class="ql-stroke"
                                                    d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                    width="12" x="3" y="15"></rect>
                                            </svg></button></span><span class="ql-formats"><button type="button"
                                            class="ql-image"><svg viewBox="0 0 18 18">
                                                <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                <polyline class="ql-even ql-fill"
                                                    points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                            </svg></button><button type="button" class="ql-code-block"><svg
                                                viewBox="0 0 18 18">
                                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                                <line class="ql-stroke" x1="10" x2="8" y1="5"
                                                    y2="13"></line>
                                            </svg></button></span></div>
                                <div id="kt_ecommerce_add_category_meta_description"
                                    name="kt_ecommerce_add_category_meta_description"
                                    class="min-h-100px mb-2 ql-container ql-snow">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                        data-placeholder="Type your text here...">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com"
                                            data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a meta tag description to the category for increased SEO
                                    ranking.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Meta Tag Keywords</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                                    <span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;"
                                        aria-placeholder="" class="tagify__input" role="textbox"
                                        aria-autocomplete="both" aria-multiline="false"></span>
                                    &ZeroWidthSpace;
                                </tags><input id="kt_ecommerce_add_category_meta_keywords"
                                    name="kt_ecommerce_add_category_meta_keywords" class="form-control mb-2">
                                <!--end::Editor-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a list of keywords that the category is related to.
                                    Separate the keywords by adding a comma
                                    <code>,</code>between each keyword.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div> --}}
                    <!--end::Meta options-->
                    <!--begin::Automation-->
                    {{-- <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Automation</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label mb-5">Product assignment method</label>
                                <!--end::Label-->
                                <!--begin::Methods-->
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="method" type="radio"
                                            value="0" id="kt_ecommerce_add_category_automation_0" checked="checked">
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                            <div class="fw-bolder text-gray-800">Manual</div>
                                            <div class="text-gray-600">Add products to this category one by one by manually
                                                selecting this category during product creation or update.</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="method" type="radio"
                                            value="1" id="kt_ecommerce_add_category_automation_1">
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                            <div class="fw-bolder text-gray-800">Automatic</div>
                                            <div class="text-gray-600">Products matched with the following conditions will
                                                be automatically assigned to this category.</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <!--end::Methods-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-none mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                                <!--begin::Label-->
                                <label class="form-label">Conditions</label>
                                <!--end::Label-->
                                <!--begin::Conditions-->
                                <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                    <span>Products must match:</span>
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="conditions" value=""
                                            id="all_conditions" checked="checked">
                                        <label class="form-check-label" for="all_conditions">All conditions</label>
                                    </div>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="conditions" value=""
                                            id="any_conditions">
                                        <label class="form-check-label" for="any_conditions">Any conditions</label>
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Conditions-->
                                <!--begin::Repeater-->
                                <div id="kt_ecommerce_add_category_conditions">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_ecommerce_add_category_conditions"
                                            class="d-flex flex-column gap-3">
                                            <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                                <!--begin::Select2-->
                                                <div class="w-100 w-md-200px">
                                                    <select class="form-select select2-hidden-accessible"
                                                        name="kt_ecommerce_add_category_conditions[0][condition_type]"
                                                        data-placeholder="Select an option"
                                                        data-kt-ecommerce-catalog-add-category="condition_type"
                                                        data-select2-id="select2-data-122-2dcu" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="title">Product Title</option>
                                                        <option value="tag" selected="selected"
                                                            data-select2-id="select2-data-124-s1c5">Product Tag</option>
                                                        <option value="price">Prodict Price</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-123-fi5s"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-kt_ecommerce_add_category_conditions0condition_type-d8-container"
                                                                aria-controls="select2-kt_ecommerce_add_category_conditions0condition_type-d8-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-kt_ecommerce_add_category_conditions0condition_type-d8-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Product Tag">Product Tag</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Select2-->
                                                <div class="w-100 w-md-200px">
                                                    <select class="form-select select2-hidden-accessible"
                                                        name="kt_ecommerce_add_category_conditions[0][condition_equals]"
                                                        data-placeholder="Select an option"
                                                        data-kt-ecommerce-catalog-add-category="condition_equals"
                                                        data-select2-id="select2-data-125-9tgj" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="equal" selected="selected"
                                                            data-select2-id="select2-data-127-4fi8">is equal to</option>
                                                        <option value="notequal">is not equal to</option>
                                                        <option value="greater">is greater than</option>
                                                        <option value="less">is less than</option>
                                                        <option value="starts">starts with</option>
                                                        <option value="ends">ends with</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-126-js5b"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-kt_ecommerce_add_category_conditions0condition_equals-c0-container"
                                                                aria-controls="select2-kt_ecommerce_add_category_conditions0condition_equals-c0-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-kt_ecommerce_add_category_conditions0condition_equals-c0-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="is equal to">is equal to</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control mw-100 w-200px"
                                                    name="kt_ecommerce_add_category_conditions[0][condition_label]"
                                                    placeholder="">
                                                <!--end::Input-->
                                                <!--begin::Button-->
                                                <button type="button" data-repeater-delete=""
                                                    class="btn btn-sm btn-icon btn-light-danger">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12"
                                                                height="2" rx="1"
                                                                transform="rotate(-45 7.05025 15.5356)"
                                                                fill="currentColor"></rect>
                                                            <rect x="8.46447" y="7.05029" width="12" height="2"
                                                                rx="1" transform="rotate(45 8.46447 7.05029)"
                                                                fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <!--begin::Button-->
                                        <button type="button" data-repeater-create=""
                                            class="btn btn-sm btn-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2"
                                                        rx="1" transform="rotate(-90 11 18)" fill="currentColor">
                                                    </rect>
                                                    <rect x="6" y="11" width="12" height="2" rx="1"
                                                        fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Add another condition</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Repeater-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div> --}}
                    <!--end::Automation-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('sub-category.index') }}" id="kt_ecommerce_add_product_cancel"
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
