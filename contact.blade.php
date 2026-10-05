<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Hotel Salak The Heritage Bogor</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-salakV2.jpeg') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Memanggil CSS yang sudah dipisah -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>

    <!-- ======================================================
    NAVBAR
    ====================================================== -->
    <nav class="navbar">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo-salak.png') }}" alt="Hotel Salak The Heritage" class="navbar-logo-img">
        </a>

        <!-- HAMBURGER (muncul di tablet & hp) -->
        <button class="navbar-toggle" id="navbarToggle" aria-label="Buka menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-menu" id="navMenu">

            <!-- ABOUT US -->
            <div class="nav-item">
                <a class="nav-link" onclick="toggleMenu(this)">
                    ABOUT US <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="dropdown">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('history') }}">History</a>
                    <a href="{{ route('facility') }}">Hotel Facilities</a>
                </div>
            </div>

            <!-- ROOMS -->
            <div class="nav-item">
                <a class="nav-link" href="{{ route('room') }}" onclick="toggleMenu(this)">
                    ROOMS & SUITES <span class="arrow"></span>
                </a>
            </div>

            <!-- DINING -->
            <div class="nav-item">
                <a href="{{ route('dining') }}" class="nav-link" onclick="toggleMenu(this)">
                    DINING
                </a>
            </div>

            <!-- MEETING -->
            <div class="nav-item">
                <a class="nav-link" onclick="toggleMenu(this)">
                    MEETINGS & EVENTS <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="dropdown">
                    <a href="{{ route('meeting') }}">Meeting Room</a>
                    <a href="{{ route('meetingoffers') }}">Special Meeting Offers</a>
                    <a href="{{ route('meetingevent') }}">Events</a>
                </div>
            </div>

            <!-- WEDDINGS -->
            <div class="nav-item">
                <a class="nav-link" href="https://beewedding.com/" target="_blank" rel="noopener">
                    WEDDINGS
                </a>
            </div>
            
            <!-- OFFERS -->
            <div class="nav-item">
                <a href="{{ route('offers') }}" class="nav-link" onclick="toggleMenu(this)">
                    OFFERS <span class="arrow"></span>
                </a>
            </div>

            <!-- MORE -->
            <div class="nav-item active">
                <a class="nav-link" onclick="toggleMenu(this)">
                    MORE <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="dropdown">
                    <li><a href="#">Reward Points</a></li>
                    <li><a href="#">Salak Privilege Card</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Catering</a></li>
                    <li><a href="#">Reservation Chat</a></li>
                    <li><a href="#">Attractions</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sign In</a></li>
                </div>
            </div>

        </div>
    </nav>

    <!-- OVERLAY (mobile/tablet) -->
    <div class="nav-overlay" id="navOverlay"></div>

    <!-- ======================================================
    HERO
    ====================================================== -->
    <section class="rooms-hero">
        <div class="rooms-hero-content">
            <div class="rooms-subtitle">WE ARE READY TO HELP</div>
            <h1 class="rooms-title">Contact Us</h1>
            <button class="hero-check-btn" onclick="document.getElementById('contactDetails').scrollIntoView({behavior:'smooth'})">
                See Contact Information
            </button>
        </div>
    </section>

    
    <!-- ======================================================
    KONTAK UTAMA
    ====================================================== -->
    <section class="contact-section" id="contactDetails">
        <div class="contact-container">
            <!-- Kiri: Informasi Utama -->
            <div class="contact-info">
                <div class="section-eyebrow">HEAD OFFICE - HOTEL AREA</div>
                <h2 class="section-title">Hotel Salak The Heritage</h2>
                <ul class="info-list">
                    <li><i class="fa-solid fa-location-dot"></i> Jl. Ir. H. Juanda No. 8, Bogor 16121 - Indonesia</li>
                    <li><i class="fa-solid fa-phone"></i> Tel. +62 251 - 8373 111</li>
                    <li><i class="fa-solid fa-fax"></i> Fax. +62 251 - 8374 111</li>
                    <li><i class="fa-solid fa-envelope"></i> marketing@hotelsalak.co.id</li>
                </ul>

                <h3 class="subsection-title">Jam Operasional Layanan</h3>
                <ul class="info-list" style="margin-bottom: 0;">
                    <li><i class="fa-regular fa-clock"></i> Resepsionis: Layanan 24 Jam</li>
                    <li><i class="fa-solid fa-headset"></i> Reservasi Kamar: 07:00 - 22:00 WIB</li>
                </ul>
            </div>

            <!-- Kanan: Informasi Kontak Diperluas -->
            <div class="expanded-contact-wrapper">
                 <h3 class="expanded-title">Contact Person</h3>
                 <p class="expanded-desc">Untuk keperluan reservasi grup, penawaran pertemuan (meeting), atau acara pernikahan, silakan hubungi tim kami secara langsung.</p>
                 
                 <div class="cp-grid-expanded">
                    <div class="cp-card">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div><strong>Hari</strong><br>0812-1054-3233</div>
                    </div>
                    <div class="cp-card">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div><strong>Dimas</strong><br>0812-9852-9361</div>
                    </div>
                    <div class="cp-card">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div><strong>Rina</strong><br>0811-1179-47</div>
                    </div>
                    <div class="cp-card">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div><strong>Ryan</strong><br>0851-5699-6923</div>
                    </div>
                    <div class="cp-card">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div><strong>Fitri</strong><br>0858-8162-5255</div>
                    </div>
                 </div>

                 <h3 class="expanded-title" style="margin-top: 35px;">Hubungan Media & Sosial</h3>
                 <div class="social-contact-list">
                    <a href="https://www.instagram.com/hotelsalak" target="_blank" rel="noopener">
                        <i class="fa-brands fa-instagram"></i> @hotelsalak
                    </a>
                    <a href="https://www.facebook.com/HotelSalak" target="_blank" rel="noopener">
                        <i class="fa-brands fa-facebook"></i> Hotel Salak The Heritage
                    </a>
                 </div>
            </div>
        </div>
    </section>


    <!-- ======================================================
    LOKASI & KEDATANGAN
    ====================================================== -->
    <section class="arrival-section">
        <div class="arrival-wrap">
            <div style="text-align:center;">
                <div class="section-eyebrow">LOKASI & PANDUAN</div>
                <h2 class="section-title">Akses Menuju Hotel</h2>
            </div>
            
            <div class="arrival-grid">
                <div class="arrival-text">
                    <div class="arrival-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <div>
                            <h4>Lokasi Strategis</h4>
                            <p>Koordinat (6° 35' 40" S ; 106° 47' 37" E). Kami berada tepat di seberang Istana Kepresidenan Bogor dan bersebelahan dengan Balai Kota. Kebun Raya Bogor dapat dicapai hanya dengan beberapa langkah saja.</p>
                        </div>
                    </div>
                    <div class="arrival-item">
                        <i class="fa-solid fa-plane-arrival"></i>
                        <div>
                            <h4>Dari Bandara & Jakarta</h4>
                            <p>Dari Bandara Soekarno - Hatta, kamu dapat menggunakan taksi Blue Bird atau Silver Bird melalui konter resmi di terminal kedatangan. Pastikan untuk selalu menggunakan layanan transportasi berlisensi resmi.</p>
                        </div>
                    </div>
                    <div class="arrival-item">
                        <i class="fa-solid fa-car"></i>
                        <div>
                            <h4>Akses Melalui Tol</h4>
                            <p>Perjalanan sekitar 70 km menuju Bogor dapat ditempuh melalui jalan tol (sekitar 40 menit). Begitu keluar dari gerbang tol terakhir, Kebun Raya dan Istana Bogor di sebelah kiri akan menyambut kedatanganmu.</p>
                        </div>
                    </div>
                </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63416.6107629179!2d106.8007424!3d-6.5798144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d47f9df3%3A0x7a8423915ade7301!2sHotel%20Salak%20The%20Heritage!5e0!3m2!1sen!2sid!4v1791178263166!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>

    <!-- ======================================================
    FOOTER
    ====================================================== -->
    <div class="site-footer-top" id="footerTop">
        <div class="footer-social-row">
            <a href="https://x.com/HotelSalak" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.facebook.com/share/1DGLjb84Uu/" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/hotelsalak?stkn=dTEycG9qNDdqMXlk" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.tripadvisor.com/Hotel_Review-g297706-d555896-Reviews-Hotel_Salak_The_Heritage-Bogor_West_Java_Java.html" aria-label="TripAdvisor"> <img src="{{ asset('images/tripadvisor2.png') }}" alt="Hotel Salak The Heritage" class="navbar-logo-im"><i class="fa-brands fa-tripadvisor"></i></a>
        </div>

        <div class="footer-newsletter">
            <span class="footer-newsletter-label">Sign up to receive Special Offers:</span>
            <form class="footer-newsletter-form" onsubmit="return false;">
                <input type="email" placeholder="Enter your e-mail address" required>
                <button type="submit" class="footer-subscribe-btn">SUBSCRIBE</button>
            </form>
        </div>
    </div>

    <footer class="site-footer-main" id="footerMain">
        <div class="footer-main-grid">

            <div class="footer-col">
                <h4 class="footer-col-title">Hotel Salak The Heritage</h4>
                <ul class="footer-address-list">
                    <li><i class="fa-solid fa-location-dot"></i> Jl. Ir. H. Juanda No.8, 16121 Bogor - Indonesia</li>
                    <li><i class="fa-solid fa-phone"></i> Call Us: Telp. +62 251 8373 111</li>
                    <li><i class="fa-solid fa-fax"></i> Fax: +62 251 8374 111</li>
                    <li><i class="fa-brands fa-whatsapp"></i> WA Hotel Information: +62 812 8701 3896</li>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:marketing@hotelsalak.co.id">marketing@hotelsalak.co.id</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">About Us</h4>
                <ul class="footer-link-list">
                    <li><a href="{{ route('history') }}">History</a></li>
                    <li><a href="{{ route('background') }}">Background</a></li>
                    <li><a href="{{ route('management') }}">Management</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li><a href="{{ route('achievement') }}">Awards &amp; Certificates</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">For Business</h4>
                <ul class="footer-link-list">
                    <li><a href="#">Investment</a></li>
                    <li><a href="#">News &amp; Press</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col-title">Affiliates</h4>
                <ul class="footer-link-list">
                    <li><a href="#">Tuquh.com</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-copyright">
            Copyright © 2026 IT Hotel Salak The Heritage
        </div>
    </footer>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/6281287013896" class="floating-whatsapp" target="_blank" rel="noopener" aria-label="Hubungi kami via WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Memanggil JS yang sudah dipisah -->
    <script src="{{ asset('js/contact.js') }}"></script>

</body>
</html>