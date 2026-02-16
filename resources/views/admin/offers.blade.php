@extends('layouts.admin')
<title>العروض</title>
@section('content')
<!-- نافذة إضافة/تعديل عرض -->
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
                <h1>اداره العروض</h1>
                <h3 id="offerModalTitle">إضافة عرض جديد</h3>
            </div>
            <button class="btn btn-primary" id="addOfferBtn" data-bs-toggle="modal" data-bs-target="#exampleModalOffer">إضافة عرض جديد</button>
        </div>
        <div>
            <div class="modal fade" id="exampleModalOffer" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="card-body py-2 px-3">
                            <form id="offerForm" action="{{ url('insert-offer') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الفئة</label>
                                    <select name="cate_id" id="categorySelect" class="form-control" required>
                                        <option value="">اختر الفئة</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">المحل</label>
                                    <select name="shop_id" id="shopSelect" class="form-control shopSelect" required>
                                        <option value="">اختر المحل</option>
                                        @foreach($shops as $shop)
                                            <option value="{{ $shop->id }}" data-category="{{ $shop->cate_id }}">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم العرض</label>
                                    <input type="text" name="name" id="offerName" placeholder="أدخل اسم العرض" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الاختصار</label>
                                    <input type="text" name="slug" id="offerSlug" placeholder="أدخل الاختصارات" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
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
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">رقم الهاتف</label>
                                    <input type="number" name="phone" id="offerPhone" placeholder="أدخل رقم الهاتف" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">رقم الهاتف الثاني</label>
                                    <input type="number" name="phone2" id="offerPhone2" placeholder="أدخل رقم الهاتف الثاني" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                </div>
                                <div style="margin-bottom: 20px;"></div>
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">سعر العرض</label>
                                    <input type="number" name="offer_price" id="offerPrice" placeholder="سعر العرض" class="form-control">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">السعر الأصلي</label>
                                    <input type="number" name="original_price" id="originalPrice" placeholder="السعر الأصلي" class="form-control">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">مدة العرض</label>
                                    <input type="text" name="period" id="offerPeriod" placeholder="مدة العرض (مثال: 3 أيام)" class="form-control">
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">وصف العرض</label>
                                    <textarea id="offerDescription" name="description" placeholder="أدخل وصف العرض" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;"></textarea>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة العرض</label>
                                    <input type="file" name="image" id="offerImage" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                </div>
                                <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                    <button type="button" class="btn btn-secondary" id="cancelOfferBtn" data-bs-dismiss="modal">إلغاء</button>
                                    <button type="submit" class="btn btn-primary" id="saveOfferBtn">حفظ العرض</button>
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
                        <th>الفئه</th>
                        <th>المتجر</th>
                        <th>اسم العرض</th>
                        <th>الاختصار</th>
                        <th>المدة</th>
                        <th width="180">الإجراءات</th>
                    </tr>
                </thead>
                <tbody id="offersTable">
                    @foreach ($offers as $item)
                        <tr>
                            <td>
                                @if ($item->image == null)
                                <img src="{{ asset ('assets/img/line-chart.png') }}" style="width: 100px">
                                @else
                                <img src="{{ asset('assets/uploads/offers/'.$item->image)}}" style="width: 50px">
                                @endif
                            </td>
                            <td>{{$item->category->name ?? ''}}</td>
                            <td>{{$item->shop->name ?? ''}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->period}}</td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModall{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                                <a href="{{url('delete-shop/'.$item->id)}}" onclick="return confirm('هل انت متأكد من حذف المحل؟')"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$item->status ? 'Panded' : 'Active'}}</td>
                            <td>{{$item->trending ? 'Trending' : 'Not Trending'}}</td>
                            <td>
                                {{$item->phone}}
                                <br> {{$item->phone2}}
                            </td>
                            <td><p class="text-sm">{{$item->description}}</p></td>
                            <td>
                                {{$item->original_price}} جنيه
                                <br> {{$item->offer_price}} جنيه
                            </td>

                            <td>{{ date('d/m h:iA', strtotime($item->created_at)) }}</td>
                        </tr>
                            <!-- نافذة تعديل المحل -->
                            <div class="modal fade" id="exampleModall{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="card-body py-2 px-3">
                                            <form action="{{ url('update-offer/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الفئة</label>
                                                    <select name="cate_id" id="categorySelect" class="form-control" required>
                                                        <option value="">اختر الفئة</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" {{ $item->cate_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">المحل</label>
                                                    <select name="shop_id" id="shopSelect" class="form-control" required>
                                                        <option value="">اختر المحل</option>
                                                        @foreach($shops as $shop)
                                                            <option value="{{ $shop->id }}" {{ $item->shop_id == $shop->id ? 'selected' : '' }}>{{ $shop->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">اسم العرض</label>
                                                    <input type="text" name="name" value="{{ $item->name }}" placeholder="أدخل اسم العرض" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">الاختصار</label>
                                                    <input type="text" name="slug" value="{{ $item->slug }}" placeholder="أدخل الاختصارات" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" required>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <input type="checkbox" name="status" id="shopStatus{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->status ? 'checked' : '' }}>
                                                    <label for="shopStatus{{ $item->id }}" style="font-weight: normal;"> الغاء تفعيل المحل</label>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <input type="checkbox" name="trending" id="shopTrending{{ $item->id }}" style="width: 20px; height: 20px; margin-right: 10px;" {{ $item->trending ? 'checked' : '' }}>
                                                    <label for="shopTrending{{ $item->id }}" style="font-weight: normal;">من المحلات المميزة؟</label>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">رقم الهاتف</label>
                                                    <input type="number" name="phone" value="{{ $item->phone }}" placeholder="أدخل رقم الهاتف" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">رقم الهاتف الثاني</label>
                                                    <input type="number" name="phone2" value="{{ $item->phone2 }}" placeholder="أدخل رقم الهاتف الثاني" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">سعر العرض</label>
                                                    <input type="number" name="offer_price" value="{{ $item->offer_price }}" placeholder="سعر العرض" class="form-control">
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">السعر الأصلي</label>
                                                    <input type="number" name="original_price" value="{{ $item->original_price }}" placeholder="السعر الأصلي" class="form-control">
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">مدة العرض</label>
                                                    <input type="text" name="period" value="{{ $item->period }}" placeholder="مدة العرض (مثال: 3 أيام)" class="form-control">
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">وصف العرض</label>
                                                    <textarea name="description" placeholder="أدخل وصف العرض" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; min-height: 100px;">{{ $item->description }}</textarea>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #333;">صورة العرض</label>
                                                    <input type="file" name="image" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                                                </div>
                                                <!-- أضف باقي الحقول بنفس الطريقة -->
                                                <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px;">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                                    <button type="submit" class="btn btn-primary">تحديث العرض</button>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        // مبدئيًا: اقفل اختيار المحل + زر الإضافة لحد ما يختار Category
        // $("#addMoreVisit").prop("disabled", true);
        $(".shopSelect").prop("disabled", true);

        // دالة فلترة المحلات حسب الـ Category
        function filterShopSelects(categoryId, $context) {
            var $targets = $context ? $context.find('.shopSelect') : $('.shopSelect');
            $targets.each(function(){
                var $sel = $(this);
                $sel.find('option').each(function(){
                    var $opt = $(this);
                    if ($opt.val() === "" || $opt.data('category') == categoryId) {
                        $opt.show();
                    } else {
                        // اخفي الاختيارات من فئات أخرى ولو كانت مختارة فضّيها
                        if ($sel.val() == $opt.val()) { $sel.val(""); }
                        $opt.hide();
                    }
                });
            });
        }

        // عند تغيير الـ Category
        $("#categorySelect").change(function() {
            var selectedCategory = $(this).val();

            if (!selectedCategory) {
                $(".shopSelect").val("").prop("disabled", true);
                $("#addMoreVisit").prop("disabled", true);
                return;
            }

            $(".shopSelect").prop("disabled", false);
            $("#addMoreVisit").prop("disabled", false);
            filterShopSelects(selectedCategory); // فلترة الموجود
        });
    });
</script>
