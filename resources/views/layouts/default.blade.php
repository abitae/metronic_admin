<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" />


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('layouts.partial.header')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                @include('layouts.partial.sidebar')
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        @include('layouts.partial.toolbar')
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        @include('layouts.partial.content')

                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    @include('layouts.partial.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="border-0 shadow-none card rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="text-gray-900 card-title fw-bold">Activity Logs</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-message-text-2 fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">There are 2 new tasks for you in “AirPlus Mobile
                                        App” project:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="pb-5 overflow-auto">
                                    <!--begin::Record-->
                                    <div
                                        class="py-3 mb-5 border border-gray-300 border-dashed rounded d-flex align-items-center min-w-750px px-7">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="text-gray-900 fs-5 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                    <!--begin::Record-->
                                    <div
                                        class="py-3 mb-0 border border-gray-300 border-dashed rounded d-flex align-items-center min-w-750px px-7">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="text-gray-900 fs-5 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4">
                                <i class="text-gray-500 ki-outline ki-flag fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">Invitation for crafting engaging designs that
                                        speak human workshop</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-disconnect fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="mb-2 text-gray-800 fs-5 fw-semibold text-hover-primary">3 New
                                        Incoming Project Files:</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="pb-5 overflow-auto">
                                    <div
                                        class="p-5 border border-gray-300 border-dashed rounded d-flex align-items-center min-w-700px">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                src="assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing
                                                    Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                src="assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-abstract-26 fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">Task
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin
                                        Dashboard project:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-pencil fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">3 new application design concepts added:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="pb-5 overflow-auto">
                                    <div
                                        class="border border-gray-300 border-dashed rounded d-flex align-items-center min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="rounded overlay-layer bg-dark bg-opacity-10">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="rounded overlay-layer bg-dark bg-opacity-10">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="rounded overlay-layer bg-dark bg-opacity-10">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-sms fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">New case
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in
                                        Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="pb-5 overflow-auto">
                                        <!--begin::Wrapper-->
                                        <div class="mt-1 d-flex align-items-center fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->
                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-pencil fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="mb-10 timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">You have received a new order:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="pb-5 overflow-auto">
                                    <!--begin::Notice-->
                                    <div
                                        class="flex-shrink-0 p-6 border border-dashed rounded notice d-flex bg-light-primary border-primary min-w-lg-600px">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="flex-wrap d-flex flex-stack flex-grow-1 flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>
                                                <div class="text-gray-700 fs-6 pe-7">Login into Admin Dashboard to make
                                                    sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="px-6 btn btn-primary align-self-center text-nowrap">Proceed</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="text-gray-500 ki-outline ki-basket fs-2"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <div class="mb-2 fs-5 fw-semibold">New order
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow
                                        Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="mt-1 d-flex align-items-center fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="py-5 text-center card-footer" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
                    <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="border-0 card w-100 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="mb-2 text-gray-900 fs-4 fw-bold text-hover-primary me-1 lh-1">Brian Cox</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-outline ki-dots-square fs-2"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="px-3 menu-item">
                                <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">Contacts</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <a href="#" class="px-3 menu-link flex-stack" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation">
                                        <i class="ki-outline ki-information fs-7"></i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="px-3 menu-link">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link" data-bs-toggle="tooltip"
                                            title="Coming soon">Create Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link" data-bs-toggle="tooltip"
                                            title="Coming soon">Invite Members</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-3 menu-link" data-bs-toggle="tooltip"
                                            title="Coming soon">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-3 my-1 menu-item">
                                <a href="#" class="px-3 menu-link" data-bs-toggle="tooltip"
                                    title="Coming soon">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <!--begin::Message(in)-->
                    <div class="mb-10 d-flex justify-content-start">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary me-1">Brian Cox</a>
                                    <span class="mb-1 text-muted fs-7">2 mins</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-info fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">How likely are you to recommend our company to your
                                friends and family ?</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="mb-10 d-flex justify-content-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="mb-1 text-muted fs-7">5 mins</span>
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-primary fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
                                been subscribed to a repository on GitHub.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="mb-10 d-flex justify-content-start">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary me-1">Brian Cox</a>
                                    <span class="mb-1 text-muted fs-7">1 Hour</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-info fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Ok, Understood!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="mb-10 d-flex justify-content-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="mb-1 text-muted fs-7">2 Hours</span>
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-primary fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                requests!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="mb-10 d-flex justify-content-start">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary me-1">Brian Cox</a>
                                    <span class="mb-1 text-muted fs-7">3 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-info fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">You can unwatch this repository immediately by clicking
                                here:
                                <a href="https://keenthemes.com">Keenthemes.com</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="mb-10 d-flex justify-content-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="mb-1 text-muted fs-7">4 Hours</span>
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-primary fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="mb-10 d-flex justify-content-start">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary me-1">Brian Cox</a>
                                    <span class="mb-1 text-muted fs-7">5 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-info fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
                                goals. Food and drinks provided</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(template for out)-->
                    <div class="mb-10 d-flex justify-content-end d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="mb-1 text-muted fs-7">Just now</span>
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-primary fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->
                    <!--begin::Message(template for in)-->
                    <div class="mb-10 d-flex justify-content-start d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="mb-2 d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="text-gray-900 fs-5 fw-bold text-hover-primary me-1">Brian Cox</a>
                                    <span class="mb-1 text-muted fs-7">Just now</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 text-gray-900 rounded bg-light-info fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Big Deal
                                for you.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="pt-4 card-footer" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="mb-3 form-control form-control-flush" rows="1" data-kt-element="input"
                    placeholder="Type a message"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-paper-clip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-cloud-add fs-3"></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="text-gray-900 card-title fw-bold">Shopping Cart</h3>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="pt-5 card-body hover-scroll-overlay-y h-400px">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 350</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">5</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 650</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">4</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 150</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">3</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 1450</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 650</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 720</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">6</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="my-6 separator separator-dashed"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="text-gray-800 fw-bold fs-5">$ 430</span>
                            <span class="mx-2 text-muted">for</span>
                            <span class="text-gray-800 fw-bold fs-5 me-3">8</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="flex-shrink-0 symbol symbol-70px symbol-2by3">
                        <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="text-gray-600 fw-bold">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="text-gray-600 fw-bold">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->
                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    
    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create App</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div
                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Details</h3>
                                            <div class="stepper-desc">Name your App</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Frameworks</h3>
                                            <div class="stepper-desc">Define your app framework</div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Database</h3>
                                            <div class="stepper-desc">Select the app database type</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Billing</h3>
                                            <div class="stepper-desc">Provide payment details</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-outline ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Completed</h3>
                                            <div class="stepper-desc">Review and Submit</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-2 d-flex align-items-center fs-5 fw-semibold">
                                                <span class="required">App Name</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name">
                                                    <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-4 d-flex align-items-center fs-5 fw-semibold">
                                                <span class="required">Category</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Select your app category">
                                                    <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Options-->
                                            <div class="fv-row">
                                                <!--begin:Option-->
                                                <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-compass fs-1 text-primary"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Quick Online Courses</span>
                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one SEO</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="1" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i
                                                                    class="ki-outline ki-element-11 fs-1 text-danger"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Face to Face Discussions</span>
                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one aspect</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="2" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="cursor-pointer d-flex flex-stack">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-outline ki-timer fs-1 text-success"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Full Intro Training</span>
                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure copywriting</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="3" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:Options-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-4 d-flex align-items-center fs-5 fw-semibold">
                                                <span class="required">Select Framework</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify your apps framework">
                                                    <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Option-->
                                            <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-outline ki-html fs-2x text-warning"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HTML5</span>
                                                        <span class="fs-7 text-muted">Base Web Projec</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked="checked"
                                                        name="framework" value="1" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-outline ki-react fs-2x text-success"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                        <span class="fs-7 text-muted">Robust and flexible app
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="2" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-outline ki-angular fs-2x text-danger"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Angular</span>
                                                        <span class="fs-7 text-muted">Powerful data mangement</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="3" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="cursor-pointer d-flex flex-stack">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-outline ki-vue fs-2x text-primary"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Vue</span>
                                                        <span class="fs-7 text-muted">Lightweight and responsive
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="4" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-2 required fs-5 fw-semibold">Database Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="dbname" placeholder="" value="master_db" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-4 d-flex align-items-center fs-5 fw-semibold">
                                                <span class="required">Select Database Engine</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Select your app database engine">
                                                    <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Option-->
                                            <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-outline ki-note text-success fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">MySQL</span>
                                                        <span class="fs-7 text-muted">Basic MySQL database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        checked="checked" value="1" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="mb-5 cursor-pointer d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-outline ki-google text-danger fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Firebase</span>
                                                        <span class="fs-7 text-muted">Google based app data
                                                            management</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="2" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="cursor-pointer d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-outline ki-microsoft text-warning fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">DynamoDB</span>
                                                        <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                            Database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="3" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-2 d-flex align-items-center fs-6 fw-semibold form-label">
                                                <span class="required">Name On Card</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify a card holder's name">
                                                    <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="card_name" value="Max Doe" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="mb-2 required fs-6 fw-semibold form-label">Card Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter card number" name="card_number"
                                                    value="4111 1111 1111 1111" />
                                                <!--end::Input-->
                                                <!--begin::Card logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                                        class="h-25px" />
                                                    <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                        class="h-25px" />
                                                    <img src="assets/media/svg/card-logos/american-express.svg" alt=""
                                                        class="h-25px" />
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 row">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="mb-2 required fs-6 fw-semibold form-label">Expiration
                                                    Date</label>
                                                <!--end::Label-->
                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Month">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_year"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Year">
                                                            <option></option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label
                                                    class="mb-2 d-flex align-items-center fs-6 fw-semibold form-label">
                                                    <span class="required">CVV</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Enter a card CVV code">
                                                        <i class="text-gray-500 ki-outline ki-information-5 fs-6"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-outline ki-credit-cart fs-2hx"></i>
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">Save Card for further
                                                    billing?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="text-center w-100">
                                        <!--begin::Heading-->
                                        <h1 class="mb-3 text-gray-900 fw-bold">Release!</h1>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your
                                            project.</div>
                                        <!--end::Description-->
                                        <!--begin::Illustration-->
                                        <div class="px-4 text-center py-15">
                                            <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                class="mw-100 mh-300px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="pt-10 d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">Submit
                                                <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="next">Continue
                                            <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
    <!--end::Modals-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>