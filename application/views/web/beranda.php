<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PKL SMK NEGERI 1 PADAHERANG</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


  <style>
    html {
  scroll-behavior: smooth;
}


    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
    
      background-color: white;
      color: #1a1a1a;
      font-family: 'Poppins', sans-serif; 
      
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1px auto;
      flex-wrap: wrap;
      gap: 130px;
      max-width: 1400px;
      

    }

    .hero-img {
      max-width: 550px;
      width: 100%;
      height: auto;
     
    }

    .hero-content {
      max-width: 800px;
    }

    .hero-content h1 {
      margin-bottom: 20px;
      line-height: 1.3;
      font-weight: bold;
    }

    .hero-content p {
      font-size: 16px;
      margin-bottom: 30px;
      color: #444;
      font-weight: 400;
   
    }

    .btn {
      padding: 12px 40px;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s;
      display: inline-block;
    }

    .btn-primary {
      background-color: #007BFF;
      color: white;
      
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-outline {
      margin-left: 2rem;
      background-color: #1a1a1a;
      color: #fff;
    }

    .btn-outline:hover {
      background-color: #444;
      color: white;
    }


    .biru {
      font-size: 55px;
      color: #007BFF;
      
    }
     .hitam {
      font-size: 55px;
      color: #1a1a1a;
      
    }

    
    @media (max-width: 812px) {
      .hero {
        flex-direction: column-reverse;
        padding: 40px 0px;
        gap: 60px;
      }

      .btn-primary {
      margin-bottom: 2rem;
      
    }

    .hero-img {
      max-width: 350px;
      width: 100%;
      height: auto;
     
    }

    .biru {
      font-size: 30px;
      color: #007BFF;
      
    }
     .hitam {
      font-size: 30px;
      color: #1a1a1a;
      
    }

    .hero-content p {
      font-size: 16px;
      margin-bottom: 25px;
      color: #555;
      font-weight: 100;
   
    }

      .hero-content h1 {

        font-weight: bold;
        text-align: center;
        display: block;
        margin-left: 2rem;
        margin-right: 2rem;
      }

      .hero-content p, .btn {
        font-size: 1.5rem;
        text-align: center;
        display: block;
        margin-left: 3rem;
        margin-right: 3rem;
      }
    }

    /* end */



/* fitur */
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');

.fitur-section {
  padding: 60px 20px;
  text-align: center;
  margin-bottom: 10rem;
  
}

.fitur-title {
  font-weight: 600;
  font-size: 2.8rem;
  margin-bottom: 10px;
  color: #1a1a1a;
}

.fitur-p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 40px;
  }

.fitur-row {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.fitur-card {
  background-color: #fff;
  padding: 30px 20px;
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
  transition: 0.3s ease;
  width: 250px;
  text-align: center;
  border-bottom: 5px solid #007BFF; 
}


.fitur-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.fitur-icon {
  font-size: 40px;
  color: #007BFF;
  margin-bottom: 30px;
}

.icon-blue {
  color: #007BFF;
}

.fitur-card h5 {
   font-size: 1.3rem;
  font-weight: 600;
}

.fitur-card p {
    font-size: 1rem;
    color: #555;
    margin-bottom:10px;
  }
    /* end */



/* perusahaan */
.partner-section {
  max-width: 1400px;
  margin: 0 auto;
  padding: 20px 40px;
  padding-bottom: 80px;
  overflow: hidden;
  justify-content: center;
  text-align: center;
  margin-bottom: 10rem;
}

.partner-title {
  font-weight: 600;
  font-size: 2.5rem;
  margin-bottom: 60px;
  color: #1a1a1a;
}


.slider-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.slider-track-container {
  overflow: hidden;
  width: 100%;
}

.slider-track {
  display: flex;
  gap: 50px;
  transition: transform 0.4s ease-in-out;
}

.slider-track img {
  height: 70px;              
  width: auto;
  object-fit: contain;
  flex-shrink: 0;
  margin-left: 15px;  
  margin-right: 15px;  
  padding-left: 20px;  
  filter: grayscale(100%);
  transition: transform 0.3s ease;
}


.slider-track img:hover {
  filter: none;
}

.slider-btn {
  background: none;
  border: none;
  font-size: 28px;
  color: #007BFF;
  cursor: pointer;
  z-index: 2;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);

}

.slider-btn.prev {
  left: -25px;
}

.slider-btn.next {
  right: -25px;
}

/* Responsif */
@media (max-width: 992px) {
  .slider-track img {
    height: 35px;
  }
}

@media (max-width: 600px) {
  .slider-track img {
    height: 50px;
  }

  .partner-title {
    font-size: 18px;
  }

  .slider-btn {
    font-size: 24px;
  }
}

    /* end */


/* langkah */
 

.steps-section {
  margin-top: 10rem;
  padding: 40px 40px;
  padding-bottom: 80px;
  text-align: center;
  max-width: 1400;
  margin-bottom: 5rem;
  
}

.step-icon {
  font-size: 50px;
  color: #007BFF;
  margin-bottom: 10px;
  display: inline-block;
  
}

.steps-title {
  font-weight: 600;
  font-size: 2.8rem;
  margin-bottom: 10px;
  color: #1a1a1a;
}

.steps-p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 40px;
  }


.steps-container {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

.step-card {
  background-color: #fff;
  border-radius: 15px;
  padding: 30px 30px;
  max-width: 250px;
  flex: 1 1 200px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.2s ease;
  border-bottom: 5px solid #007BFF; 
}


.step-card h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  font-weight: 600;
}

.step-card p {
  font-size: 0.95rem;
  color: #555;
}

.step-card:hover {
  transform: translateY(-5px);
}

@media (max-width: 768px) {
  .steps-title {
    font-size: 2rem;
  }
}
/* end */


/* pertanyaan */
.faq-section {
    max-width: 1400px;
    margin: 60px auto;
    padding: 0 20px;
    text-align: center;
    margin-bottom: 10rem;
  }

  .faq-section h2 {
    
    font-weight: 600;
    font-size: 2.8rem;
    margin-bottom: 10px;
  }

  .faq-section p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 40px;
  }

  .faq-item {
    background-color: white;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    border-left: 4px solid #007BFF; 
   

  }

  .faq-question {
    width: 100%;
    padding: 20px 30px;
    font-size: 1.2rem;
    font-weight: 500;
    text-align: left;
    background: none;
    border: none;
    outline: none;
    cursor: pointer;
    position: relative;
  }

  .arrow-icon {
    float: right;
    transition: transform 0.3s ease;
  }

  .faq-answer {
    text-align: left;
    max-height: 0;
    overflow: hidden;
    padding: 0 30px;
    transition: max-height 0.4s ease, padding 0.3s ease;
    font-size: 1rem;
    font-weight: 300;
    color: #444;
  }

  .faq-answer.open {
    padding: 20px 30px;
    max-height: 300px;
  }

  .faq-item.open .arrow-icon {
    transform: rotate(180deg);
  }

  @media (max-width: 768px) {
    .faq-section h2 {
      font-size: 2rem;
    }

    .faq-question {
      font-size: 1.1rem;
      padding: 18px 20px;
    }

    .faq-answer {
      font-size: 0.95rem;
    }
  }

  .fade-in {
  opacity: 0;
  animation: fadeIn 1.5s ease-in forwards;
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

 /* Scroll to Top Button */
 #scrollToTopBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 100;
      font-size: 20px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      cursor: pointer;
      display: none;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      transition: opacity 0.3s ease;
    }

    #scrollToTopBtn.show {
      display: flex;
    }


  /* end */



  </style>
</head>
<body>
<button id="scrollToTopBtn" title="Kembali ke atas">&#8679;</button>

  <!-- konten -->
  <section class="hero" data-aos="fade-up" data-aos-delay="0">
    <div class="hero-content">
      <h1 class="hitam">
        <span class="biru">Sistem</span> Informasi <br>
        Praktik Kerja <span class="biru">Lapangan</span> <br>
        SMK <span class="biru">Negeri </span>1 Padaherang
      </h1>
      <p>Platform PKL yang dirancang untuk membantu siswa meraih   pengalaman nyata,<br> menjembatani pendidikan dan dunia industri secara langsung.</p>
      <a href="web/login" class="btn btn-primary">Daftar PKL Sekarang</a>
      <a href="web/industri" class="btn btn-outline">Rekomendasi Industri</a>

    </div>

    <img src="assets/siswaavatar.png" alt="Ilustrasi PKL" class="hero-img">
  </section>
  <!-- end -->



  <!-- Langkah langkah -->
  <div class="steps-section" data-aos="fade-up" data-aos-delay="200">
  <h2 class="steps-title">Langkah-langkah<span style="color:#007BFF"> PKL</span></h2>
  <p class="steps-p">Berikut adalah tahap untuk melaksanakan PKL</p>
  
  <div class="steps-container">
    <div class="step-card">
      <i class="step-icon fa-solid fa-cloud-arrow-down"></i>
      <h3>Unduh Surat Lamaran</h3>
      <p>Unduh surat lamaran PKL dari sistem sebagai syarat pengajuan ke industri.</p>
    </div>
    <div class="step-card">
      <i class="step-icon fa-solid fa-envelope-circle-check"></i>
      <h3>Lamar ke Industri</h3>
      <p>Serahkan surat lamaran ke perusahaan/instansi yang dituju untuk PKL.</p>
    </div>
    <div class="step-card">
      <i class="step-icon fa-solid fa-cloud-arrow-up"></i>
      <h3>Upload Surat Diterima</h3>
      <p>Unggah surat balasan dari industri sebagai bukti bahwa lamaran diterima.</p>
    </div>
    <div class="step-card">
      <i class="step-icon fa-solid fa-business-time"></i>
      <h3>Ikuti Pembekalan</h3>
      <p>Ikuti pembekalan dan pengarahan dari sekolah sebelum memulai kegiatan PKL.</p>
    </div>
    <div class="step-card">
      <i class="step-icon fa-solid fa-briefcase"></i>
      <h3>Mulai PKL</h3>
      <p>Laksanakan kegiatan PKL di industri yang telah dipilih sesuai jadwal.</p>
    </div>
  </div>
</div>
<!-- end -->

  

  
<!-- Fitur PKL -->
<section class="fitur-section" data-aos="fade-up" data-aos-delay="400">
  <h2 class="fitur-title">Fitur unggulan<span style="color:#007BFF"> PKL</span></h2>
  <p class="fitur-p">Beberapa fitur unggulan yang digunakan untuk mempermudah dalam kegiatan PKL</p>
  <div class="fitur-row">
    <!-- Baris 1 -->
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-pen-to-square"></i>
      <h5>Input Nilai</h5>
      <p>Fitur untuk memudahkan guru dalam menginput nilai PKL</p>
    </div>
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-book"></i>
      <h5>Laporan PKL</h5>
      <p>Memudahkan siswa dalam mengumpulkan Laporan PKL ke sekolah</p>
    </div>
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-chart-pie"></i>
      <h5>Monitoring Nilai</h5>
      <p>Guru akan lebih mudah dalam memonitoring nilai PKL</p>
    </div>
  </div>
  <div class="fitur-row">
    <!-- Baris 2 -->
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-building-user"></i>
      <h5>Penempatan</h5>
      <p>Memudahkan dalam penempatan siswa sesuai dengan tempat PKL</p>
    </div>
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-mobile-screen-button"></i>
      <h5>Fleksibel</h5>
      <p>Dapat diakses kapanpun dan dimanapun secara online</p>
    </div>
    <div class="fitur-card">
      <i class="fitur-icon fa-solid fa-clipboard-list"></i>
      <h5>Jurnal Harian</h5>
      <p>Memudahkan siswa untuk mengisi jurnal harian</p>
    </div>
  </div>
</section>
<!-- end -->






<!-- Partner perusahaan -->
<section class="partner-section" data-aos="fade-up" data-aos-delay="600">
  <div class="slider-wrapper" style="position: relative; overflow: hidden;">
    <button class="slider-btn prev" style="position:absolute; left:0; top:50%; transform:translateY(-50%); z-index:1;"></button>

    <div class="slider-track-container" style="overflow: hidden;">
      <div class="slider-track" id="sliderTrack" style="display: flex; transition: transform 0.5s ease;">
        <img src="assets/p1.jpg" alt="p1" />
        <img src="assets/plen.png" alt="p2" />
        <img src="assets/p3.png" alt="p3" />
        <img src="assets/p4.png" alt="p4" />
        <img src="assets/pg.jpg" alt="p5" />
        <img src="assets/p6.jpg" alt="p6" />
        <img src="assets/ph.png" alt="p7" />
        <img src="assets/p8.png" alt="p8" />
        <img src="assets/pi.png" alt="PI" />
        <img src="assets/pm.png" alt="PM" />
        <img src="assets/pa.png" alt="PA" />
        

        <img src="assets/p1.jpg" alt="p1" />
        <img src="assets/plen.png" alt="p2" />
        <img src="assets/p3.png" alt="p3" />
        <img src="assets/p4.png" alt="p4" />
        <img src="assets/pg.jpg" alt="p5" />
        <img src="assets/p6.jpg" alt="p6" />
        <img src="assets/ph.png" alt="p7" />
        <img src="assets/p8.png" alt="p8" />
        <img src="assets/pi.png" alt="PI" />
        <img src="assets/pm.png" alt="PM" />
        <img src="assets/pa.png" alt="PA" />


        <img src="assets/p1.jpg" alt="p1" />
        <img src="assets/plen.png" alt="p2" />
        <img src="assets/p3.png" alt="p3" />
        <img src="assets/p4.png" alt="p4" />
        <img src="assets/pg.jpg" alt="p5" />
        <img src="assets/p6.jpg" alt="p6" />
        <img src="assets/ph.png" alt="p7" />
        <img src="assets/p8.png" alt="p8" />
        <img src="assets/pi.png" alt="PI" />
        <img src="assets/pm.png" alt="PM" />
        <img src="assets/pa.png" alt="PA" />


        <img src="assets/p1.jpg" alt="p1" />
        <img src="assets/plen.png" alt="p2" />
        <img src="assets/p3.png" alt="p3" />
        <img src="assets/p4.png" alt="p4" />
        <img src="assets/pg.jpg" alt="p5" />
        <img src="assets/p6.jpg" alt="p6" />
        <img src="assets/ph.png" alt="p7" />
        <img src="assets/p8.png" alt="p8" />
        <img src="assets/pi.png" alt="PI" />
        <img src="assets/pm.png" alt="PM" />
        <img src="assets/pa.png" alt="PA" />
      </div>
    </div>

    

    <button class="slider-btn next" style="position:absolute; right:0; top:50%; transform:translateY(-50%); z-index:1;"></button>
  
  </div>
</section>

<!-- end -->



 

<!-- pertanyaan -->
<section class="faq-section" data-aos="fade-up" data-aos-delay="800">
  <h2>Pertanyaan Seputar <span style="color:#007BFF">PKL</span></h2>
  <p>Beberapa pertanyaan PKL yang sering ditanyakan</p>

  <div class="faq-item">
    <button class="faq-question">
      Apakah aplikasi bisa diakses melalui smartphone?
      <span class="arrow-icon">▼</span>
    </button>
    <div class="faq-answer">
      <p>Tentu saja, anda dapat mengakses melalui browser di perangkat smartphone maupun desktop.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Kapan waktu input Jurnal Harian?
      <span class="arrow-icon">▼</span>
    </button>
    <div class="faq-answer">
      <p>Waktu input Jurnal Harian adalah setiap hari setelah melakukan kegiatan PKL.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Bagaimana jika salah input jurnal?
      <span class="arrow-icon">▼</span>
    </button>
    <div class="faq-answer">
      <p>Silahkan dihapus dan diinputkan kembali, Jurnal hanya bisa 1 kali input dalam 1 hari.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Berapakah batas maksimal ukuran file untuk diupload?
      <span class="arrow-icon">▼</span>
    </button>
    <div class="faq-answer">
      <p>Batas maksimal file yang dapat diupload adalah 5MB.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Bagaimana jika lupa akun?
      <span class="arrow-icon">▼</span>
    </button>
    <div class="faq-answer">
      <p>Silakan hubungi pembimbing sekolah atau admin PKL untuk mereset akun Anda.</p>
    </div>
  </div>
</section>
<!-- end -->
 





<script>
  const scrollBtn = document.getElementById("scrollToTopBtn");

  // Tampilkan tombol saat scroll ke bawah
  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }
  };

  // Scroll ke atas dengan smooth ketika tombol diklik
  scrollBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>


<!-- js carausel -->
<script>
  const sliderTrack = document.getElementById('sliderTrack');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');

  let scrollAmount = 0;
  const slideStep = 180; // lebar gambar + margin
  const autoSlideDelay = 2500;

  function slideNext() {
    if (scrollAmount + slideStep >= sliderTrack.scrollWidth - sliderTrack.clientWidth) {
      scrollAmount = 0;
    } else {
      scrollAmount += slideStep;
    }
    sliderTrack.style.transform = `translateX(-${scrollAmount}px)`;
  }

  function slidePrev() {
    scrollAmount -= slideStep;
    if (scrollAmount < 0) scrollAmount = 0;
    sliderTrack.style.transform = `translateX(-${scrollAmount}px)`;
  }

  nextBtn.addEventListener('click', slideNext);
  prevBtn.addEventListener('click', slidePrev);

  // Auto slide setiap beberapa detik
  setInterval(slideNext, autoSlideDelay);
</script>


 <!-- end -->

 <script>
  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.fade-in').forEach(el => {
      el.style.opacity = 0;
      setTimeout(() => {
        el.style.animation = 'fadeIn 1.5s ease-in forwards';
      }, 100);
    });
  });
</script>

<script>
  window.addEventListener('load', function () {
    const slider = document.getElementById('slider');
    let scrollAmount = 0;
    const slideWidth = 300; // Sesuaikan dengan lebar slide
    const slideSpeed = 2000; // 2 detik per slide

    setInterval(() => {
      if (scrollAmount + slideWidth >= slider.scrollWidth) {
        // Kalau sudah mentok, kembali ke awal
        scrollAmount = 0;
      } else {
        scrollAmount += slideWidth;
      }

      slider.scrollTo({
        left: scrollAmount,
        behavior: 'smooth'
      });
    }, slideSpeed);
  });
</script>




<!-- JS Dropdown FAQ -->
<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');

    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');

      // Close all open items
      faqItems.forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-answer').classList.remove('open');
      });

      // Toggle current
      if (!isOpen) {
        item.classList.add('open');
        answer.classList.add('open');
      }
    });
  });
</script>
<!-- end -->

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // hanya muncul sekali, hilang saat scroll balik tidak animasi lagi
  });
</script>


</body>
</html>
