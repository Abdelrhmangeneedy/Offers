@extends('layouts.app')
<title>اتصل بنا</title>
@section('content')
<!-- Contact Hero -->
<section class="contact-hero bg-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4" style="color: #808000; font-family: 'Playfair Display', serif;">Contact Us</h1>
        <p class="lead text-muted">We'd love to hear from you. Reach out for inquiries, support, or just to say hello.</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="contact-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h2 class="fw-bold mb-4" style="color: #808000;">Get in Touch</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="background-color: #808000; color: white;">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-4" style="color: #808000;">Contact Information</h2>
                <div class="mb-4">
                    <h5 class="fw-bold">Address</h5>
                    <p class="text-muted">
                        Vita Coga for Trading <br>
                        next to <br> Sharming Inn Hotel and Dr. Ihab Pharmacy <br>
                        Al-Hadaba, Sharm El-Sheikh <br>
                        South Sinai, Egypt</p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold">Phone</h5>
                    <p class="text-muted">+20 11 44775226</p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold">Email</h5>
                    <p class="text-muted">vitacoja@gmail.com</p>
                </div>

                <div>
                    <h5 class="fw-bold">Follow Us</h5>
                    <a href="https://www.facebook.com/share/1APfmzDYPp/" class="text-decoration-none me-3" style="color: #808000;"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/vitacoja" class="text-decoration-none me-3" style="color: #808000;"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="https://wa.me/201144775226" class="text-decoration-none" style="color: #808000;"><i class="fa fa-whatsapp fa-2x"></i></a>
                    <a href="https://www.tiktok.com/@vita.coja?_r=1&_t=ZS-92eVtfAp2KA" class="text-decoration-none me-3"
                    style="color: #808000; font-size: x-large; font-weight: bold;">TikTok</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section py-5 bg-white">
    <div class="container">
        <h2 class="text-center fw-bold mb-4" style="color: #808000;">Find Us</h2>
        <div class="ratio ratio-16x9">
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3527.0654168837273!2d34.3138198754731!3d27.869260776090186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDUyJzA5LjMiTiAzNMKwMTgnNTkuMCJF!5e0!3m2!1sen!2seg!4v1767107265881!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</section>
@endsection
@extends('layouts.app')
<title>About VITA COJA - Luxury Beauty and Wellness</title>
@section('content')
<!-- About Hero -->
<section class="about-hero bg-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4" style="color: #808000; font-family: 'Playfair Display', serif;">About VITA COJA</h1>
        <p class="lead text-muted">Discover the story behind our commitment to luxury beauty and wellness</p>
    </div>
</section>

<!-- Brand Story -->
<section class="brand-story py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4" style="color: #808000; font-family: 'Playfair Display', serif;">Our Story</h2>
                <p class="mb-3">VITA COJA was born from a vision to revolutionize the beauty and wellness industry by combining luxury with genuine care for health and the environment.</p>
                <p class="mb-3">Our name reflects our core values: VITA (Life, Vitality, Energy), COJA (Care, Organic, Joy, Aesthetics). We believe that true beauty begins from within, and our products are designed to nourish both body and soul.</p>
                <p>We integrate natural ingredients, cutting-edge scientific research, and advanced technology to create products that not only enhance beauty but also promote overall well-being.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/vitacoja.jpg') }}" alt="VITA COJA Story" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="values py-5 bg-white">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" style="color: #808000; font-family: 'Playfair Display', serif;">Our Values</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fa fa-leaf fa-4x mb-3" style="color: #808000;"></i>
                    <h5 class="fw-bold">Natural Ingredients</h5>
                    <p class="text-muted">We use only the finest organic, safe ingredients that enhance beauty without compromising health.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fa fa-flask fa-4x mb-3" style="color: #808000;"></i>
                    <h5 class="fw-bold">Scientific Innovation</h5>
                    <p class="text-muted">Our formulations are backed by rigorous scientific research and advanced technology.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <i class="fa fa-heart fa-4x mb-3" style="color: #808000;"></i>
                    <h5 class="fw-bold">Sustainability</h5>
                    <p class="text-muted">We are committed to eco-friendly practices in manufacturing and sustainable packaging.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-vision py-5" style="background-color: #808080;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="text-center text-white">
                    <h3 class="fw-bold mb-3" style="color: #D4AF37; font-family: 'Playfair Display', serif;">Our Mission</h3>
                    <p>To empower individuals to achieve their best selves through luxury beauty and wellness products that harmonize natural ingredients with scientific innovation.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="text-center text-white">
                    <h3 class="fw-bold mb-3" style="color: #D4AF37; font-family: 'Playfair Display', serif;">Our Vision</h3>
                    <p>To be the leading brand in premium beauty and wellness, setting new standards for luxury that cares about health, sustainability, and the planet.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta py-5 bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" style="color: #808000;">Experience VITA COJA</h2>
        <p class="lead text-muted mb-4">Discover our range of luxury cosmetics and dietary supplements</p>
        <a href="{{ url('/Products') }}" class="btn btn-lg me-3" style="background-color: #808000; color: white; border: none;">Shop Now</a>
        <a href="{{ url('/contact') }}" class="btn btn-lg btn-outline-secondary">Contact Us</a>
    </div>
</section>
@endsection
