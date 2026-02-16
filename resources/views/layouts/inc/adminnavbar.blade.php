<header class="admin-header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <a href="{{ url('/Dashboard') }}" class="logo-text" style="color: #333; font-weight: 600; font-size: 1.2rem; text-decoration: none;">
                        <div class="logo-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h1>لوحة تحكم موقع العروض</h1>
                        </a>
                    </div>

                    <div class="user-info">
                        <div>
                            <div style="font-weight: 500;" id="userName">المدير</div>
                            <div style="font-size: 0.9rem; color: #666;">{{ Auth::user()->name }}</div>
                        </div>
                        <button class="btn btn-secondary" id="logoutBtn">
                            <a class="dropdown-item" style="    color: #ffff;margin: auto;padding: 5px;" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt" style="margin: auto;"></i> خروج
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </button>
                    </div>
                </div>
            </div>
        </header>
