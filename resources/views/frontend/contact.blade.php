<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أحمد سليمان · موقع شخصي</title>
    <!-- Font Awesome 6 (مجاني) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- خطوط عربية احترافية: Tajawal + Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&family=Tajawal:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', 'Cairo', system-ui, -apple-system, sans-serif;
        }

        body {
            background: #0a0a0a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1.5rem;
        }

        .card {
            max-width: 1300px;
            width: 100%;
            background: #ffffff;
            border-radius: 2.5rem;
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            transition: 0.25s;
        }

        /* ===== رأس أسود مع ذهبي ===== */
        .personal-header {
            background: #000000;
            color: #FFD700;
            padding: 1rem 3rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            border-bottom: 5px solid #FFD700;
            position: relative;
            background-image: radial-gradient(circle at 10% 30%, rgba(255,215,0,0.1) 0%, transparent 30%);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .avatar {
            background: #000000;
            color: #FFD700;
            width: 52px;
            height: 52px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            box-shadow: 0 10px 15px -5px #FFD700;
            transform: rotate(2deg);
            transition: 0.2s;
            border: 2px solid #FFD700;
        }

        .name-title h1 {
            font-size: 1.9rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.5px;
            color: #FFD700;
            text-shadow: 2px 2px 0 #000000;
        }

        .name-title .sub {
            font-size: 1rem;
            font-weight: 400;
            opacity: 0.9;
            display: flex;
            align-items: center;
            gap: 6px;
            color: #f0f0f0;
        }

        .quick-contact {
            display: flex;
            align-items: center;
            gap: 2.2rem;
            background: rgba(255, 215, 0, 0.15);
            backdrop-filter: blur(8px);
            padding: 0.5rem 2rem 0.5rem 2.2rem;
            border-radius: 60px;
            border: 1px solid #FFD700;
        }

        .quick-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
            font-weight: 600;
            white-space: nowrap;
            color: #ffffff;
        }

        .quick-item i {
            background: #FFD700;
            color: #000000;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        .quick-item span {
            color: #FFD700;
            direction: ltr;
        }

        .elostaz-badge {
            background: rgba(0, 0, 0, 0.25);
            padding: 0.3rem 1.2rem;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1.2rem;
            border: 1px solid #FFD700;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #FFD700;
        }

        /* الشبكة الأساسية */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        /* القسم الأيسر (أبيض مع لمسات سوداء وذهبية) */
        .left-panel {
            background: #ffffff;
            padding: 2.8rem 3rem;
        }

        .section-tag {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #000000;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .main-heading {
            font-size: 2.2rem;
            font-weight: 800;
            color: #000000;
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .main-heading i {
            color: #FFD700;
            margin-left: 8px;
        }

        .send-message-title {
            font-weight: 800;
            font-size: 1.6rem;
            color: #000000;
            margin: 1.8rem 0 1.5rem 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .send-message-title i {
            color: #000000;
            font-size: 1.8rem;
            background: #FFD700;
            padding: 0.5rem;
            border-radius: 50%;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1.2rem;
            margin-bottom: 1.2rem;
        }

        .form-group {
            flex: 1 1 calc(50% - 0.6rem);
            min-width: 200px;
        }

        .form-group.full-width {
            flex: 1 1 100%;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #333333;
            margin-bottom: 0.4rem;
            letter-spacing: 0.3px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            background: #f9f9f9;
            border: 2px solid #e0e0e0;
            border-radius: 20px;
            padding: 1rem 1.6rem;
            font-size: 1rem;
            outline: none;
            transition: 0.2s;
            font-family: 'Tajawal', 'Cairo', sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #FFD700;
            background: #ffffff;
            box-shadow: 0 8px 18px -10px #FFD700;
        }

        .send-btn {
            background: #000000;
            color: #FFD700;
            border: 2px solid #FFD700;
            padding: 1.1rem 2.8rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.2rem;
            margin-top: 1.5rem;
            cursor: pointer;
            transition: 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 20px 30px -12px #000;
        }

        .send-btn i {
            font-size: 1.3rem;
            color: #FFD700;
        }

        .send-btn:hover {
            background: #FFD700;
            color: #000000;
            transform: scale(1.02);
            box-shadow: 0 26px 35px -12px #FFD700;
        }
        .send-btn:hover i {
            color: #000000;
        }

        /* ===== القسم الأيمن (أسود مع ذهبي) ===== */
        .right-panel {
            background: #0a0a0a;
            color: #f0f0f0;
            padding: 2.8rem 3rem;
            display: flex;
            flex-direction: column;
            border-radius: 0 0 0 4rem;
            position: relative;
            overflow: hidden;
            border-left: 1px solid #FFD700;
        }

        .right-panel::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 100% 0%, #FFD70020, transparent 40%);
            pointer-events: none;
        }

        .personal-data {
            position: relative;
            z-index: 2;
        }

        .greeting {
            font-size: 1rem;
            font-weight: 400;
            color: #FFD700;
            letter-spacing: 1px;
            margin-bottom: 0.25rem;
        }

        .my-name {
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 0.5rem;
            color: #FFD700;
        }

        .my-name span {
            color: #ffffff;
            border-bottom: 3px solid #FFD700;
        }

        .badge-line {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin: 1.2rem 0 2rem 0;
        }

        .chip {
            background: #1a1a1a;
            padding: 0.4rem 1.5rem;
            border-radius: 40px;
            font-weight: 500;
            font-size: 1rem;
            border: 1px solid #FFD700;
            color: #FFD700;
        }

        .contact-info-card {
            background: #111111;
            border-radius: 32px;
            padding: 1.8rem;
            margin: 1.2rem 0 1.8rem 0;
            border: 1px solid #FFD700;
            box-shadow: 0 5px 15px rgba(255,215,0,0.2);
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin-bottom: 1.4rem;
            font-size: 1.15rem;
            color: #f0f0f0;
        }

        .info-row i {
            width: 32px;
            height: 32px;
            background: #FFD700;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #000000;
        }

        .recent-trips {
            margin: 2rem 0 1.2rem;
        }

        .recent-trips h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #FFD700;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* جعل كل مشروع رابطاً */
        .trip-link {
            text-decoration: none;
            display: block;
            margin-bottom: 1.5rem;
            transition: transform 0.2s;
        }
        .trip-link:hover {
            transform: translateY(-3px);
        }

        .trip-item {
            display: flex;
            gap: 1.2rem;
            background: #111111;
            padding: 1rem 1.5rem;
            border-radius: 26px;
            align-items: center;
            border: 1px solid #FFD700;
        }

        .trip-icon {
            background: #FFD700;
            width: 44px;
            height: 44px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #000000;
        }

        .trip-text p {
            font-weight: 600;
            color: #ffffff;
        }

        .trip-text .muted {
            color: #b0b0b0;
            font-size: 0.85rem;
        }

        .work-hours {
            display: flex;
            justify-content: space-between;
            background: #111111;
            padding: 1rem 1.8rem;
            border-radius: 40px;
            margin: 1.5rem 0;
            border: 1px solid #FFD700;
            font-size: 1rem;
            color: #f0f0f0;
        }

        /* ===== FOOTER ===== */
        .personal-footer {
            background: #000000;
            color: #FFD700;
            padding: 1.8rem 3rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            border-top: 2px solid #FFD700;
            direction: ltr;
        }

        .footer-copy {
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #cccccc;
        }

        .footer-copy i {
            color: #FFD700;
            font-size: 1.4rem;
        }

        .social-links {
            display: flex;
            gap: 1.8rem;
        }

        .social-links a {
            color: #FFD700;
            background: #1a1a1a;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            transition: 0.2s;
            border: 1px solid #FFD700;
            text-decoration: none;
        }

        .social-links a:hover {
            background: #FFD700;
            color: #000000;
            transform: translateY(-5px);
            border-color: #000000;
        }

        .footer-domain {
            font-size: 1.2rem;
            font-weight: 600;
            color: #FFD700;
            direction: rtl;
        }

        .footer-domain span {
            background: #FFD700;
            color: #000000;
            padding: 0.2rem 1rem;
            border-radius: 40px;
            margin-right: 8px;
            font-size: 0.9rem;
        }

        hr {
            border: 1px solid #FFD700;
            margin: 1.2rem 0;
        }

        @media (max-width: 950px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .personal-header {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }
            .quick-contact {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<div class="card">
    <!-- هيدر أسود مع ذهبي -->
    <div class="personal-header">
        <div class="brand">
            <div class="avatar">أ</div>
            <div class="name-title">
                <h1>أحمد سليمان</h1>
                <div class="sub"><i class="fas fa-map-marker-alt" style="color:#FFD700;"></i> أبو كبير · الشرقية</div>
            </div>
        </div>
        <div class="quick-contact">
            <div class="quick-item">
                <i class="fas fa-phone-alt"></i>
                <span>01013929526</span>
            </div>
            <div class="elostaz-badge">
                <i class="fas fa-crown" style="color:#FFD700;"></i> Elostaz Ahmed Soliman
            </div>
        </div>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="contact-grid">
        <!-- القسم الأيسر (نموذج واتساب) -->
        <div class="left-panel">
            <div class="section-tag"><i class="fas fa-comment-dots"></i> راسلني مباشرة</div>
            <h1 class="main-heading">مرحباً بكم في صفحة التواصل مع الأستاذ أحمد سليمان <i class="fas fa-smile"></i></h1>

            <div class="send-message-title">
                <i class="fab fa-whatsapp"></i> أرسل رسالتك عبر واتساب
            </div>
            <form onsubmit="sendToWhatsApp(event)">
                <div class="form-row">
                    <div class="form-group">
                        <label>الاسم الكامل</label>
                        <input type="text" id="name" placeholder="مثل: أحمد سليمان" required>
                    </div>
                    <div class="form-group">
                        <label>رقم الهاتف</label>
                        <input type="tel" id="phone" placeholder="01013929526" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group full-width">
                        <label>البريد الإلكتروني</label>
                        <input type="email" id="email" placeholder="ahmedsoliman@example.com" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label>اكتب رسالتك...</label>
                    <textarea id="message" placeholder="استفسار، اقتراح، أي شيء..." required></textarea>
                </div>

                <button type="submit" class="send-btn">
                    <i class="fab fa-whatsapp"></i> إرسال عبر واتساب
                </button>
            </form>
        </div>

        <!-- القسم الأيمن (معلومات شخصية + أعمال) -->
        <div class="right-panel">
            <div class="personal-data">
                <div class="greeting">👋 مرحباً، أنا</div>
                <div class="my-name"><span>أحمد</span> سليمان</div>
                <div class="badge-line">
                    <span class="chip"><i class="fas fa-briefcase"></i> رائد أعمال </span>
                    <span class="chip"><i class="fas fa-globe"></i> أبو كبير</span>
                </div>

                <!-- بطاقة الاتصال -->
                <div class="contact-info-card">
                    <div class="info-row"><i class="fas fa-envelope"></i> ahmedsoliman@gmail.com</div>
                    <div class="info-row"><i class="fas fa-phone-alt"></i> 01013929526</div>
                    <div class="info-row"><i class="fas fa-map-pin"></i> ابوكبير - الشرقية - مصر</div>
                </div>

                <!-- أحدث الأعمال (روابط) -->
                <div class="recent-trips">
                    <h4><i class="fas fa-suitcase-rolling"></i> أحدث الأعمال</h4>

                    <a href="#" class="trip-link" target="_blank" title="عرض المشروع">
                        <div class="trip-item">
                            <div class="trip-icon"><i class="fas fa-umbrella-beach"></i></div>
                            <div class="trip-text">
                                <p>موقع قراء العرب</p>
                                <span class="muted">quraaElarab.com</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="trip-link" target="_blank" title="عرض المشروع">
                        <div class="trip-item">
                            <div class="trip-icon"><i class="fas fa-mountain"></i></div>
                            <div class="trip-text">
                                <p>موقع عروض ابوكبير</p>
                                <span class="muted">عروض البلد</span>
                            </div>
                        </div>
                    </a>

                    <!-- يمكنك إضافة المزيد بنفس الطريقة -->
                </div>

                <!-- شعار -->
                <hr>
                <div style="display: flex; justify-content: space-between; font-size: 1rem; color:#b0b0b0;">
                    <span><i class="fas fa-location-dot" style="color:#FFD700;"></i> صلِ علي النبي محمد</span>
                    <span style="color:#FFD700;">🌐 as.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- الفوتر (روابط السوشيال ميديا مؤقتة) -->
    <footer class="personal-footer">
        <div class="footer-copy">
            <i class="fas fa-copyright"></i> 2026 أحمد سليمان — جميع الحقوق محفوظة
        </div>
        <div class="social-links">
            <a href="#" aria-label="فيسبوك" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="تويتر" target="_blank"><i class="fab fa-x-twitter"></i></a>
            <a href="#" aria-label="انستغرام" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="لينكد إن" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.me/201013929526" aria-label="واتساب" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="footer-domain">
            <span>elostazas.com</span>
        </div>
    </footer>
</div>

<script>
function sendToWhatsApp(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    const whatsappNumber = '201013929526';
    const text = `الاسم: ${name}%0aرقم الهاتف: ${phone}%0aالبريد الإلكتروني: ${email}%0aالرسالة: ${message}`;
    window.open(`https://wa.me/${whatsappNumber}?text=${text}`, '_blank');
}
</script>

</body>
</html>
