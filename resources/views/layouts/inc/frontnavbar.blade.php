
<header >
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <img src="{{ asset ('assets/img/line-chart.png') }}" alt="موقع العروض">
                <h1>عروض اليوم</h1>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="nav-link">الرئيسية</a></li>
                    <li><a href="{{ url('/All-Shops') }}" class="nav-link">المتاجر</a></li>
                    <li><a href="{{ url('/All-Offers') }}" class="nav-link">العروض</a></li>
                    <li><a href="{{ url('/Contact') }}">اتصل بنا</a></li>
                </ul>
            </nav>

            <div class="user-actions">
                @guest
                @if (Route::has('login'))
                    <button class="btn btn-primary">
                        <a href="{{ url('/login') }}"></a>
                        اشترك الآن</button>
                @endif
                @else

                <button class="btn btn-primary m-2 p-2">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    تسجيل الخروج <i class="fas fa-sign-out-alt"></i></a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </button>
            @endguest

            </div>
        </div>
    </div>
</header>
