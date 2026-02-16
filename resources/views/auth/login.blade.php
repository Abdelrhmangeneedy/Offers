@extends('layouts.app')
<title>موقع عروض اليوم</title>
@section('content')
<div class="login-page" id="loginPage">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-container">
            <div class="login-logo">
                <i class="fas fa-chart-line"></i>
            </div>

            <div class="login-header">
                <h2>تسجيل الدخول إلى لوحة التحكم</h2>
                <p>أدخل بيانات الدخول للوصول إلى لوحة الإدارة</p>
            </div>

            <div class="login-message" id="loginMessage">
                <i class="fas fa-exclamation-circle"></i>
                <span>اسم المستخدم أو كلمة المرور غير صحيحة</span>
            </div>

            <form id="loginForm">
                <div class="form-group">
                    <label for="">البريد الإلكتروني</label>
                    <input id="email" type="email" placeholder="أدخل البريد الإلكتروني الخاص بك" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-group">
                    <label for="">كلمة المرور</label>
                    <input id="password" type="password" placeholder="أدخل كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-sign-in-alt"></i>
                         تسجيل الدخول
                            ____
                            {{ __('Login') }}
                    </button>
                </div>
            </form>


        </div>
    </form>
</div>
@endsection
