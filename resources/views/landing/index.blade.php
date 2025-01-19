<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fida's Bakery</title>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="{{ asset('landing_page/js/script.js') }}"></script>
<img src="{{ asset('images/images/logo1.png') }}">
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="logo">
          <img src="Logo fida's bakery remove backgorund (1).png" alt="Logo Fida's Bakery" />
          <h1>Fida's Bakery</h1>
        </div>
        <ul class="nav-links">
          <li><a href="#Beranda">Beranda</a></li>
          <li><a href="#Produk">Produk</a></li>
          <li><a href="#TentangKami">Tentang Kami</a></li>
          <li><a href="#Kontak">Kontak</a></li>
          <li><a href="{{ route('login') }}" class="login-btn">LOGIN</a></li>
        </ul>
      </nav>
      </header>

      <section class="hero">
        <h1>BAKERY</h1>
        <h2>FRESH BAKE</h2>
        <p>Nikmati kelezatan roti dan kue yang baru di panggang setiap hari kami menggunakan bahan berkualitas 
          tinggi untuk menghasilkan rasa yang istimewa,  Fida's Bakery menghadirkan beragam pilihan roti 
          dan donat dengan tekstur lembut dan cita rasa terbaik, sempurna untuk menemani setiap momen anda.</p>
          <a href="#" class="cta-button">
            <i class='bx bxl-whatsapp'></i>
            ORDER NOW!!
        </a>

    </section>


      <!-- Produk -->
      <div class="section-produk" id="Produk">
        <h1>PRODUK KAMI</h1>
        <div class="produk-container">
            <div class="circle"><img src="donat1.jpg" alt="Donat 1"></div>
            <div class="circle"><img src="donat2.jpg" alt="Donat 2"></div>
            <div class="circle"><img src="donat3.png" alt="Donat 3"></div>
            <div class="circle"><img src="donat4.png" alt="Donat 4"></div>
            <div class="circle"><img src="donat5.png" alt="Donat 5"></div>
            <div class="circle"><img src="donat6.png" alt="Donat 6"></div>
            <div class="circle"><img src="donat7.png" alt="Donat 7"></div>
            <div class="circle"><img src="donat8.png" alt="Donat 8"></div>
            <div class="circle"><img src="donat9.png" alt="Donat 9"></div>
            <div class="circle"><img src="donat10.png" alt="Donat 10"></div>
        </div>
    </div>

      <!-- Tentang kami-->
       <div class="section-tentang-kami" id="TentangKami">
        <h1>TENTANG KAMI</h1>
    </div>
    <div class="container">
        <div class="content">
            <p>Fida's Bakery adalah toko roti dan donat yang berfokus pada donat kentang dengan cita rasa khas dan tekstur lembut. Berdiri selama lebih dari satu setengah tahun, kami melayani pelanggan dengan kualitas produk terbaik, kesegaran, dan layanan yang ramah.</p>
            <p>Kami melayani pembelian langsung di toko, dengan metode pembayaran tunai atau QRIS. Selain itu, kami juga menerima pesanan khusus melalui WhatsApp untuk memberikan fleksibilitas bagi pelanggan kami. Dengan komitmen pada kualitas dan inovasi, kami terus berusaha meningkatkan pengalaman pelanggan melalui digitalisasi sistem kami.</p>
            <p>Fida's Bakery beroperasi setiap hari (kecuali hari libur nasional) mulai pukul 06:20 hingga 21:00, menghadirkan produk yang selalu baru dipanggang setiap hari. Kami percaya bahwa setiap gigitan dari produk kami akan membawa kebahagiaan dan kehangatan untuk Anda dan keluarga.</p>
        </div>
        <div class="images">
            <div class="image-box">
                <img src="nama.jpg" alt="aa">
            </div>
            <div class="image-box">
                <img src="nama.jpg" alt="aaa">
            </div>
        </div>
    </div>
       <!--kontak-->
       <div class="section-kontak" id="Kontak">
            <h1>KONTAK</h1>
            <div class="u">
            <p>One Email, Phone Call & Address</p>
            <div class="contact-container">
                <div class="contact-box">
                    <h2>Email</h2>
                    <p>FidaBakery@gmail.com</p>
                </div>
                <div class="contact-box">
                    <h2>No Telp</h2>
                    <p>+62 000-0000-0000</p>
                </div>
                <div class="contact-box">
                    <h2>Alamat</h2>
                    <p>Bekasi</p>
                </div>
            </div>
            <div class="whatsapp-icon">
                <img src="whatsapp-icon.png" alt="WhatsApp">
            </div>
            </div>
        </div>


 

    <script src="main.js"></script>
</body>
</html>