@extends('layouts/blankLayout')

@section('title', 'Masuk')

@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('content')
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6 mx-4">

                <!-- Login -->
                <div class="card p-7">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="{{ url('/') }}" class="app-brand-link gap-3">
                            <span class="app-brand-logo demo">@include('_partials.macros', ['height' => 20, 'withbg' => 'fill: #fff;'])</span>
                            <span
                                class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <div class="card-body mt-1">
                        <h4 class="mb-1">Selamat datang di <span
                                class="fw-semibold text-purple-700 text-lg">{{ config('variables.templateName') }}</span>!
                            👋🏻</h4>
                        <p class="mb-5">Silahkan masuk untuk melanjutkan</p>

                        <form class="mb-5" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating form-floating-outline mb-5">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Masukkan Email" value="{{ old('email') }}" autofocus>
                                <label for="email">Email</label>
                            </div>
                            <div class="mb-5">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control" name="password"

                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <label for="password">Kata Sandi</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="ri-eye-off-line ri-20px"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="{{ url('auth/forgot-password-basic') }}" class="float-end mb-1">
                                    <span>Lupa Kata sandi?</span>
                                </a>
                            </div>
                            <div class="mb-5">
                                <button class="btn btn-primary d-grid w-100" type="submit">login</button>
                            </div>
                        </form>

                        <p class="text-center mb-5">
                            <span>Belum punya akun?</span>
                            <a href="{{ url('auth/register-basic') }}">
                                <span>Buat Akun</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Login -->
                <img src="{{ asset('assets/img/illustrations/tree-3.png') }}" alt="auth-tree"
                    class="authentication-image-object-left d-none d-lg-block">
                <img src="{{ asset('assets/img/illustrations/auth-basic-mask-light.png') }}"
                    class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
                <img src="{{ asset('assets/img/illustrations/tree.png') }}" alt="auth-tree"
                    class="authentication-image-object-right d-none d-lg-block">
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        let emailValidation = {{ Js::from($errors->get('email')) }}
        let passwordValidation = {{ Js::from($errors->get('password')) }}
        emailValidation.forEach(msg => {
            toastr.error(msg)
        });
        passwordValidation.forEach(msg => {
            toastr.error(msg)
        });
        // toastr.warning('warning messages');
    </script>
@endpush
