<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PKL SMK NEGERI 1 PADAHERANG</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

</head>
<style>

	

	.footer {
		font-family: 'Poppins', sans-serif; 
		font-weight: 500;
		height: 0px;
    color: white;
  
		
		
	}

	.footer-section {

  background-color: #007BFF;
  box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1);
  padding: 40px 0;
  width: 100%;
  font-family: 'Poppins', sans-serif;
}

.footer-container {
  max-width: 1600px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
  padding: 0 40px;
  box-sizing: border-box;
}

.footer-card {
  flex: 1;
  min-width: 250px;
}

.footer-logo {
  height: 100px;
  width: 100px;
  margin-bottom: 15px;
}

.footer-card h4 {
  margin-bottom: 10px;
  font-weight: 600;
}

.footer-card ul {
  list-style: none;
  padding: 0;
}

.footer-card ul li {
  margin-bottom: 8px;
}

.footer-card ul li a {
  text-decoration: none;
  color: white;
  font-size: 14px;
}

.footer-card ul li a:hover {
  color: #333;
  font-weight: bold;
}

/* Tablet */
@media (max-width: 992px) {
  .footer-container {
    flex-direction: column;
    align-items: flex-start;
    padding: 0 20px;
  }

  .footer-card {
    width: 100%;
    margin-bottom: 30px;
  }

  .footer-card iframe {
    height: 180px;
  }
}

/* Mobile */
@media (max-width: 600px) {
  .footer-card ul li a {
    font-size: 13px;
  }

  .footer-logo {
    height: 40px;
  }

  .footer-card iframe {
    height: 150px;
  }
}

</style>
<body>
	
<!-- Footer -->


<div class="footer">
  <footer class="footer-section">
    <div class="footer-container pb-20">
      <!-- Kolom 1: Logo, Judul, Kontak, Sosial Media -->
      <div class="footer-card" style="flex: 1.2;">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
          <img src="assets/logo.png" alt="Logo" class="footer-logo" style="width: 70px; height: 70px; margin-right: 10px;">
          <h5 style="margin: 0; font-weight: 700; color: white">SMK NEGERI 1 PADAHERANG KABUPATEN PANGANDARAN</h5>
        </div>
        <p>Email: pklsmknesapa@gmail.com</p>
        <p>Telp: (0265) 655621</p>
        <div style="margin-top: 20px;">
          <a href="https://www.instagram.com/smknegeri1padaherang/" target="_blank" style="margin-right: 10px;">
           <i class="fa-brands fa-instagram"style="color: white; font-size: 22px;"></i>
          </a>
          <a href="https://facebook.com/SMKNegeri1Padaherang/" target="_blank" style="margin-right: 10px;">
            <i class="fa-brands fa-facebook" style="color: white; font-size: 22px;"></i>
          </a>
          <a href="#" style="margin-right: 10px;">
            <i class="fa-brands fa-x-twitter" style="color: white; font-size: 22px;"></i>
          </a>
        </div>
      </div>

      <!-- Kolom 2: Link Halaman -->
      <div class="footer-card" style="flex: 1;">
        <h4>Halaman</h4>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="web/informasi">Informasi</a></li>
          <li><a href="web/industri">Industri</a></li>
          <li><a href="web/login">Login</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Google Maps (lebar lebih besar) -->
      <div class="footer-card" style="flex: 2;">
        <h4>Alamat</h4>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1682100202274!2d108.68986417581371!3d-7.556630555142826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e659b4679858a91%3A0x3a9655621e54587e!2sSMK%20Negeri%201%20Padaherang!5e0!3m2!1sid!2sid!4v1746358581584!5m2!1sid!2sid" 
          width="100%" 
          height="120" 
          style="border:0; border-radius: 8px;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
    </div>

    <div class="text-center mt-20" style="text-align: center; font-size: 14px; color: white; margin-top: 20px;">
      &copy; 2025 - SMK NEGERI 1 PADAHERANG ALL RIGHTS RESERVED.
    </div>
  </footer>
</div>

<!-- /footer -->

	</div>
<!-- /content area -->

	</div>
<!-- /main content -->

	</div>
<!-- /page content -->

	</div>
<!-- /page container -->

</body>
</html>
