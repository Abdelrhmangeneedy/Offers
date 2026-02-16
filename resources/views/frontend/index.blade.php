@extends('layouts.app')
@section('content')
    <!-- صفحة المستخدم الرئيسية -->
    <div id="userSite">


        <main>
            <div class="container">
                <!-- صفحة الفئات الرئيسية -->
                <div id="home" class="page active">
                    <h2 class="page-title">تصفح العروض حسب الفئة</h2>
                    <p>اختر الفئة التي تريدها لمشاهدة العروض المتاحة</p>

                    <div class="categories">

                        <!-- فئة الطعام -->
                        @foreach ($categories as $category)
                        <a href="{{ url('View-category/'.$category->name) }}" style="text-decoration: none; color: black;">
                            <div class="category-card" data-category="{{ $category->name }}">
                                <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="{{ $category->name }}" class="category-img">
                                <div class="category-content">
                                    <h3>{{ $category->name }}</h3>
                                    <p>{{ $category->description }}</p>
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
