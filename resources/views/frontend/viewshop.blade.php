@extends('layouts.app')

@section('content')

<div class="container">
	<h2 class="page-title" style="margin-bottom: 30px;">
		عروض {{ $shop->name }}
	</h2>
	<div class="offers">
		@forelse($offers as $offer)
		<div class="offer-card" style="min-width:300px;max-width:450px;width:100%;margin:5;">
			<div class="offer-header">
				<div class="store-info">
					<h3 style="color: var(--primary-color); font-size: 1.15rem; margin-bottom: 2px; display:flex; align-items:center;">
						<img src="{{ asset('assets/uploads/shops/'.$offer->shop->image) }}" alt="{{ $offer->shop->name }}" style="width: 34px; height: 34px; border-radius: 50%; object-fit: cover; margin-left: 10px;">
						{{ $offer->shop->name ?? '' }}
					</h3>
					<span style="color: #888; font-size: 0.97rem;">عرض خاص لفترة محدودة</span>
				</div>
			</div>
			<img src="{{ $offer->image ? asset('assets/uploads/offers/'.$offer->image) : asset('assets/img/line-chart.png') }}" class="offer-img" alt="{{ $offer->name }}">
			<div class="offer-content">
				<h4 class="offer-title">{{ $offer->name }}</h4>
				<p style="margin-bottom: 15px; color: #444;">{{ $offer->description }}</p>
				<div class="offer-details">
					<div>
						<span>رقم الهاتف</span>
						<strong style="color:#e53935;">
                        {{ $offer->phone }}
                        <br>
                        {{ $offer->phone2 ? $offer->phone2 : '' }}
                        </strong>
					</div>
					<div>
						<span>مدة العرض</span>
						<strong style="color:#e53935;">{{ $offer->period }}</strong>
					</div>
					<div>
						<span>السعر</span>
						<strong style="color: var(--primary-color);">{{ $offer->offer_price }} جنيه</strong>
					</div>
				</div>
				<div style="display:flex;justify-content:space-between;align-items:center;margin-top:18px;border-top:1px dashed #eee;padding-top:10px;gap:10px;">
					<button class="btn btn-primary" style="background:#e53935;display:flex;align-items:center;gap:6px;" onclick="window.open('tel:{{ $offer->phone }}')">
						<i class="fas fa-phone"></i> اتصل الآن
					</button>
				<button type="button" class="btn btn-secondary" onclick="openShareModal('{{ request()->url() }}#offer-{{ $offer->id }}','{{ $offer->name }}')">
						<i class="fas fa-share-alt"></i> مشاركة
					</button>
				</div>
			</div>
		</div>
		@empty
		<div style="grid-column: 1/-1; text-align: center; padding: 40px; background: white; border-radius: 10px;">
			<h3>لا توجد عروض متاحة حالياً في هذه الفئة</h3>
			<p>يرجى المحاولة مرة أخرى لاحقاً</p>
		</div>
		@endforelse
	</div>
</div>



<!-- نافذة مشاركة Bootstrap -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content share-content">
			<div class="modal-header share-header">
				<h3 class="modal-title" id="shareModalLabel">شارك هذا العرض</h3>
				<button type="button"data-bs-dismiss="modal" class="btn btn-secondary">إغلاق</button>
			</div>
			<div class="modal-body">
				<p id="share-message">انقر على أيقونة لمشاركة هذا العرض مع أصدقائك</p>
				<div class="share-options">
					<div class="share-option" onclick="shareTo('whatsapp')">
						<div class="share-icon whatsapp">
							<i class="fab fa-whatsapp"></i>
						</div>
						<span>واتساب</span>
					</div>
					<div class="share-option" onclick="shareTo('facebook')">
						<div class="share-icon facebook">
							<i class="fab fa-facebook-f"></i>
						</div>
						<span>فيسبوك</span>
					</div>
					<div class="share-option" onclick="shareTo('twitter')">
						<div class="share-icon twitter">
							<i class="fab fa-twitter"></i>
						</div>
						<span>تويتر</span>
					</div>
					<div class="share-option" onclick="shareTo('link')">
						<div class="share-icon link">
							<i class="fas fa-link"></i>
						</div>
						<span>نسخ الرابط</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

<script>
function openShareModal(url, title) {
    // حفظ الرابط والعنوان للمشاركة
    window.shareUrl = url;
    window.shareTitle = title;
    // إظهار النافذة المنبثقة
    var modal = new bootstrap.Modal(document.getElementById('shareModal'));
    modal.show();
}

function shareTo(platform) {
    const url = window.shareUrl;
    const title = window.shareTitle;
    let shareLink = '';

    switch (platform) {
        case 'whatsapp':
            shareLink = `https://wa.me/?text=${encodeURIComponent(title + ' ' + url)}`;
            break;
        case 'facebook':
            shareLink = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            break;
        case 'twitter':
            shareLink = `https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`;
            break;
        case 'link':
            navigator.clipboard.writeText(url).then(() => {
                alert('تم نسخ الرابط إلى الحافظة');
            });
            return;
    }

    if (shareLink) {
        window.open(shareLink, '_blank');
    }
}
</script>
