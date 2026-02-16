@extends('layouts.admin')
<title>المحلات</title>
@section('content')
<!-- نافذة إضافة/تعديل محل -->
<div class="data-table-container">
    <div class="stats-cards">
        <a style="color: #333; font-weight: 600; font-size: 1.2rem; text-decoration: none;" href="{{ url('/Categories') }}" class="stat-link">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #f44336, #ff9800);">
                    <i class="fas fa-list-alt"></i>
                </div>
                <div class="stat-content">
                    <p> الفئات</p>
                </div>
            </div>
        </a>
        <a style="color: #333; font-weight: 600; font-size: 1.2rem; text-decoration: none;" href="{{ url('/Shops') }}" class="stat-link">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #2196F3, #03A9F4);">
                    <i class="fas fa-store"></i>
                </div>
                <div class="stat-content">
                    <p> المحلات</p>
                </div>
            </div>
        </a>
        <a style="color: #333; font-weight: 600; font-size: 1.2rem; text-decoration: none;" href="{{ url('/Offers') }}" class="stat-link">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #4CAF50, #8BC34A);">
                    <i class="fas fa-tag"></i>
                </div>
                <div class="stat-content">
                    <p> العروض</p>
                </div>
            </div>
        </a>
    </div>
    <div class="container">
        <div class="modal-header">
            <div class="share-header">
                <h1>اداره المحلات</h1>
                <h3 id="shopModalTitle">إضافة محل جديد</h3>
            </div>
            <button class="btn btn-primary" id="addShopBtn" data-bs-toggle="modal" data-bs-target="#exampleModalShop">إضافة محل جديد</button>
        </div>
        <div>
            <div class="modal fade" id="exampleModalShop" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="card-body py-2 px-3">
                            <form id="shopForm" action="{{ url('insert-shop') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الفئة</label>
                                    <select name="cate_id" id="shopCategory" class="form-control" required>
                                        <option value="">اختر الفئة</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم المحل</label>
                                    <input type="text" name="name" id="shopName" placeholder="أدخل اسم المحل" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الاختصار</label>
                                    <input type="text" name="slug" id="categorySlug" placeholder="أدخل الاختصار" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <input type="checkbox" name="status" id="shopStatus" style="width: 20px; height: 20px; margin-right: 10px;">
                                    <label for="shopStatus" style="font-weight: normal;"> الغاء تفعيل المحل</label>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <input type="checkbox" name="trending" id="shopTrending" style="width: 20px; height: 20px; margin-right: 10px;">
                                    <label for="shopTrending" style="font-weight: normal;">من المحلات المميزة؟</label>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="margin-bottom: 8px; font-weight: 500; color: #333;">وصف المحل</label>
                                    <textarea id="shopDescription" name="description" placeholder="أدخل وصف المحل" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;"></textarea>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة المحل</label>
                                    <input type="file" name="image" id="shopImage" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                </div>
                                <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                    <button type="button" class="btn btn-secondary" id="cancelShopBtn" data-bs-dismiss="modal">إلغاء</button>
                                    <button type="submit" class="btn btn-primary" id="saveShopBtn">حفظ المحل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-4 mb-5">
            <table class="data-table table table-striped">
                <thead>
                    <tr class="table-primary">
                        <th width="80">الصورة</th>
                        <th>الفئة</th>
                        <th>اسم المحل</th>
                        <th>الاختصار</th>
                        <th>الوصف</th>
                        <th width="180">الإجراءات</th>
                    </tr>
                </thead>
                <tbody id="shopsTable">
                    @foreach ($shops as $item)
                        <tr>
                            <td>
                                @if ($item->image == null)
                                <img src="{{ asset ('assets/img/line-chart.png') }}" style="width: 100px">
                                @else
                                <img src="{{ asset('assets/uploads/shops/'.$item->image)}}" style="width: 50px">
                                @endif
                            </td>
                            <td>{{$item->category->name ?? ''}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td><p class="text-sm">{{$item->description}}</p></td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModall{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                                <a href="{{url('delete-shop/'.$item->id)}}" onclick="return confirm('هل انت متأكد من حذف المحل؟')"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$item->status ? 'Panded' : 'Active'}}</td>
                            <td>{{$item->trending ? 'Trending' : 'Not Trending'}}</td>
                            <td>
                                {{$item->offers->count()}} Offers
                            </td>
                            <td>
                                {{$item->offers->where('status', 0)->count()}} Active Offers
                            </td>
                            <td>
                                {{$item->offers->where('trending', 1)->count()}} Trending Offers //
                                {{$item->offers->where('trending', 1)->where('status', 0)->count()}} Active Trending Offers

                            </td>

                            <td>{{ date('d/m h:iA', strtotime($item->created_at)) }}</td>

                            </tr>
                        <!-- نافذة تعديل المحل -->
                        <div class="modal fade" id="exampleModall{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="card-body py-2 px-3">
                                        <form id="shopForm" action="{{ url('update-shop/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div style="margin-bottom: 20px;">
                                                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الفئة</label>
                                                <select name="cate_id" id="shopCategory" class="form-control" required>
                                                    <option value="">اختر الفئة</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $item->cate_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم المحل</label>
                                                <input type="text" name="name" id="shopName" placeholder="أدخل اسم المحل" value="{{ $item->name }}" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الاختصار</label>
                                                <input type="text" name="slug" id="categorySlug" placeholder="أدخل الاختصار" value="{{ $item->slug }}" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <input type="checkbox" name="status" id="shopStatus{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->status == '1' ? 'checked' : '' }}>
                                                <label for="shopStatus{{ $item->id }}" style="font-weight: normal;"> الغاء تفعيل المحل</label>
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <input type="checkbox" name="trending" id="shopTrending{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->trending == '1' ? 'checked' : '' }}>
                                                <label for="shopTrending{{ $item->id }}" style="font-weight: normal;">من المحلات المميزة؟</label>
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 8px; font-weight: 500; color: #333;">وصف المحل</label>
                                                <textarea id="shopDescription" name="description" placeholder="أدخل وصف المحل" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;">{{ $item->description }}</textarea>
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة المحل</label>
                                                <input type="file" name="image" id="shopImage" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                            </div>
                                            <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                                <button type="button" class="btn btn-secondary" id="cancelShopBtn" data-bs-dismiss="modal">إلغاء</button>
                                                <button type="submit" class="btn btn-primary" id="saveShopBtn">حفظ التعديلات</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
