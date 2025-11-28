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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">Manage Sales</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-primary">Add
                    Product</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 4-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">69,700</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.2%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                                    data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center w-100">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-boldest text-gray-700 text-xxl-end">$7,660</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center my-3">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-boldest text-gray-700 text-xxl-end">$2,820</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-bold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="fw-boldest text-gray-700 text-xxl-end">$45,257</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 4-->
                    <!--begin::Card widget 5-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">1,836</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-danger fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.2%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
                                    <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                </div>
                                <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                    <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 5-->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 6-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">2,420</span>
                                    <!--end::Amount-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                    rx="1" transform="rotate(90 13 6)" fill="currentColor">
                                                </rect>
                                                <path
                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->2.6%</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-bold fs-6">Average Daily Sales</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end px-0 pb-0">
                            <!--begin::Chart-->
                            <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px; min-height: 80px;">
                                <div id="apexchartsb2xhazu3"
                                    class="apexcharts-canvas apexchartsb2xhazu3 apexcharts-theme-light"
                                    style="width: 454px; height: 80px;"><svg id="SvgjsSvg2617" width="454"
                                        height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2619" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(45.522222222222226, 0)">
                                            <defs id="SvgjsDefs2618">
                                                <clipPath id="gridRectMaskb2xhazu3">
                                                    <rect id="SvgjsRect2622" width="447.00000000000006" height="89"
                                                        x="-38.022222222222226" y="-4.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskb2xhazu3"></clipPath>
                                                <clipPath id="nonForecastMaskb2xhazu3"></clipPath>
                                                <clipPath id="gridRectMarkerMaskb2xhazu3">
                                                    <rect id="SvgjsRect2623" width="374.9555555555556" height="84"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2642" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2643" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2651" class="apexcharts-grid">
                                                <g id="SvgjsG2652" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2654" x1="-31.522222222222222" y1="0"
                                                        x2="402.4777777777778" y2="0" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2655" x1="-31.522222222222222" y1="20"
                                                        x2="402.4777777777778" y2="20" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2656" x1="-31.522222222222222" y1="40"
                                                        x2="402.4777777777778" y2="40" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2657" x1="-31.522222222222222" y1="60"
                                                        x2="402.4777777777778" y2="60" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2658" x1="-31.522222222222222" y1="80"
                                                        x2="402.4777777777778" y2="80" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2653" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2660" x1="0" y1="80"
                                                    x2="370.9555555555556" y2="80" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2659" x1="0" y1="1" x2="0"
                                                    y2="80" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2624" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG2625" class="apexcharts-series" rel="1"
                                                    seriesName="Sales" data:realIndex="0">
                                                    <path id="SvgjsPath2629"
                                                        d="M -17.002129629629632 80L -17.002129629629632 56Q -17.002129629629632 50 -11.002129629629632 50L 2.002129629629632 50Q 8.002129629629632 50 8.002129629629632 56L 8.002129629629632 56L 8.002129629629632 80L 8.002129629629632 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M -17.002129629629632 80L -17.002129629629632 56Q -17.002129629629632 50 -11.002129629629632 50L 2.002129629629632 50Q 8.002129629629632 50 8.002129629629632 56L 8.002129629629632 56L 8.002129629629632 80L 8.002129629629632 80z"
                                                        pathFrom="M -17.002129629629632 80L -17.002129629629632 80L 8.002129629629632 80L 8.002129629629632 80L 8.002129629629632 80L 8.002129629629632 80L 8.002129629629632 80L -17.002129629629632 80"
                                                        cy="50" cx="12.502129629629632" j="0" val="30"
                                                        barHeight="30" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2631"
                                                        d="M 44.823796296296294 80L 44.823796296296294 26Q 44.823796296296294 20 50.823796296296294 20L 63.82805555555555 20Q 69.82805555555555 20 69.82805555555555 26L 69.82805555555555 26L 69.82805555555555 80L 69.82805555555555 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 44.823796296296294 80L 44.823796296296294 26Q 44.823796296296294 20 50.823796296296294 20L 63.82805555555555 20Q 69.82805555555555 20 69.82805555555555 26L 69.82805555555555 26L 69.82805555555555 80L 69.82805555555555 80z"
                                                        pathFrom="M 44.823796296296294 80L 44.823796296296294 80L 69.82805555555555 80L 69.82805555555555 80L 69.82805555555555 80L 69.82805555555555 80L 69.82805555555555 80L 44.823796296296294 80"
                                                        cy="20" cx="74.32805555555555" j="1" val="60"
                                                        barHeight="60" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2633"
                                                        d="M 106.64972222222222 80L 106.64972222222222 33Q 106.64972222222222 27 112.64972222222222 27L 125.65398148148148 27Q 131.65398148148148 27 131.65398148148148 33L 131.65398148148148 33L 131.65398148148148 80L 131.65398148148148 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 106.64972222222222 80L 106.64972222222222 33Q 106.64972222222222 27 112.64972222222222 27L 125.65398148148148 27Q 131.65398148148148 27 131.65398148148148 33L 131.65398148148148 33L 131.65398148148148 80L 131.65398148148148 80z"
                                                        pathFrom="M 106.64972222222222 80L 106.64972222222222 80L 131.65398148148148 80L 131.65398148148148 80L 131.65398148148148 80L 131.65398148148148 80L 131.65398148148148 80L 106.64972222222222 80"
                                                        cy="27" cx="136.15398148148148" j="2" val="53"
                                                        barHeight="53" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2635"
                                                        d="M 168.47564814814817 80L 168.47564814814817 41Q 168.47564814814817 35 174.47564814814817 35L 187.47990740740744 35Q 193.47990740740744 35 193.47990740740744 41L 193.47990740740744 41L 193.47990740740744 80L 193.47990740740744 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 168.47564814814817 80L 168.47564814814817 41Q 168.47564814814817 35 174.47564814814817 35L 187.47990740740744 35Q 193.47990740740744 35 193.47990740740744 41L 193.47990740740744 41L 193.47990740740744 80L 193.47990740740744 80z"
                                                        pathFrom="M 168.47564814814817 80L 168.47564814814817 80L 193.47990740740744 80L 193.47990740740744 80L 193.47990740740744 80L 193.47990740740744 80L 193.47990740740744 80L 168.47564814814817 80"
                                                        cy="35" cx="197.97990740740744" j="3" val="45"
                                                        barHeight="45" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2637"
                                                        d="M 230.3015740740741 80L 230.3015740740741 26Q 230.3015740740741 20 236.3015740740741 20L 249.30583333333334 20Q 255.30583333333334 20 255.30583333333334 26L 255.30583333333334 26L 255.30583333333334 80L 255.30583333333334 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 230.3015740740741 80L 230.3015740740741 26Q 230.3015740740741 20 236.3015740740741 20L 249.30583333333334 20Q 255.30583333333334 20 255.30583333333334 26L 255.30583333333334 26L 255.30583333333334 80L 255.30583333333334 80z"
                                                        pathFrom="M 230.3015740740741 80L 230.3015740740741 80L 255.30583333333334 80L 255.30583333333334 80L 255.30583333333334 80L 255.30583333333334 80L 255.30583333333334 80L 230.3015740740741 80"
                                                        cy="20" cx="259.80583333333334" j="4" val="60"
                                                        barHeight="60" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2639"
                                                        d="M 292.12750000000005 80L 292.12750000000005 11Q 292.12750000000005 5 298.12750000000005 5L 311.1317592592593 5Q 317.1317592592593 5 317.1317592592593 11L 317.1317592592593 11L 317.1317592592593 80L 317.1317592592593 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 292.12750000000005 80L 292.12750000000005 11Q 292.12750000000005 5 298.12750000000005 5L 311.1317592592593 5Q 317.1317592592593 5 317.1317592592593 11L 317.1317592592593 11L 317.1317592592593 80L 317.1317592592593 80z"
                                                        pathFrom="M 292.12750000000005 80L 292.12750000000005 80L 317.1317592592593 80L 317.1317592592593 80L 317.1317592592593 80L 317.1317592592593 80L 317.1317592592593 80L 292.12750000000005 80"
                                                        cy="5" cx="321.6317592592593" j="5" val="75"
                                                        barHeight="75" barWidth="34.004259259259264"></path>
                                                    <path id="SvgjsPath2641"
                                                        d="M 353.95342592592596 80L 353.95342592592596 33Q 353.95342592592596 27 359.95342592592596 27L 372.9576851851852 27Q 378.9576851851852 27 378.9576851851852 33L 378.9576851851852 33L 378.9576851851852 80L 378.9576851851852 80z"
                                                        fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="9"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskb2xhazu3)"
                                                        pathTo="M 353.95342592592596 80L 353.95342592592596 33Q 353.95342592592596 27 359.95342592592596 27L 372.9576851851852 27Q 378.9576851851852 27 378.9576851851852 33L 378.9576851851852 33L 378.9576851851852 80L 378.9576851851852 80z"
                                                        pathFrom="M 353.95342592592596 80L 353.95342592592596 80L 378.9576851851852 80L 378.9576851851852 80L 378.9576851851852 80L 378.9576851851852 80L 378.9576851851852 80L 353.95342592592596 80"
                                                        cy="27" cx="383.4576851851852" j="6" val="53"
                                                        barHeight="53" barWidth="34.004259259259264"></path>
                                                    <g id="SvgjsG2627" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG2628" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2630" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2632" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2634" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2636" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2638" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2640" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2626" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2661" x1="-31.522222222222222" y1="0"
                                                x2="402.4777777777778" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2662" x1="-31.522222222222222" y1="0"
                                                x2="402.4777777777778" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2663" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2664" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2665" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2650" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2620" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 6-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">6.3k</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                            <!--end::Title-->
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Michael Eberon">
                                    <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Melody Macy">
                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Barry Walter">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--begin::Col-->
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Chart widget 3-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                rx="4" fill="currentColor"></rect>
                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Statistics-->
                            <div class="px-9 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2">
                                    <span class="fs-4 fw-bold text-gray-400 me-1">$</span>
                                    <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6"
                                style="height: 300px; min-height: 315px;">
                                <div id="apexchartsox6mxtjy"
                                    class="apexcharts-canvas apexchartsox6mxtjy apexcharts-theme-light"
                                    style="width: 907.5px; height: 300px;"><svg id="SvgjsSvg2390" width="907.5"
                                        height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2392" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(55.66666793823242, 30)">
                                            <defs id="SvgjsDefs2391">
                                                <clipPath id="gridRectMaskox6mxtjy">
                                                    <rect id="SvgjsRect2397" width="848.8333320617676"
                                                        height="223.02222085062664" x="-3.5" y="-1.5" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskox6mxtjy"></clipPath>
                                                <clipPath id="nonForecastMaskox6mxtjy"></clipPath>
                                                <clipPath id="gridRectMarkerMaskox6mxtjy">
                                                    <rect id="SvgjsRect2398" width="845.8333320617676"
                                                        height="224.02222085062664" x="-2" y="-2" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2403" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2404" stop-opacity="0.4"
                                                        stop-color="rgba(80,205,137,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2405" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                    <stop id="SvgjsStop2406" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG2409" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2410" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText2412"
                                                        font-family="inherit" x="0" y="243.02222085062664"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2413"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2415" font-family="inherit"
                                                        x="46.76851844787598" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2416"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2418" font-family="inherit"
                                                        x="93.53703689575195" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2419"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2421" font-family="inherit"
                                                        x="140.30555534362793" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 141.30556297302246 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2422">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText2424" font-family="inherit"
                                                        x="187.0740737915039" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2425"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2427" font-family="inherit"
                                                        x="233.84259223937988" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2428"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2430" font-family="inherit"
                                                        x="280.61111068725586" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 281.61114501953125 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2431">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText2433" font-family="inherit"
                                                        x="327.37962913513184" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2434"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2436" font-family="inherit"
                                                        x="374.1481475830078" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2437"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2439" font-family="inherit"
                                                        x="420.9166660308838" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 421.9166679382324 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2440">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText2442" font-family="inherit"
                                                        x="467.68518447875977" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2443"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2445" font-family="inherit"
                                                        x="514.4537029266357" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2446"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2448" font-family="inherit"
                                                        x="561.2222213745117" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 562.2222709655762 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2449">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText2451" font-family="inherit"
                                                        x="607.9907398223877" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2452"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2454" font-family="inherit"
                                                        x="654.7592582702637" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2455"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2457" font-family="inherit"
                                                        x="701.5277767181396" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 702.5277519226074 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2458">Apr 16</tspan>
                                                        <title>Apr 16</title>
                                                    </text><text id="SvgjsText2460" font-family="inherit"
                                                        x="748.2962951660156" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2461"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2463" font-family="inherit"
                                                        x="795.0648136138916" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2464"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2466" font-family="inherit"
                                                        x="841.8333320617676" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2467"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2480" class="apexcharts-grid">
                                                <g id="SvgjsG2481" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2483" x1="0" y1="0"
                                                        x2="841.8333320617676" y2="0" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2484" x1="0" y1="55.00555521265666"
                                                        x2="841.8333320617676" y2="55.00555521265666" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2485" x1="0" y1="110.01111042531332"
                                                        x2="841.8333320617676" y2="110.01111042531332" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2486" x1="0" y1="165.01666563797"
                                                        x2="841.8333320617676" y2="165.01666563797" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2487" x1="0" y1="220.02222085062664"
                                                        x2="841.8333320617676" y2="220.02222085062664" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2482" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2489" x1="0" y1="220.02222085062664"
                                                    x2="841.8333320617676" y2="220.02222085062664" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2488" x1="0" y1="1" x2="0"
                                                    y2="220.02222085062664" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2399" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2400" class="apexcharts-series" seriesName="Sales"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2407"
                                                        d="M 0 220.02222085062664L 0 94.29523750741146C 16.36898145675659 94.29523750741146 30.399536991119387 94.29523750741146 46.76851844787598 94.29523750741146C 63.13749990463256 94.29523750741146 77.16805543899537 62.86349167160762 93.53703689575195 62.86349167160762C 109.90601835250854 62.86349167160762 123.93657388687134 62.86349167160762 140.30555534362793 62.86349167160762C 156.67453680038452 62.86349167160762 170.70509233474732 94.29523750741146 187.0740737915039 94.29523750741146C 203.44305524826052 94.29523750741146 217.47361078262333 94.29523750741146 233.8425922393799 94.29523750741146C 250.2115736961365 94.29523750741146 264.2421292304993 31.431745835803838 280.61111068725586 31.431745835803838C 296.9800921440125 31.431745835803838 311.0106476783752 31.431745835803838 327.37962913513184 31.431745835803838C 343.74861059188845 31.431745835803838 357.7791661262512 62.86349167160762 374.1481475830078 62.86349167160762C 390.5171290397644 62.86349167160762 404.54768457412723 62.86349167160762 420.91666603088385 62.86349167160762C 437.28564748764046 62.86349167160762 451.3162030220032 94.29523750741146 467.6851844787598 94.29523750741146C 484.0541659355164 94.29523750741146 498.0847214698792 94.29523750741146 514.4537029266357 94.29523750741146C 530.8226843833924 94.29523750741146 544.8532399177551 62.86349167160762 561.2222213745117 62.86349167160762C 577.5912028312683 62.86349167160762 591.6217583656311 62.86349167160762 607.9907398223877 62.86349167160762C 624.3597212791443 62.86349167160762 638.3902768135071 94.29523750741146 654.7592582702637 94.29523750741146C 671.1282397270203 94.29523750741146 685.158795261383 94.29523750741146 701.5277767181396 94.29523750741146C 717.8967581748963 94.29523750741146 731.927313709259 62.86349167160762 748.2962951660156 62.86349167160762C 764.6652766227722 62.86349167160762 778.6958321571351 62.86349167160762 795.0648136138917 62.86349167160762C 811.4337950706483 62.86349167160762 825.4643506050111 31.431745835803838 841.8333320617677 31.431745835803838C 841.8333320617677 31.431745835803838 841.8333320617677 31.431745835803838 841.8333320617677 220.02222085062664M 841.8333320617677 31.431745835803838z"
                                                        fill="url(#SvgjsLinearGradient2403)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskox6mxtjy)"
                                                        pathTo="M 0 220.02222085062664L 0 94.29523750741146C 16.36898145675659 94.29523750741146 30.399536991119387 94.29523750741146 46.76851844787598 94.29523750741146C 63.13749990463256 94.29523750741146 77.16805543899537 62.86349167160762 93.53703689575195 62.86349167160762C 109.90601835250854 62.86349167160762 123.93657388687134 62.86349167160762 140.30555534362793 62.86349167160762C 156.67453680038452 62.86349167160762 170.70509233474732 94.29523750741146 187.0740737915039 94.29523750741146C 203.44305524826052 94.29523750741146 217.47361078262333 94.29523750741146 233.8425922393799 94.29523750741146C 250.2115736961365 94.29523750741146 264.2421292304993 31.431745835803838 280.61111068725586 31.431745835803838C 296.9800921440125 31.431745835803838 311.0106476783752 31.431745835803838 327.37962913513184 31.431745835803838C 343.74861059188845 31.431745835803838 357.7791661262512 62.86349167160762 374.1481475830078 62.86349167160762C 390.5171290397644 62.86349167160762 404.54768457412723 62.86349167160762 420.91666603088385 62.86349167160762C 437.28564748764046 62.86349167160762 451.3162030220032 94.29523750741146 467.6851844787598 94.29523750741146C 484.0541659355164 94.29523750741146 498.0847214698792 94.29523750741146 514.4537029266357 94.29523750741146C 530.8226843833924 94.29523750741146 544.8532399177551 62.86349167160762 561.2222213745117 62.86349167160762C 577.5912028312683 62.86349167160762 591.6217583656311 62.86349167160762 607.9907398223877 62.86349167160762C 624.3597212791443 62.86349167160762 638.3902768135071 94.29523750741146 654.7592582702637 94.29523750741146C 671.1282397270203 94.29523750741146 685.158795261383 94.29523750741146 701.5277767181396 94.29523750741146C 717.8967581748963 94.29523750741146 731.927313709259 62.86349167160762 748.2962951660156 62.86349167160762C 764.6652766227722 62.86349167160762 778.6958321571351 62.86349167160762 795.0648136138917 62.86349167160762C 811.4337950706483 62.86349167160762 825.4643506050111 31.431745835803838 841.8333320617677 31.431745835803838C 841.8333320617677 31.431745835803838 841.8333320617677 31.431745835803838 841.8333320617677 220.02222085062664M 841.8333320617677 31.431745835803838z"
                                                        pathFrom="M -1 377.1809500296457L -1 377.1809500296457L 46.76851844787598 377.1809500296457L 93.53703689575195 377.1809500296457L 140.30555534362793 377.1809500296457L 187.0740737915039 377.1809500296457L 233.8425922393799 377.1809500296457L 280.61111068725586 377.1809500296457L 327.37962913513184 377.1809500296457L 374.1481475830078 377.1809500296457L 420.91666603088385 377.1809500296457L 467.6851844787598 377.1809500296457L 514.4537029266357 377.1809500296457L 561.2222213745117 377.1809500296457L 607.9907398223877 377.1809500296457L 654.7592582702637 377.1809500296457L 701.5277767181396 377.1809500296457L 748.2962951660156 377.1809500296457L 795.0648136138917 377.1809500296457L 841.8333320617677 377.1809500296457">
                                                    </path>
                                                    <path id="SvgjsPath2408"
                                                        d="M 0 94.29523750741146C 16.36898145675659 94.29523750741146 30.399536991119387 94.29523750741146 46.76851844787598 94.29523750741146C 63.13749990463256 94.29523750741146 77.16805543899537 62.86349167160762 93.53703689575195 62.86349167160762C 109.90601835250854 62.86349167160762 123.93657388687134 62.86349167160762 140.30555534362793 62.86349167160762C 156.67453680038452 62.86349167160762 170.70509233474732 94.29523750741146 187.0740737915039 94.29523750741146C 203.44305524826052 94.29523750741146 217.47361078262333 94.29523750741146 233.8425922393799 94.29523750741146C 250.2115736961365 94.29523750741146 264.2421292304993 31.431745835803838 280.61111068725586 31.431745835803838C 296.9800921440125 31.431745835803838 311.0106476783752 31.431745835803838 327.37962913513184 31.431745835803838C 343.74861059188845 31.431745835803838 357.7791661262512 62.86349167160762 374.1481475830078 62.86349167160762C 390.5171290397644 62.86349167160762 404.54768457412723 62.86349167160762 420.91666603088385 62.86349167160762C 437.28564748764046 62.86349167160762 451.3162030220032 94.29523750741146 467.6851844787598 94.29523750741146C 484.0541659355164 94.29523750741146 498.0847214698792 94.29523750741146 514.4537029266357 94.29523750741146C 530.8226843833924 94.29523750741146 544.8532399177551 62.86349167160762 561.2222213745117 62.86349167160762C 577.5912028312683 62.86349167160762 591.6217583656311 62.86349167160762 607.9907398223877 62.86349167160762C 624.3597212791443 62.86349167160762 638.3902768135071 94.29523750741146 654.7592582702637 94.29523750741146C 671.1282397270203 94.29523750741146 685.158795261383 94.29523750741146 701.5277767181396 94.29523750741146C 717.8967581748963 94.29523750741146 731.927313709259 62.86349167160762 748.2962951660156 62.86349167160762C 764.6652766227722 62.86349167160762 778.6958321571351 62.86349167160762 795.0648136138917 62.86349167160762C 811.4337950706483 62.86349167160762 825.4643506050111 31.431745835803838 841.8333320617677 31.431745835803838"
                                                        fill="none" fill-opacity="1" stroke="#50cd89"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskox6mxtjy)"
                                                        pathTo="M 0 94.29523750741146C 16.36898145675659 94.29523750741146 30.399536991119387 94.29523750741146 46.76851844787598 94.29523750741146C 63.13749990463256 94.29523750741146 77.16805543899537 62.86349167160762 93.53703689575195 62.86349167160762C 109.90601835250854 62.86349167160762 123.93657388687134 62.86349167160762 140.30555534362793 62.86349167160762C 156.67453680038452 62.86349167160762 170.70509233474732 94.29523750741146 187.0740737915039 94.29523750741146C 203.44305524826052 94.29523750741146 217.47361078262333 94.29523750741146 233.8425922393799 94.29523750741146C 250.2115736961365 94.29523750741146 264.2421292304993 31.431745835803838 280.61111068725586 31.431745835803838C 296.9800921440125 31.431745835803838 311.0106476783752 31.431745835803838 327.37962913513184 31.431745835803838C 343.74861059188845 31.431745835803838 357.7791661262512 62.86349167160762 374.1481475830078 62.86349167160762C 390.5171290397644 62.86349167160762 404.54768457412723 62.86349167160762 420.91666603088385 62.86349167160762C 437.28564748764046 62.86349167160762 451.3162030220032 94.29523750741146 467.6851844787598 94.29523750741146C 484.0541659355164 94.29523750741146 498.0847214698792 94.29523750741146 514.4537029266357 94.29523750741146C 530.8226843833924 94.29523750741146 544.8532399177551 62.86349167160762 561.2222213745117 62.86349167160762C 577.5912028312683 62.86349167160762 591.6217583656311 62.86349167160762 607.9907398223877 62.86349167160762C 624.3597212791443 62.86349167160762 638.3902768135071 94.29523750741146 654.7592582702637 94.29523750741146C 671.1282397270203 94.29523750741146 685.158795261383 94.29523750741146 701.5277767181396 94.29523750741146C 717.8967581748963 94.29523750741146 731.927313709259 62.86349167160762 748.2962951660156 62.86349167160762C 764.6652766227722 62.86349167160762 778.6958321571351 62.86349167160762 795.0648136138917 62.86349167160762C 811.4337950706483 62.86349167160762 825.4643506050111 31.431745835803838 841.8333320617677 31.431745835803838"
                                                        pathFrom="M -1 377.1809500296457L -1 377.1809500296457L 46.76851844787598 377.1809500296457L 93.53703689575195 377.1809500296457L 140.30555534362793 377.1809500296457L 187.0740737915039 377.1809500296457L 233.8425922393799 377.1809500296457L 280.61111068725586 377.1809500296457L 327.37962913513184 377.1809500296457L 374.1481475830078 377.1809500296457L 420.91666603088385 377.1809500296457L 467.6851844787598 377.1809500296457L 514.4537029266357 377.1809500296457L 561.2222213745117 377.1809500296457L 607.9907398223877 377.1809500296457L 654.7592582702637 377.1809500296457L 701.5277767181396 377.1809500296457L 748.2962951660156 377.1809500296457L 795.0648136138917 377.1809500296457L 841.8333320617677 377.1809500296457">
                                                    </path>
                                                    <g id="SvgjsG2401" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2497" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker w91o7lqaa no-pointer-events"
                                                                stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2402" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2491" x1="0" y1="0" x2="0"
                                                y2="220.02222085062664" stroke="#50cd89" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="220.02222085062664" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine2492" x1="0" y1="0"
                                                x2="841.8333320617676" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2493" x1="0" y1="0"
                                                x2="841.8333320617676" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2494" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2495" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2496" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect2498" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect2499" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG2468" class="apexcharts-yaxis" rel="0"
                                            transform="translate(25.666667938232422, 0)">
                                            <g id="SvgjsG2469" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText2470" font-family="inherit" x="20" y="31.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2471">$24K</tspan>
                                                    <title>$24K</title>
                                                </text><text id="SvgjsText2472" font-family="inherit" x="20"
                                                    y="86.40555521265667" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2473">$20.5K</tspan>
                                                    <title>$20.5K</title>
                                                </text><text id="SvgjsText2474" font-family="inherit" x="20"
                                                    y="141.41111042531332" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2475">$17K</tspan>
                                                    <title>$17K</title>
                                                </text><text id="SvgjsText2476" font-family="inherit" x="20"
                                                    y="196.41666563797" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2477">$13.5K</tspan>
                                                    <title>$13.5K</title>
                                                </text><text id="SvgjsText2478" font-family="inherit" x="20"
                                                    y="251.42222085062664" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2479">$10K</tspan>
                                                    <title>$10K</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect2490" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2393" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(80, 205, 137);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6 mb-xl-10">
                    <!--begin::Tables widget 2-->
                    <div class="card h-md-100">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0">
                            <!--begin::Title-->
                            <h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
                            <!--end::Title-->
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-overflow="true">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                            rx="4" fill="currentColor"></rect>
                                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                            fill="currentColor"></rect>
                                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                            fill="currentColor"></rect>
                                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                            fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/t-shirt.svg"
                                                class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/gaming.svg"
                                                class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/watch.svg"
                                                class="">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/gloves.svg"
                                                class="nav-icon">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img alt="" src="assets/media/svg/products-categories/shoes.svg"
                                                class="nav-icon">
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                    <th class="ps-0 w-50px">ITEM</th>
                                                    <th class="min-w-140px"></th>
                                                    <th class="text-end min-w-140px">QTY</th>
                                                    <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                    <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/210.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                            1802</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-2347</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/215.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                            Laga</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-1321</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/209.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-4312</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                    <th class="ps-0 w-50px">ITEM</th>
                                                    <th class="min-w-140px"></th>
                                                    <th class="text-end min-w-140px">QTY</th>
                                                    <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                    <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/197.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                            1802</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-4312</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/178.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                            Laga</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-3122</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/22.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-1142</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                    <th class="ps-0 w-50px">ITEM</th>
                                                    <th class="min-w-140px"></th>
                                                    <th class="text-end min-w-140px">QTY</th>
                                                    <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                    <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/1.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                            1324</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-1523</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/24.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                            Laga</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-5314</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/71.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-4222</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                    <th class="ps-0 w-50px">ITEM</th>
                                                    <th class="min-w-140px"></th>
                                                    <th class="text-end min-w-140px">QTY</th>
                                                    <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                    <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/41.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                            2635</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-1523</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/63.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                            Laga</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-2745</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/59.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-5173</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                    <th class="ps-0 w-50px">ITEM</th>
                                                    <th class="min-w-140px"></th>
                                                    <th class="text-end min-w-140px">QTY</th>
                                                    <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                    <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/10.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-2163</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/96.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-2162</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/media/stock/ecommerce/13.gif"
                                                            class="w-50px ms-n1" alt="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                        <span
                                                            class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                            #XDG-1537</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Tables widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Chart widget 4-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                rx="4" fill="currentColor"></rect>
                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Info-->
                            <div class="px-9 mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">3,706</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-success fs-base">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                    rx="1" transform="rotate(-90 11 18)" fill="currentColor">
                                                </rect>
                                                <path
                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->4.5%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This Month</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6"
                                style="height: 300px; min-height: 315px;">
                                <div id="apexcharts9a549frzl"
                                    class="apexcharts-canvas apexcharts9a549frzl apexcharts-theme-light"
                                    style="width: 421.5px; height: 300px;"><svg id="SvgjsSvg2501" width="421.5"
                                        height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2503" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(55.66666793823242, 30)">
                                            <defs id="SvgjsDefs2502">
                                                <clipPath id="gridRectMask9a549frzl">
                                                    <rect id="SvgjsRect2508" width="362.8333320617676"
                                                        height="223.02222085062664" x="-3.5" y="-1.5" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask9a549frzl"></clipPath>
                                                <clipPath id="nonForecastMask9a549frzl"></clipPath>
                                                <clipPath id="gridRectMarkerMask9a549frzl">
                                                    <rect id="SvgjsRect2509" width="359.8333320617676"
                                                        height="224.02222085062664" x="-2" y="-2" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2514" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2515" stop-opacity="0.4"
                                                        stop-color="rgba(0,158,247,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2516" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                    <stop id="SvgjsStop2517" stop-opacity="0"
                                                        stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG2520" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2521" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText2523"
                                                        font-family="inherit" x="0" y="243.02222085062664"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2524"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2526" font-family="inherit"
                                                        x="19.768518447875977" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2527"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2529" font-family="inherit"
                                                        x="39.53703689575195" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2530"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2532" font-family="inherit"
                                                        x="59.30555534362793" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 60.30555534362793 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2533">Apr 04</tspan>
                                                        <title>Apr 04</title>
                                                    </text><text id="SvgjsText2535" font-family="inherit"
                                                        x="79.0740737915039" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2536"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2538" font-family="inherit"
                                                        x="98.84259223937988" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2539"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2541" font-family="inherit"
                                                        x="118.61111068725586" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 119.6111068725586 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2542">Apr 07</tspan>
                                                        <title>Apr 07</title>
                                                    </text><text id="SvgjsText2544" font-family="inherit"
                                                        x="138.37962913513184" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2545"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2547" font-family="inherit"
                                                        x="158.1481475830078" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2548"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2550" font-family="inherit"
                                                        x="177.9166660308838" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 178.91666793823242 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2551">Apr 10</tspan>
                                                        <title>Apr 10</title>
                                                    </text><text id="SvgjsText2553" font-family="inherit"
                                                        x="197.68518447875977" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2554"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2556" font-family="inherit"
                                                        x="217.45370292663574" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2557"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2559" font-family="inherit"
                                                        x="237.22222137451172" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 238.22220993041992 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2560">Apr 13</tspan>
                                                        <title>Apr 13</title>
                                                    </text><text id="SvgjsText2562" font-family="inherit"
                                                        x="256.9907398223877" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2563"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2565" font-family="inherit"
                                                        x="276.7592582702637" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2566"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2568" font-family="inherit"
                                                        x="296.52777671813965" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(0 297.52778244018555 237.6888942718506)">
                                                        <tspan id="SvgjsTspan2569">Apr 18</tspan>
                                                        <title>Apr 18</title>
                                                    </text><text id="SvgjsText2571" font-family="inherit"
                                                        x="316.2962951660156" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2572"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2574" font-family="inherit"
                                                        x="336.0648136138916" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2575"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2577" font-family="inherit"
                                                        x="355.8333320617676" y="243.02222085062664" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                        <tspan id="SvgjsTspan2578"></tspan>
                                                        <title></title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2595" class="apexcharts-grid">
                                                <g id="SvgjsG2596" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2598" x1="0" y1="0"
                                                        x2="355.8333320617676" y2="0" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2599" x1="0" y1="36.67037014177111"
                                                        x2="355.8333320617676" y2="36.67037014177111" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2600" x1="0" y1="73.34074028354222"
                                                        x2="355.8333320617676" y2="73.34074028354222" stroke="#e4e6ef"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2601" x1="0" y1="110.01111042531332"
                                                        x2="355.8333320617676" y2="110.01111042531332"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2602" x1="0" y1="146.68148056708444"
                                                        x2="355.8333320617676" y2="146.68148056708444"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2603" x1="0" y1="183.35185070885555"
                                                        x2="355.8333320617676" y2="183.35185070885555"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2604" x1="0" y1="220.02222085062667"
                                                        x2="355.8333320617676" y2="220.02222085062667"
                                                        stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2597" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2606" x1="0" y1="220.02222085062664"
                                                    x2="355.8333320617676" y2="220.02222085062664"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine2605" x1="0" y1="1"
                                                    x2="0" y2="220.02222085062664" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2510" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2511" class="apexcharts-series" seriesName="Sales"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2518"
                                                        d="M 0 220.02222085062664L 0 120.01212046397723C 6.918981456756591 120.01212046397723 12.849536991119386 120.01212046397723 19.768518447875977 120.01212046397723C 26.687499904632567 120.01212046397723 32.61805543899536 86.67542033509426 39.53703689575195 86.67542033509426C 46.45601835250854 86.67542033509426 52.38657388687134 86.67542033509426 59.30555534362793 86.67542033509426C 66.22453680038453 86.67542033509426 72.15509233474731 53.33872020621129 79.0740737915039 53.33872020621129C 85.9930552482605 53.33872020621129 91.92361078262329 53.33872020621129 98.84259223937988 53.33872020621129C 105.76157369613648 53.33872020621129 111.69212923049926 86.67542033509426 118.61111068725586 86.67542033509426C 125.53009214401246 86.67542033509426 131.46064767837524 86.67542033509426 138.37962913513184 86.67542033509426C 145.29861059188843 86.67542033509426 151.22916612625122 53.33872020621129 158.1481475830078 53.33872020621129C 165.0671290397644 53.33872020621129 170.9976845741272 53.33872020621129 177.9166660308838 53.33872020621129C 184.8356474876404 53.33872020621129 190.76620302200317 86.67542033509426 197.68518447875977 86.67542033509426C 204.60416593551636 86.67542033509426 210.53472146987914 86.67542033509426 217.45370292663574 86.67542033509426C 224.37268438339234 86.67542033509426 230.30323991775512 120.01212046397723 237.22222137451172 120.01212046397723C 244.14120283126832 120.01212046397723 250.0717583656311 120.01212046397723 256.9907398223877 120.01212046397723C 263.90972127914426 120.01212046397723 269.8402768135071 86.67542033509426 276.7592582702637 86.67542033509426C 283.67823972702024 86.67542033509426 289.6087952613831 86.67542033509426 296.52777671813965 86.67542033509426C 303.4467581748962 86.67542033509426 309.37731370925906 53.33872020621129 316.2962951660156 53.33872020621129C 323.2152766227722 53.33872020621129 329.14583215713503 53.33872020621129 336.0648136138916 53.33872020621129C 342.98379507064817 53.33872020621129 348.914350605011 86.67542033509426 355.8333320617676 86.67542033509426C 355.8333320617676 86.67542033509426 355.8333320617676 86.67542033509426 355.8333320617676 220.02222085062664M 355.8333320617676 86.67542033509426z"
                                                        fill="url(#SvgjsLinearGradient2514)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask9a549frzl)"
                                                        pathTo="M 0 220.02222085062664L 0 120.01212046397723C 6.918981456756591 120.01212046397723 12.849536991119386 120.01212046397723 19.768518447875977 120.01212046397723C 26.687499904632567 120.01212046397723 32.61805543899536 86.67542033509426 39.53703689575195 86.67542033509426C 46.45601835250854 86.67542033509426 52.38657388687134 86.67542033509426 59.30555534362793 86.67542033509426C 66.22453680038453 86.67542033509426 72.15509233474731 53.33872020621129 79.0740737915039 53.33872020621129C 85.9930552482605 53.33872020621129 91.92361078262329 53.33872020621129 98.84259223937988 53.33872020621129C 105.76157369613648 53.33872020621129 111.69212923049926 86.67542033509426 118.61111068725586 86.67542033509426C 125.53009214401246 86.67542033509426 131.46064767837524 86.67542033509426 138.37962913513184 86.67542033509426C 145.29861059188843 86.67542033509426 151.22916612625122 53.33872020621129 158.1481475830078 53.33872020621129C 165.0671290397644 53.33872020621129 170.9976845741272 53.33872020621129 177.9166660308838 53.33872020621129C 184.8356474876404 53.33872020621129 190.76620302200317 86.67542033509426 197.68518447875977 86.67542033509426C 204.60416593551636 86.67542033509426 210.53472146987914 86.67542033509426 217.45370292663574 86.67542033509426C 224.37268438339234 86.67542033509426 230.30323991775512 120.01212046397723 237.22222137451172 120.01212046397723C 244.14120283126832 120.01212046397723 250.0717583656311 120.01212046397723 256.9907398223877 120.01212046397723C 263.90972127914426 120.01212046397723 269.8402768135071 86.67542033509426 276.7592582702637 86.67542033509426C 283.67823972702024 86.67542033509426 289.6087952613831 86.67542033509426 296.52777671813965 86.67542033509426C 303.4467581748962 86.67542033509426 309.37731370925906 53.33872020621129 316.2962951660156 53.33872020621129C 323.2152766227722 53.33872020621129 329.14583215713503 53.33872020621129 336.0648136138916 53.33872020621129C 342.98379507064817 53.33872020621129 348.914350605011 86.67542033509426 355.8333320617676 86.67542033509426C 355.8333320617676 86.67542033509426 355.8333320617676 86.67542033509426 355.8333320617676 220.02222085062664M 355.8333320617676 86.67542033509426z"
                                                        pathFrom="M -1 2420.244429356904L -1 2420.244429356904L 19.768518447875977 2420.244429356904L 39.53703689575195 2420.244429356904L 59.30555534362793 2420.244429356904L 79.0740737915039 2420.244429356904L 98.84259223937988 2420.244429356904L 118.61111068725586 2420.244429356904L 138.37962913513184 2420.244429356904L 158.1481475830078 2420.244429356904L 177.9166660308838 2420.244429356904L 197.68518447875977 2420.244429356904L 217.45370292663574 2420.244429356904L 237.22222137451172 2420.244429356904L 256.9907398223877 2420.244429356904L 276.7592582702637 2420.244429356904L 296.52777671813965 2420.244429356904L 316.2962951660156 2420.244429356904L 336.0648136138916 2420.244429356904L 355.8333320617676 2420.244429356904">
                                                    </path>
                                                    <path id="SvgjsPath2519"
                                                        d="M 0 120.01212046397723C 6.918981456756591 120.01212046397723 12.849536991119386 120.01212046397723 19.768518447875977 120.01212046397723C 26.687499904632567 120.01212046397723 32.61805543899536 86.67542033509426 39.53703689575195 86.67542033509426C 46.45601835250854 86.67542033509426 52.38657388687134 86.67542033509426 59.30555534362793 86.67542033509426C 66.22453680038453 86.67542033509426 72.15509233474731 53.33872020621129 79.0740737915039 53.33872020621129C 85.9930552482605 53.33872020621129 91.92361078262329 53.33872020621129 98.84259223937988 53.33872020621129C 105.76157369613648 53.33872020621129 111.69212923049926 86.67542033509426 118.61111068725586 86.67542033509426C 125.53009214401246 86.67542033509426 131.46064767837524 86.67542033509426 138.37962913513184 86.67542033509426C 145.29861059188843 86.67542033509426 151.22916612625122 53.33872020621129 158.1481475830078 53.33872020621129C 165.0671290397644 53.33872020621129 170.9976845741272 53.33872020621129 177.9166660308838 53.33872020621129C 184.8356474876404 53.33872020621129 190.76620302200317 86.67542033509426 197.68518447875977 86.67542033509426C 204.60416593551636 86.67542033509426 210.53472146987914 86.67542033509426 217.45370292663574 86.67542033509426C 224.37268438339234 86.67542033509426 230.30323991775512 120.01212046397723 237.22222137451172 120.01212046397723C 244.14120283126832 120.01212046397723 250.0717583656311 120.01212046397723 256.9907398223877 120.01212046397723C 263.90972127914426 120.01212046397723 269.8402768135071 86.67542033509426 276.7592582702637 86.67542033509426C 283.67823972702024 86.67542033509426 289.6087952613831 86.67542033509426 296.52777671813965 86.67542033509426C 303.4467581748962 86.67542033509426 309.37731370925906 53.33872020621129 316.2962951660156 53.33872020621129C 323.2152766227722 53.33872020621129 329.14583215713503 53.33872020621129 336.0648136138916 53.33872020621129C 342.98379507064817 53.33872020621129 348.914350605011 86.67542033509426 355.8333320617676 86.67542033509426"
                                                        fill="none" fill-opacity="1" stroke="#009ef7"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask9a549frzl)"
                                                        pathTo="M 0 120.01212046397723C 6.918981456756591 120.01212046397723 12.849536991119386 120.01212046397723 19.768518447875977 120.01212046397723C 26.687499904632567 120.01212046397723 32.61805543899536 86.67542033509426 39.53703689575195 86.67542033509426C 46.45601835250854 86.67542033509426 52.38657388687134 86.67542033509426 59.30555534362793 86.67542033509426C 66.22453680038453 86.67542033509426 72.15509233474731 53.33872020621129 79.0740737915039 53.33872020621129C 85.9930552482605 53.33872020621129 91.92361078262329 53.33872020621129 98.84259223937988 53.33872020621129C 105.76157369613648 53.33872020621129 111.69212923049926 86.67542033509426 118.61111068725586 86.67542033509426C 125.53009214401246 86.67542033509426 131.46064767837524 86.67542033509426 138.37962913513184 86.67542033509426C 145.29861059188843 86.67542033509426 151.22916612625122 53.33872020621129 158.1481475830078 53.33872020621129C 165.0671290397644 53.33872020621129 170.9976845741272 53.33872020621129 177.9166660308838 53.33872020621129C 184.8356474876404 53.33872020621129 190.76620302200317 86.67542033509426 197.68518447875977 86.67542033509426C 204.60416593551636 86.67542033509426 210.53472146987914 86.67542033509426 217.45370292663574 86.67542033509426C 224.37268438339234 86.67542033509426 230.30323991775512 120.01212046397723 237.22222137451172 120.01212046397723C 244.14120283126832 120.01212046397723 250.0717583656311 120.01212046397723 256.9907398223877 120.01212046397723C 263.90972127914426 120.01212046397723 269.8402768135071 86.67542033509426 276.7592582702637 86.67542033509426C 283.67823972702024 86.67542033509426 289.6087952613831 86.67542033509426 296.52777671813965 86.67542033509426C 303.4467581748962 86.67542033509426 309.37731370925906 53.33872020621129 316.2962951660156 53.33872020621129C 323.2152766227722 53.33872020621129 329.14583215713503 53.33872020621129 336.0648136138916 53.33872020621129C 342.98379507064817 53.33872020621129 348.914350605011 86.67542033509426 355.8333320617676 86.67542033509426"
                                                        pathFrom="M -1 2420.244429356904L -1 2420.244429356904L 19.768518447875977 2420.244429356904L 39.53703689575195 2420.244429356904L 59.30555534362793 2420.244429356904L 79.0740737915039 2420.244429356904L 98.84259223937988 2420.244429356904L 118.61111068725586 2420.244429356904L 138.37962913513184 2420.244429356904L 158.1481475830078 2420.244429356904L 177.9166660308838 2420.244429356904L 197.68518447875977 2420.244429356904L 217.45370292663574 2420.244429356904L 237.22222137451172 2420.244429356904L 256.9907398223877 2420.244429356904L 276.7592582702637 2420.244429356904L 296.52777671813965 2420.244429356904L 316.2962951660156 2420.244429356904L 336.0648136138916 2420.244429356904L 355.8333320617676 2420.244429356904">
                                                    </path>
                                                    <g id="SvgjsG2512" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2614" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker w9740x4fy no-pointer-events"
                                                                stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2513" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2608" x1="0" y1="0" x2="0"
                                                y2="220.02222085062664" stroke="#009ef7" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="220.02222085062664" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine2609" x1="0" y1="0"
                                                x2="355.8333320617676" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2610" x1="0" y1="0"
                                                x2="355.8333320617676" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2611" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2612" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2613" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect2615" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect2616" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG2579" class="apexcharts-yaxis" rel="0"
                                            transform="translate(25.666667938232422, 0)">
                                            <g id="SvgjsG2580" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText2581" font-family="inherit" x="20" y="31.6"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2582">$362</tspan>
                                                    <title>$362</title>
                                                </text><text id="SvgjsText2583" font-family="inherit" x="20"
                                                    y="68.27037014177111" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2584">$357</tspan>
                                                    <title>$357</title>
                                                </text><text id="SvgjsText2585" font-family="inherit" x="20"
                                                    y="104.94074028354223" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2586">$351</tspan>
                                                    <title>$351</title>
                                                </text><text id="SvgjsText2587" font-family="inherit" x="20"
                                                    y="141.61111042531334" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2588">$346</tspan>
                                                    <title>$346</title>
                                                </text><text id="SvgjsText2589" font-family="inherit" x="20"
                                                    y="178.28148056708446" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2590">$340</tspan>
                                                    <title>$340</title>
                                                </text><text id="SvgjsText2591" font-family="inherit" x="20"
                                                    y="214.95185070885557" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2592">$335</tspan>
                                                    <title>$335</title>
                                                </text><text id="SvgjsText2593" font-family="inherit" x="20"
                                                    y="251.6222208506267" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2594">$330</tspan>
                                                    <title>$330</title>
                                                </text></g>
                                        </g>
                                        <rect id="SvgjsRect2607" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2504" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
                                    <br>new
                                    <span class="fw-boldest">eCommerce App ?</span>
                                </h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12"
                                    style="background-image:url('assets/media/svg/illustrations/easy/2.svg')"></div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2"
                                    href="../../demo1/dist/apps/ecommerce/sales/listing.html">View App</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light"
                                    href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">New Product</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table Widget 4-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-gray-800">Product Orders</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bolder">
                                        <!--begin::Label-->
                                        <div class="text-gray-400 fs-7 me-2">Cateogry</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-select2-id="select2-data-7-2euf" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Show All" selected="selected"
                                                data-select2-id="select2-data-9-yldv">Show All</option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category A</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-ftme"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-eh6w-container"
                                                    aria-controls="select2-eh6w-container"><span
                                                        class="select2-selection__rendered" id="select2-eh6w-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bolder">
                                        <!--begin::Label-->
                                        <div class="text-gray-400 fs-7 me-2">Status</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-4="filter_status"
                                            data-select2-id="select2-data-10-cnw5" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Show All" selected="selected"
                                                data-select2-id="select2-data-12-v0gs">Show All</option>
                                            <option value="Shipped">Shipped</option>
                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Pending">Pending</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-11-yorp"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-9xik-container"
                                                    aria-controls="select2-9xik-container"><span
                                                        class="select2-selection__rendered" id="select2-9xik-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Search-->
                                    <div class="position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span
                                            class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                    height="2" rx="1"
                                                    transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" data-kt-table-widget-4="search"
                                            class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                            <!--begin::Table-->
                            <div id="kt_table_widget_4_table_wrapper"
                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                        id="kt_table_widget_4_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 100px;">Order ID</th>
                                                <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 100px;">Created</th>
                                                <th class="text-end min-w-125px sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 125px;">Customer</th>
                                                <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 100px;">Total</th>
                                                <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 100px;">Profit</th>
                                                <th class="text-end min-w-50px sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 95.3333px;">Status</th>
                                                <th class="text-end sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 25px;"></th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bolder text-gray-600">








                                            <tr class="odd">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#XGY-346</a>
                                                </td>
                                                <td class="text-end">7 min ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Albert
                                                        Flores</a>
                                                </td>
                                                <td class="text-end">$630.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$86.70</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#YHD-047</a>
                                                </td>
                                                <td class="text-end">52 min ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Jenny
                                                        Wilson</a>
                                                </td>
                                                <td class="text-end">$25.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$4.20</span>
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#SRR-678</a>
                                                </td>
                                                <td class="text-end">1 hour ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Robert
                                                        Fox</a>
                                                </td>
                                                <td class="text-end">$1,630.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$203.90</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#PXF-534</a>
                                                </td>
                                                <td class="text-end">3 hour ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Cody
                                                        Fisher</a>
                                                </td>
                                                <td class="text-end">$119.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$12.00</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#XGD-249</a>
                                                </td>
                                                <td class="text-end">2 day ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Arlene
                                                        McCoy</a>
                                                </td>
                                                <td class="text-end">$660.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$52.26</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#SKP-035</a>
                                                </td>
                                                <td class="text-end">2 day ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Eleanor
                                                        Pena</a>
                                                </td>
                                                <td class="text-end">$290.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$29.00</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary">#SKP-567</a>
                                                </td>
                                                <td class="text-end">7 min ago</td>
                                                <td class="text-end">
                                                    <a href="#" class="text-gray-600 text-hover-primary">Dan
                                                        Wilson</a>
                                                </td>
                                                <td class="text-end">$590.00</td>
                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-boldest">$50.00</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor">
                                                                </rect>
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12" height="2"
                                                                    rx="1" fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    </div>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Product Delivery</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">1M Products Shipped so far</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                    class="btn btn-sm btn-light">Order Details</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                <!--begin::Item-->
                                <div
                                    class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Jason Bourne</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Marie Durant</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/214.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Dan Wilson</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/211.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Lebron Wayde</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success">Delivered</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Ana Simmons</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-primary">Shipping</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack mb-3">
                                        <!--begin::Wrapper-->
                                        <div class="me-3">
                                            <!--begin::Icon-->
                                            <img src="assets/media/stock/ecommerce/192.gif" class="w-50px ms-n1 me-1"
                                                alt="">
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                            rx="4" fill="currentColor"></rect>
                                                        <rect x="11" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="15" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                        <rect x="7" y="11" width="2.6" height="2.6"
                                                            rx="1.3" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Customer-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Name-->
                                        <span class="text-gray-400 fw-bolder">To:
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fw-bolder">Kevin
                                                Leonard</a></span>
                                        <!--end::Name-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger">Confirmed</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Customer-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Stock Report</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">
                                    <!--begin::Destination-->
                                    <div class="d-flex align-items-center fw-bolder">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Cateogry</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-select2-id="select2-data-13-dlpn" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Show All" selected="selected"
                                                data-select2-id="select2-data-15-7yaa">Show All</option>
                                            <option value="a">Category A</option>
                                            <option value="b">Category B</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-14-uxgb"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-wvfo-container"
                                                    aria-controls="select2-wvfo-container"><span
                                                        class="select2-selection__rendered" id="select2-wvfo-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Destination-->
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center fw-bolder">
                                        <!--begin::Label-->
                                        <div class="text-muted fs-7 me-2">Status</div>
                                        <!--end::Label-->
                                        <!--begin::Select-->
                                        <select
                                            class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                            data-control="select2" data-hide-search="true"
                                            data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                            data-kt-table-widget-5="filter_status"
                                            data-select2-id="select2-data-16-nk5e" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Show All" selected="selected"
                                                data-select2-id="select2-data-18-q2i4">Show All</option>
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                            <option value="Low Stock">Low Stock</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-17-z0ee"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-nqwa-container"
                                                    aria-controls="select2-nqwa-container"><span
                                                        class="select2-selection__rendered" id="select2-nqwa-container"
                                                        role="textbox" aria-readonly="true" title="Show All">Show
                                                        All</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Search-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/products.html"
                                        class="btn btn-light btn-sm">View Stock</a>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <div id="kt_table_widget_5_table_wrapper"
                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                        id="kt_table_widget_5_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1"
                                                    colspan="1" aria-label="Item: activate to sort column ascending"
                                                    style="width: 100px;">Item</th>
                                                <th class="text-end pe-3 min-w-100px sorting_disabled" rowspan="1"
                                                    colspan="1" aria-label="Product ID" style="width: 100px;">
                                                    Product ID</th>
                                                <th class="text-end pe-3 min-w-150px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Date Added: activate to sort column ascending"
                                                    style="width: 150px;">Date Added</th>
                                                <th class="text-end pe-3 min-w-100px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1"
                                                    colspan="1" aria-label="Price: activate to sort column ascending"
                                                    style="width: 100px;">Price</th>
                                                <th class="text-end pe-3 min-w-50px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 104px;">Status</th>
                                                <th class="text-end pe-0 min-w-25px sorting" tabindex="0"
                                                    aria-controls="kt_table_widget_5_table" rowspan="1"
                                                    colspan="1" aria-label="Qty: activate to sort column ascending"
                                                    style="width: 28px;">Qty</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bolder text-gray-600">







                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">Macbook Air M1</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#XGY-356</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-04-20T00:00:00+06:30">02 Apr, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$1,230</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="58">
                                                    <span class="text-dark fw-bolder">58 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="even">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">Surface Laptop 4</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#YHD-047</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-04-20T00:00:00+06:30">01 Apr, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$1,060</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of
                                                        Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="0">
                                                    <span class="text-dark fw-bolder">0 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">Logitech MX 250</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#SRR-678</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-03-20T00:00:00+06:30">24 Mar, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$64</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="290">
                                                    <span class="text-dark fw-bolder">290 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="even">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">AudioEngine HD3</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#PXF-578</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-03-20T00:00:00+06:30">24 Mar, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$1,060</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of
                                                        Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="46">
                                                    <span class="text-dark fw-bolder">46 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">HP Hyper LTR</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#PXF-778</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-01-20T00:00:00+06:30">16 Jan, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$4500</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="78">
                                                    <span class="text-dark fw-bolder">78 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="even">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#XGY-356</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-12-20T00:00:00+06:30">22 Dec, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$1,060</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Low
                                                        Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="8">
                                                    <span class="text-dark fw-bolder">8 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                                                </td>
                                                <!--end::Item-->
                                                <!--begin::Product ID-->
                                                <td class="text-end">#XVR-425</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="text-end" data-order="2022-12-20T00:00:00+06:30">27 Dec, 2022
                                                </td>
                                                <!--end::Date added-->
                                                <!--begin::Price-->
                                                <td class="text-end">$1,060</td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->
                                                <td class="text-end" data-order="124">
                                                    <span class="text-dark fw-bolder">124 PCS</span>
                                                </td>
                                                <!--end::Qty-->
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    </div>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@push('script')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('template/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('template/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('template/js/custom/widgets.js')}}"></script>
    <script src="{{asset('template/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('template/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('template/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Page Custom Javascript-->
@endpush