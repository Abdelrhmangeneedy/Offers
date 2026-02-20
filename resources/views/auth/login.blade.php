
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> تسجيل الدخول إلى موقع عروض اليوم</title>
    <link rel="icon" type="image/png" href="{{ asset ('assets/img/line-chart.png') }}">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>

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
                                        {{ __('تذكير الدخول') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-actions">
                    <button type="submit" style="width: 100%; background-color: #f44336; color: white; border: none; padding: 10px; font-size: 16px; cursor: pointer;">
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
