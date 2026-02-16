@extends('layouts.admin')

@section('content')



<main class="admin-content">
                <!-- لوحة التحكم الرئيسية -->
                <div id="dashboard" class="admin-section active">
                    <div class="section-header">
                        <div>
                            <h2>لوحة التحكم الرئيسية</h2>
                            <p>مرحباً بك في لوحة تحكم موقع العروض</p>
                        </div>
                        <div id="dashboardAlert" style="display: none;"></div>
                    </div>

                    <div class="stats-cards">

                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #f44336, #ff9800);">
                                <a style="text-decoration: none; color: white;" href="{{ url('/Categories') }}" class="stat-link">
                                <i class="fas fa-list-alt"></i>
                            </div>
                            <div class="stat-content">
                                <h3 id="categoriesCount">{{ $countcat }}</h3>
                                <p>عدد الفئات</p>
                            </a>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #2196F3, #03A9F4);">
                                <a style="text-decoration: none; color: white;" href="{{ url('/Shops') }}" class="stat-link">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $countshop }}</h3>
                                <p>عدد المحلات</p>
                            </a>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #00b09b, #96c93d);">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $monthshop }}</h3>
                                <p>محلات هذا الشهر</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #ff6e7f, #bfe9ff);">
                                <i class="fas fa-calendar-minus"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $lmonthshop }}</h3>
                                <p>محلات الشهر الماضي</p>
                            </div>
                        </div>


                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #4CAF50, #8BC34A);">
                                <a style="text-decoration: none; color: white;" href="{{ url('/Offers') }}" class="stat-link">
                                <i class="fas fa-tag"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $countoffer }}</h3>
                                <p>عدد العروض</p>
                                </a>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #f7971e, #ffd200);">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $countactiveoffer }}</h3>
                                <p>عروض نشطه</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #c471f5, #fa71cd);">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $counttrendingoffer }}</h3>
                                <p>عروض مميزة</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #f7971e, #ffd200);">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $monthoffer }}</h3>
                                <p>عروض هذا الشهر</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #c471f5, #fa71cd);">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $lmonthoffer }}</h3>
                                <p>عروض الشهر الماضي</p>
                            </div>
                        </div>


                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #607D8B, #03A9F4);">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $visitorCount }}</h3>
                                <p>عدد الزوار </p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #9C27B0, #E91E63);">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $countuser }}</h3>
                                <p>عدد المستخدمين</p>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #43cea2, #185a9d);">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $monthuser }}</h3>
                                <p>مستخدمين هذا الشهر</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #ff512f, #dd2476);">
                                <i class="fas fa-user-minus"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ $contactClicks ?? 0 }}</h3>
                                <p>عدد مستخدمين نقرات الاتصال</p>
                            </div>
                        </div>

                    </div>

                    <div style="background: white; border-radius: 10px; padding: 25px; box-shadow: var(--shadow);">
                        <h3 style="margin-bottom: 20px; color: var(--dark-color);">تعليمات سريعة</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                    <i class="fas fa-list-alt"></i> إدارة الفئات
                                </h4>
                                <p style="color: #666; line-height: 1.6;">يمكنك إضافة فئات جديدة للعروض مثل "البقالة"، "الطعام"، "المشروبات" وغيرها. كل فئة تحتاج إلى اسم ووصف وصورة.</p>
                            </div>

                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                    <i class="fas fa-store"></i> إدارة المحلات
                                </h4>
                                <p style="color: #666; line-height: 1.6;">أضف المحلات والمطاعم مع بياناتها الكاملة بما في ذلك الشعار، رقم الهاتف، التصنيف والوصف.</p>
                            </div>

                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                    <i class="fas fa-tag"></i> إدارة المنتجات
                                </h4>
                                <p style="color: #666; line-height: 1.6;">أضف المنتجات والعروض مع تحديد المحل التابع له، الفئة، السعر، مدة العرض والوصف.</p>
                            </div>

                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                    <i class="fas fa-upload"></i> رفع الصور
                                </h4>
                                <p style="color: #666; line-height: 1.6;">يمكنك رفع الصور للفئات والمحلات والمنتجات عن طريق السحب والإفلات أو النقر لاختيار الملفات.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- إدارة الفئات -->
                <div id="categories" class="admin-section">
                    <div class="section-header">
                        <div>
                            <h2>إدارة الفئات</h2>
                            <p>أضف، عدل أو احذف فئات العروض</p>
                        </div>
                        <button class="btn btn-success" id="addCategoryBtn">
                            <i class="fas fa-plus"></i> إضافة فئة جديدة
                        </button>
                    </div>

                    <div id="categoriesAlert" style="display: none;"></div>

                    <div class="data-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th width="80">الصورة</th>
                                    <th>اسم الفئة</th>
                                    <th>الوصف</th>
                                    <th width="180">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody id="categoriesTable">
                                <!-- سيتم إضافة الفئات ديناميكياً -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- إدارة المحلات -->
                <div id="stores" class="admin-section">
                    <div class="section-header">
                        <div>
                            <h2>إدارة المحلات</h2>
                            <p>أضف، عدل أو احذف المحلات والمطاعم</p>
                        </div>
                        <button class="btn btn-success" id="addStoreBtn">
                            <i class="fas fa-plus"></i> إضافة محل جديد
                        </button>
                    </div>

                    <div id="storesAlert" style="display: none;"></div>

                    <div class="data-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th width="80">الشعار</th>
                                    <th>اسم المحل</th>
                                    <th>رقم الهاتف</th>
                                    <th>التصنيف</th>
                                    <th width="180">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody id="storesTable">
                                <!-- سيتم إضافة المحلات ديناميكياً -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- إدارة المنتجات -->
                <div id="products" class="admin-section">
                    <div class="section-header">
                        <div>
                            <h2>إدارة المنتجات</h2>
                            <p>أضف، عدل أو احذف المنتجات والعروض</p>
                        </div>
                        <button class="btn btn-success" id="addProductBtn">
                            <i class="fas fa-plus"></i> إضافة منتج جديد
                        </button>
                    </div>

                    <div id="productsAlert" style="display: none;"></div>

                    <div class="data-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th width="80">الصورة</th>
                                    <th>اسم المنتج</th>
                                    <th>المحل</th>
                                    <th>الفئة</th>
                                    <th>السعر</th>
                                    <th width="180">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody id="productsTable">
                                <!-- سيتم إضافة المنتجات ديناميكياً -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- الإعدادات -->
                <div id="settings" class="admin-section">
                    <div class="section-header">
                        <div>
                            <h2>الإعدادات</h2>
                            <p>إعدادات لوحة التحكم والموقع</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="form-header">
                            <h3>إعدادات الحساب</h3>
                        </div>

                        <form id="settingsForm">
                            <div class="form-group">
                                <label for="adminUsername">اسم المستخدم</label>
                                <input type="text" id="adminUsername" value="admin" readonly>
                            </div>

                            <div class="form-group">
                                <label for="currentPassword">كلمة المرور الحالية</label>
                                <input type="password" id="currentPassword" placeholder="أدخل كلمة المرور الحالية">
                            </div>

                            <div class="form-group">
                                <label for="newPassword">كلمة المرور الجديدة</label>
                                <input type="password" id="newPassword" placeholder="أدخل كلمة المرور الجديدة">
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword">تأكيد كلمة المرور</label>
                                <input type="password" id="confirmPassword" placeholder="أكد كلمة المرور الجديدة">
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-secondary" id="cancelSettingsBtn">إلغاء</button>
                                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                            </div>
                        </form>
                    </div>

                    <div class="form-container" style="margin-top: 30px;">
                        <div class="form-header">
                            <h3>إدارة البيانات</h3>
                        </div>

                        <div style="padding: 20px 0;">
                            <p style="color: #666; margin-bottom: 20px;">يمكنك من هنا تصدير البيانات المستوردة أو حذف جميع البيانات.</p>

                            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                                <button class="btn btn-info" id="exportDataBtn">
                                    <i class="fas fa-download"></i> تصدير البيانات
                                </button>
                                <button class="btn btn-warning" id="importDataBtn">
                                    <i class="fas fa-upload"></i> استيراد البيانات
                                </button>
                                <button class="btn btn-danger" id="resetDataBtn">
                                    <i class="fas fa-trash"></i> حذف جميع البيانات
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection
