
@extends('layouts.app')
@section('content')
    <!-- صفحة المستخدم الرئيسية -->
    <div id="userSite">


        <main>
            <div class="container">
                <!-- صفحة الفئات الرئيسية -->
                <div id="home" class="page active dark-section">
                    <h2 class="page-title">تصفح العروض حسب المتاجر</h2>
                    <p>اختر المتجر الذي تريده لمشاهدة العروض المتاحة</p>

                    <div class="categories">

                        <!-- فئة الطعام -->
                        @foreach ($shops as $shop)
                        <a href="{{ url('View-shop/'.$shop->name) }}" style="text-decoration: none; color: black;">
                            <div class="category-card" data-category="{{ $shop->name }}">
                                <img src="{{ asset('assets/uploads/shops/'.$shop->image) }}" alt="{{ $shop->name }}" class="category-img">
                                <div class="category-content">
                                    <h3>{{ $shop->name }}</h3>
                                    <p>{{ $shop->slug }}</p>
                                    <p>{{ $shop->description }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </main>


    </div>
@endsection
