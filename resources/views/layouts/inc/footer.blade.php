<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>عن الموقع</h3>
                <p>موقع عروض اليوم يقدم لك أحدث العروض والخصومات من المطاعم والمحلات في منطقتك. احصل على أفضل الصفقات ووفر أموالك!</p>
            </div>

            <div class="footer-section">
                <h3>الفئات</h3>
                <ul>
                    @if(isset($categories) && $categories->count())
                        @foreach($categories as $category)
                            <li><a href="{{ url('View-category/'.$category->name) }}" data-category="{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#">لا توجد فئات</a></li>
                    @endif
                </ul>
            </div>

            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="{{ url('/') }}" class="nav-link">الرئيسية</a></li>
                    <li><a href="{{ url('/All-Shops') }}" class="nav-link">المتاجر</a></li>
                    <li><a href="{{ url('/All-Offers') }}" class="nav-link">العروض</a></li>
                    <li><a href="{{ url('/Contact') }}">اتصل بنا</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>جميع الحقوق محفوظة &copy; 2023 موقع عروض اليوم</p>
        </div>
    </div>
</footer>
