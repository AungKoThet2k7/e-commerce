@extends('layouts.master')
@section('title', 'Edit User')
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
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('user.index') }}" class="text-muted text-hover-primary">Users</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Edit User</li>
                    <!--end::Item-->
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
            <form action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data" method="POST"
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
                                <h2>Profile Image</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ $user->image ? asset('storage/user/' . $user->image) : asset('template/media/avatars/300-1.jpg') }})">
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
                            <div class="text-muted fs-7">Set the Profile image. Only *.png, *.jpg and *.jpeg
                                image files are accepted</div>
                            @error('image')
                                <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                            <div class="flex flex-col items-start mt-5">
                                <!--begin::Label-->
                                <label class="required form-label">Image Alt</label>
                                <!--end::Label-->
                                <input value="{{ old('image_alt', $user->image_alt) }}" type="text" name="image_alt"
                                    class="form-control w-full mb-2" placeholder="image alt">
                                @error('image_alt')
                                    <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <!--end::Input-->
                                <!--begin::Description-->
                                <!--end::Description-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Edit User</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">

                                <!--begin::Input-->
                                <div class="flex flex-col justify-center gap-10">
                                    <div class="">
                                        <!--begin::Label-->
                                        <label class="required form-label">User Name</label>
                                        <!--end::Label-->
                                        <input value="{{ old('name', $user->name) }}" type="text" name="name"
                                            class="form-control mb-2" placeholder="user name">
                                        @error('name')
                                            <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="">
                                        <!--begin::Label-->
                                        <label class="form-label">Email</label>
                                        <!--end::Label-->
                                        <input value="{{ old('email', $user->email) }}" type="email" readonly
                                            name="email" class="form-control mb-2" placeholder="email">
                                        @error('email')
                                            <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    {{-- <div class="">
                                        <!--begin::Label-->
                                        <label class="required form-label">Password</label>
                                        <!--end::Label-->
                                        <input value="{{ old('password') }}" type="password" name="password"
                                            class="form-control mb-2" placeholder="password">
                                        @error('password')
                                            <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div> --}}
                                    <div class="">
                                        <!--begin::Label-->
                                        <label class="required form-label">Role</label>
                                        <!--end::Label-->
                                        <select name="role" class=" form-select form-select-solid"
                                            data-kt-select2="true" data-placeholder="Role"
                                            data-select2-id="select2-data-7-l7k0" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-3eq9"></option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}" @selected(old('role', $user->getRoleNames()->first()) == $role->name)>
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('user.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Update User</span>
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
@endpush
