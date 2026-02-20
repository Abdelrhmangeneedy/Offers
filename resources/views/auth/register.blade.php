
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>تسجيل دخول جديد إلى موقع عروض اليوم</title>
    <link rel="icon" type="image/png" href="{{ asset ('assets/img/line-chart.png') }}">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>
@section('content')
<div class="login-page" id="loginPage">
    <form method="POST" action="{{ route('register') }}">
        @csrf
         <div class="login-container">
            <div class="login-logo">
                <i class="fas fa-chart-line"></i>
            </div>

            <div class="login-header">
                <h2>تسجيل الدخول</h2>
            </div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="">
                        اسم المستخدم
                        _____
                        User Name
                    </label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">
                        البريد الإلكتروني
                        ____
                    {{ __('Email Address') }}
                    </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="">
                        كلمة المرور
                        ____
                        {{ __('Password') }}
                    </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                    <div class="form-group">
                    <label for="">
                        أعاده كتابه كلمة المرور
                        ____
                    {{ __('Confirm Password') }}
                    </label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="form-actions">
                        <button type="submit" style="width: 100%; background-color: #f44336; color: white; border: none; padding: 10px; font-size: 16px; cursor: pointer;">
                             <i class="fas fa-sign-in-alt"></i>
                             تسجيل الدخول
                             ____
                             {{ __('Register') }}
                        </button>
                    </div>
                </div>


            </form>


    </form>
</div>
