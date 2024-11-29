<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="px-6 app-sidebar-logo" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        @include('layouts.partial.logo')
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    @include('layouts.partial.sidebar_menu')
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    @include('layouts.partial.sidebar_footer')
    <!--end::Footer-->
</div>