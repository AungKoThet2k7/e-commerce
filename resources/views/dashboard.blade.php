@extends('layouts.master')
@section('title', 'Dashboard')
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
                                    <img alt="Pic" src="{{asset('template/media/avatars/300-11.jpg')}}">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Melody Macy">
                                    <img alt="Pic" src="{{asset('template/media/avatars/300-2.jpg')}}">
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Barry Walter">
                                    <img alt="Pic" src="{{asset('template/media/avatars/300-12.jpg')}}">
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
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@push('script')
    <!--begin::Page Vendors Javascript(used by this page)-->
    {{-- <script src="{{asset('template/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('template/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script> --}}
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="{{asset('template/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('template/js/custom/widgets.js')}}"></script>
    <script src="{{asset('template/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('template/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('template/js/custom/utilities/modals/users-search.js')}}"></script> --}}
    <!--end::Page Custom Javascript-->
@endpush