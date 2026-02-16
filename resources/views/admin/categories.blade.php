@extends('layouts.admin')
<title>الفئات</title>
@section('content')
 <!-- نافذة إضافة/تعديل فئة -->
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
                        <h1>اداره الفئات</h1>
                        <h3 id="categoryModalTitle">إضافة فئة جديدة</h3>
                    </div>
                <button class="btn btn-primary" id="addCategoryBtn" data-bs-toggle="modal" data-bs-target="#exampleModalCategory">إضافة فئة جديدة</button>
            </div>
            <div>
                <div class="modal fade" id="exampleModalCategory" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="card-body py-2 px-3">
                                <form id="categoryForm" action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div style="margin-bottom: 20px;">
                                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم الفئة</label>
                                        <input type="text" name="name" id="categoryName" placeholder="أدخل اسم الفئة" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                    </div>

                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" name="status" id="categoryStatus" style="width: 20px; height: 20px; margin-right: 10px;">
                                        <label for="categoryStatus" style="font-weight: normal;"> الغاء تفعيل الفئة</label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" name="trending" id="categoryTrending" style="width: 20px; height: 20px; margin-right: 10px;">
                                        <label for="categoryTrending" style="font-weight: normal;">من العروض المطلوبه ؟؟ </label>
                                    </div>

                                    <div style="margin-bottom: 20px;">
                                        <label style="margin-bottom: 8px; font-weight: 500; color: #333;">وصف الفئة</label>
                                        <textarea id="categoryDescription" name="description" placeholder="أدخل وصف الفئة" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;"></textarea>
                                    </div>

                                    <div style="margin-bottom: 20px;">
                                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة الفئة</label>
                                        <input type="file" name="image" id="categoryImage" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                    </div>

                                    <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                        <button type="button" class="btn btn-secondary" id="cancelCategoryBtn" data-bs-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary" id="saveCategoryBtn">حفظ الفئة</button>
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
                        <tr>
                            <th width="80">الصورة</th>
                            <th>اسم الفئة</th>
                            <th>الوصف</th>
                            <th width="180">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="categoriesTable">
                        @foreach ($categories as $item)
                            <tr>
                                <td>
                                    @if ($item->image == null)
                                    <img src="{{ asset ('assets/img/line-chart.png') }}" style="width: 100px">
                                    @else
                                    <img src="{{ asset('assets/uploads/category/'.$item->image)}}" data-bs-toggle="modal" data-bs-target="#exampleModalImage{{ $item->id }}" style="width: 50px">
                                    @endif
                                    <div class="modal fade" style="background-color: unset;" id="exampleModalImage{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="card-body">
                                                    <img src="{{ asset('assets/uploads/category/'.$item->image)}}" class="img-fluid" alt="Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$item->name}}</td>
                                <td><p class="text-sm">{{$item->description}}</p></td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModall{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                                    <a href="{{url('delete-category/'.$item->id)}}" onclick="return confirm('هل انت متأكد من حذف الفئة؟')"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$item->status ? 'Panded' : 'Active'}}</td>
                                <td>{{$item->trending ? 'Trending' : 'Not Trending'}}</td>
                                <td>
                                    {{$item->shops->count()}} Shops /
                                    {{$item->offers->count()}} Offers
                                    {{$item->offers->where('status', 1)->count()}} Active Offers /
                                    {{$item->offers->where('trending', 1)->count()}} Trending Offers

                                </td>

                                <td>{{ date('d/m h:iA', strtotime($item->created_at)) }}</td>

                            </tr>
                            <div class="modal fade" id="exampleModall{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabell{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="card-body py-5">
                                            <form action="{{ url('update-category/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row m-2">
                                                    <div class="col-md-12 mb-3">
                                                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم الفئة</label>
                                                        <input type="text" name="name" value="{{$item->name}}" placeholder="أدخل اسم الفئة" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <input type="checkbox" name="status" id="categoryStatus{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->status ? 'checked' : '' }}>
                                                        <label for="categoryStatus{{ $item->id }}" style="font-weight: normal;"> الغاء تفعيل الفئة</label>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="checkbox" name="trending" id="categoryTrending{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->trending ? 'checked' : '' }}>
                                                        <label for="categoryTrending{{ $item->id }}" style="font-weight: normal;">من العروض المطلوبه ؟؟</label>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label style="margin-bottom: 8px; font-weight: 500; color: #333;">وصف الفئة</label>
                                                        <textarea name="description" placeholder="أدخل وصف الفئة" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;">{{$item->description}}</textarea>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة الفئة</label>
                                                        <input type="file" name="image" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                                        @if ($item->image)
                                                        <img src="{{ asset('assets/uploads/category/'.$item->image)}}" style="width: 100px; margin-top: 10px;">
                                                        @endif
                                                    </div>
                                                    <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                                        <button type="button" class="btn btn-secondary" id="cancelCategoryBtn" data-bs-dismiss="modal">إلغاء</button>
                                                        <button type="submit" class="btn btn-primary" id="saveCategoryBtn">حفظ الفئة</button>
                                                    </div>
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

@endsection
