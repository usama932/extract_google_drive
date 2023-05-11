<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <?php
    $setting = \App\Models\Setting::pluck('value','name')->toArray();
    $favicon = isset($setting['favicon']) ? 'uploads/'.$setting['favicon'] : 'backend/assets/media/logos/favicon.ico';
    $auth_logo = isset($setting['auth_logo']) ? 'uploads/'.$setting['auth_logo'] : 'backend/assets/media/logos/custom-3.svg';
    $auth_page_heading = isset($setting['auth_page_heading']) ? $setting['auth_page_heading'] : 'wwww.webexert.com';
    $site_title = isset($setting['site_title']) ? $setting['site_title'] : config('app.name', 'Laravel');
    $auth_image = isset($setting['auth_image']) ? 'uploads/'.$setting['auth_image'] : 'backend/assets/media/auth/bg4.jpg';
    $copy_right = isset($setting['copy_right']) ? $setting['copy_right'] : 'wwww.webexert.com';
    ?>
    <base href="../../../"/>
    <title>{{ $site_title }} - {{$title}}</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="{{asset($favicon)}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset("backend/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("backend/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body { background-image: url('{{asset($auth_image)}}'); } [data-theme="dark"] body { background-image: url('{{asset($auth_image)}}'); }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="#" class="mb-7">
                    <img alt="Logo" width="180" src="{{asset($auth_logo)}}" />
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">{{$auth_page_heading}}</h2>
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10">
            <!--begin::Card-->
            <div class="card rounded-3 w-md-550px">
                <!--begin::Card body-->
                <div class="card-body p-10 p-lg-20">
                    @yield('content')

                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "{{asset('admin/assets/')}}";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset("backend/assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset("backend/assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset("backend/assets/js/custom/authentication/sign-in/general.js")}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
