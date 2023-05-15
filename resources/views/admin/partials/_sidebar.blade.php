<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="#">
            <img alt="Logo" src="{{asset($logo)}}" class="h-25px app-sidebar-logo-default"/>
            {{--            <img alt="Logo" src="{{asset("backend/assets/media/logos/default-small.svg")}}" class="h-20px app-sidebar-logo-minimize"/>--}}
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                          fill="currentColor"/>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"/>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
             data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
             data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                 data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <a href="{{route("admin.dashboard")}}"
                    class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'dashboard') here @endif">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                          fill="currentColor"/>
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                          fill="currentColor"/>
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                          fill="currentColor"/>
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                          fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboards</span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->

                    <!--end:Menu sub-->
                </a>
                <!--end:Menu item-->
{{--                <!--begin:Menu item-->--}}
{{--                <div class="menu-item pt-5">--}}
{{--                    <!--begin:Menu content-->--}}
{{--                    <div class="menu-content">--}}
{{--                        <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>--}}
{{--                    </div>--}}
{{--                    <!--end:Menu content-->--}}
{{--                </div>--}}
{{--                <!--end:Menu item-->--}}
{{--                <!--begin:Menu item-->--}}
{{--                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                    <!--begin:Menu link-->--}}
{{--                    <span class="menu-link">--}}
{{--                        <span class="menu-icon">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->--}}
{{--                            <span class="svg-icon svg-icon-2">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"--}}
{{--                                        fill="currentColor"/>--}}
{{--                                    <path opacity="0.3"--}}
{{--                                          d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"--}}
{{--                                          fill="currentColor"/>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                        </span>--}}
{{--                        <span class="menu-title">User Profile</span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </span>--}}
{{--                    <!--end:Menu link-->--}}
{{--                    <!--begin:Menu sub-->--}}
{{--                    <div class="menu-sub menu-sub-accordion">--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/overview.html">--}}
{{--													<span class="menu-bullet">--}}
{{--														<span class="bullet bullet-dot"></span>--}}
{{--													</span>--}}
{{--                                <span class="menu-title">Overview</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">--}}
{{--                                <span class="menu-bullet">--}}
{{--                                    <span class="bullet bullet-dot"></span>--}}
{{--                                </span>--}}
{{--                                <span class="menu-title">Projects</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">--}}
{{--                                <span class="menu-bullet">--}}
{{--                                    <span class="bullet bullet-dot"></span>--}}
{{--                                </span>--}}
{{--                                <span class="menu-title">Campaigns</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">--}}
{{--                                <span class="menu-bullet">--}}
{{--                                    <span class="bullet bullet-dot"></span>--}}
{{--                                </span>--}}
{{--                                <span class="menu-title">Documents</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">--}}
{{--                                <span class="menu-bullet">--}}
{{--                                    <span class="bullet bullet-dot"></span>--}}
{{--                                </span>--}}
{{--                                <span class="menu-title">Followers</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}
{{--                        <!--begin:Menu item-->--}}
{{--                        <div class="menu-item">--}}
{{--                            <!--begin:Menu link-->--}}
{{--                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">--}}
{{--                                <span class="menu-bullet">--}}
{{--                                    <span class="bullet bullet-dot"></span>--}}
{{--                                </span>--}}
{{--                                <span class="menu-title">Activity</span>--}}
{{--                            </a>--}}
{{--                            <!--end:Menu link-->--}}
{{--                        </div>--}}
{{--                        <!--end:Menu item-->--}}



{{--                    </div>--}}
{{--                    <!--end:Menu sub-->--}}
{{--                </div>--}}
{{--                <!--end:Menu item-->--}}

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Manage</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <a href="{{route("users.index")}}"
                   class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'users') here @endif">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Users</span>
                        </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->

                    <!--end:Menu sub-->
                </a>
                <a href="{{route("google.sheet")}}"
                class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'users') here @endif">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                         <span class="menu-icon">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Devices/Camera.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M5,7 L19,7 C20.1045695,7 21,7.8954305 21,9 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,9 C3,7.8954305 3.8954305,7 5,7 Z M12,17 C14.209139,17 16,15.209139 16,13 C16,10.790861 14.209139,9 12,9 C9.790861,9 8,10.790861 8,13 C8,15.209139 9.790861,17 12,17 Z" fill="#ffff"/>
                                    <rect fill="#000000" opacity="" x="9" y="4" width="6" height="2" rx="1"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="13" r="2"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                         </span>
                         <span class="menu-title">Vans</span>
                     </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->

                 <!--end:Menu sub-->
             </a>
                <a href="{{route("google.sheet")}}"
                   class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'users') here @endif">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Sheets Data</span>
                        </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->

                    <!--end:Menu sub-->
                </a>

                <a href="{{route("google.sheet2")}}"
                class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'users') here @endif">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
                                     <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>
                         <span class="menu-title">Sheets 2 Data</span>
                     </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->

                 <!--end:Menu sub-->
             </a>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Settings</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <a href="{{route("setting.index")}}"
                   class="menu-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'setting') here @endif">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M11.8 5.2L17.7 8.6V15.4L11.8 18.8L5.90001 15.4V8.6L11.8 5.2ZM11.8 2C11.5 2 11.2 2.1 11 2.2L3.8 6.4C3.3 6.7 3 7.3 3 7.9V16.2C3 16.8 3.3 17.4 3.8 17.7L11 21.9C11.3 22 11.5 22.1 11.8 22.1C12.1 22.1 12.4 22 12.6 21.9L19.8 17.7C20.3 17.4 20.6 16.8 20.6 16.2V7.9C20.6 7.3 20.3 6.7 19.8 6.4L12.6 2.2C12.4 2.1 12.1 2 11.8 2Z" fill="currentColor"></path>
                                        <path d="M11.8 8.69995L8.90001 10.3V13.7L11.8 15.3L14.7 13.7V10.3L11.8 8.69995Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Setting</span>
                        </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->

                    <!--end:Menu sub-->
                </a>
                <!--end:Menu item-->

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->

    <!--end::Footer-->
</div>
