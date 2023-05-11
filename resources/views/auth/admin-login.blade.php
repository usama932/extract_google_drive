@extends('layouts.auth')

@section('content')
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('admin.login') }}">

        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">Your Dashboard</div>
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
        <!--begin::Login options-->

        <!--end::Login options-->
        <!--begin::Separator-->

        <!--end::Separator-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input id="email" placeholder="Email" type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input id="password" placeholder="Password"  type="password" class="form-control bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3 mt-5">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
{{--        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">--}}
{{--            <div></div>--}}
{{--            <!--begin::Link-->--}}
{{--            <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password ?</a>--}}
{{--            <!--end::Link-->--}}
{{--        </div>--}}
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">Sign In</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
        </div>
        <!--end::Submit button-->
        <!--begin::Sign up-->
    {{--                        <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?--}}
    {{--                            <a href="../../demo1/dist/authentication/layouts/creative/sign-up.html" class="link-primary">Sign up</a></div>--}}
    <!--end::Sign up-->
    </form>

@endsection
