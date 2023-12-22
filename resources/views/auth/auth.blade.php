@extends('layout.app')
@section('body_class','page-template-default page page-id-8 wp-custom-logo rtcl-account rtcl-page rtcl-no-js ehf-header ehf-footer ehf-template-classima ehf-stylesheet-classima header-style-2 footer-style-1 banner-enabled has-sidebar left-sidebar elementor-default elementor-kit-2161 elementor-page elementor-page-8')
@section('content')

<div id="primary" class="content-area classima-myaccount">
    <div class="container">
        <div id="post-8" class="post-8 page type-page status-publish">

            <div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2e91ada3 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
                    data-id="2e91ada3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78c3e29f"
                            data-id="78c3e29f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-50c3004f elementor-widget elementor-widget-shortcode"
                                    data-id="50c3004f" data-element_type="widget"
                                    data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="rtcl">
                                                <div id="rtcl-user-login-wrapper"
                                                    class="have-registration-form">


                                                    <div class="rtcl-login-form-wrap">
                                                        <h2>Login</h2>
                                                        <form id="rtcl-login-form" action="{{route('login')}}" class="form-horizontal"
                                                            method="post">
                                                            @csrf
                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-user-login"
                                                                    class="rtcl-field-label">
                                                                    Phone <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <input type="tel" required name="phone"
                                                                    autocomplete="phone" value=""
                                                                    id="rtcl-user-login"
                                                                    class="rtcl-form-control" >
                                                            </div>

                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-user-pass"
                                                                    class="rtcl-field-label">
                                                                    Password <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <input type="password" name="password"
                                                                    id="rtcl-user-pass"
                                                                    autocomplete="current-password"
                                                                    class="rtcl-form-control" required>
                                                            </div>


                                                            <div class="rtcl-form-group">
                                                                <div id="rtcl-login-g-recaptcha"></div>
                                                                <div id="rtcl-login-g-recaptcha-message"></div>
                                                            </div>

                                                            <div
                                                                class="rtcl-form-group rtcl-login-form-submit-wrap">

                                                                <button type="submit" name="rtcl-login"
                                                                    class="btn" value="login">
                                                                    Login </button>
                                                                <div class="form-check">
                                                                    <input type="checkbox" name="rememberme"
                                                                        id="rtcl-rememberme"  value="forever">
                                                                    <label class="form-check-label"
                                                                        for="rtcl-rememberme">
                                                                        Remember Me </label>
                                                                </div>

                                                                @if (Session::has('error'))
                                                                    <span  style="color: red">Invaild Email and Password</span>
                                                                @endif
                                                            </div>
                                                            <div
                                                                class="rtcl-form-group rtcl-form-group-no-margin-bottom">
                                                                <p class="rtcl-forgot-password">
                                                                    <a href="./lost-password/index.html">Forgot
                                                                        your password?</a>
                                                                </p>
                                                            </div>
                                                            {{-- <input type="hidden" id="rtcl-login-nonce"
                                                                name="rtcl-login-nonce"
                                                                value="abb556a2cc"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/alfuraij/my-account/?simply_static_page=842"><input
                                                                type="hidden" name="redirect_to"
                                                                value="https://codedhosting.com/alfuraij/my-account/?simply_static_page=842"> --}}
                                                        </form>
                                                    </div>
                                                    <div class="rtcl-registration-form-wrap">

                                                        <h2>Register</h2>

                                                        <form id="rtcl-register-form" action="{{route('register')}}" class="form-horizontal"
                                                            method="post">
                                                            @csrf
                                                            <div class="rtcl-form-group phone-row">
                                                                <label for="rtcl-reg-phone"
                                                                    class="rtcl-field-label phone-label">
                                                                    Phone Number </label>
                                                                <input type="text" name="phone" value="{{old('phone')}}"
                                                                    id="rtcl-reg-phone"
                                                                    class="rtcl-form-control">

                                                                @error('phone')
                                                                    <span style="color: red">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-reg-username"
                                                                    class="rtcl-field-label">
                                                                    Name <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <input type="text" name="name" value="{{old('name')}}"
                                                                    autocomplete="name"
                                                                    id="rtcl-reg-username"
                                                                    class="rtcl-form-control" required>
                                                                <span class="help-block">Username cannot be
                                                                    changed.</span>

                                                                    
                                                                @error('name')
                                                                    <span style="color: red">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-reg-email"
                                                                    class="rtcl-field-label">
                                                                    Email address <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <input type="email" name="email" value="{{old('email')}}"
                                                                    autocomplete="email" id="rtcl-reg-email"
                                                                    class="rtcl-form-control" required>

                                                                
                                                                    @error('email')
                                                                        <span style="color: red">{{$message}}</span>
                                                                    @enderror
                                                            </div>

                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-reg-password"
                                                                    class="rtcl-field-label">
                                                                    Password <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <input type="password" name="password"
                                                                    id="rtcl-reg-password"
                                                                    autocomplete="new-password"
                                                                    class="rtcl-form-control rtcl-password"
                                                                    required>

                                                                    
                                                                @error('password')
                                                                    <span style="color: red">{{$message}}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="rtcl-form-group">
                                                                <label for="rtcl-reg-confirm-password"
                                                                    class="rtcl-field-label">
                                                                    Confirm Password <strong
                                                                        class="rtcl-required">*</strong>
                                                                </label>
                                                                <div class="confirm-password-wrap">
                                                                    <input type="password" name="password_confirmation"
                                                                        id="rtcl-reg-confirm-password"
                                                                        class="rtcl-form-control"
                                                                        autocomplete="off"
                                                                        data-rule-equalto="#rtcl-reg-password"
                                                                        data-msg-equalto="Password does not match."
                                                                        required>
                                                                    <span class="rtcl-checkmark"></span>
                                                                </div>
                                                            </div>


                                                            <div class="form-group rtcl-privacy-policy-wrap">
                                                                <div class="form-check">
                                                                    <input id="rtcl-privacy-policy"
                                                                        name="rtcl_privacy_policy"
                                                                        type="checkbox" class="form-check-input"
                                                                        required>
                                                                    <label class="form-check-label"
                                                                        for="rtcl-privacy-policy">
                                                                        <p>Your personal data will be used to
                                                                            support your experience throughout
                                                                            this website, to manage access to
                                                                            your account, and for other purposes
                                                                            described in our <a
                                                                                href="./../faq/index.html"
                                                                                class="rtcl-privacy-policy-link"
                                                                                target="_blank">privacy
                                                                                policy</a>.</p>
                                                                    </label>
                                                                    <div class="with-errors help-block"
                                                                        data-error="This field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="rtcl-registration-terms-conditions">
                                                                <div class="rtcl-form-group">
                                                                    <div class="form-check">
                                                                        <input  type="checkbox"
                                                                            class="form-check-input"
                                                                            name="rtcl_terms_conditions"
                                                                            id="rtcl-terms-conditions" required>
                                                                        <label class="form-check-label"
                                                                            for="rtcl-terms-conditions">
                                                                            I have read and agree to the website
                                                                            <a href="./index.html"
                                                                                class="rtcl-terms-and-conditions-link"
                                                                                target="_blank">terms and
                                                                                conditions</a>. </label>
                                                                        <div class="with-errors help-block"
                                                                            data-error="This field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="rtcl-form-group rtcl-form-group-no-margin-bottom">
                                                                <div id="rtcl-registration-g-recaptcha"></div>
                                                                <div id="rtcl-registration-g-recaptcha-message">
                                                                </div>
                                                                <input type="submit" name="rtcl-register"
                                                                    class="btn" value="Register">
                                                            </div>
                                                            {{-- <input type="hidden" id="rtcl-register-nonce"
                                                                name="rtcl-register-nonce"
                                                                value="4ae1cffc85"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/alfuraij/my-account/?simply_static_page=842"><input
                                                                type="hidden" name="redirect_to"
                                                                value="https://codedhosting.com/alfuraij/my-account/?simply_static_page=842">
                                                        </form> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>


@endsection