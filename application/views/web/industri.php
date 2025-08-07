<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: whitesmoke;
      margin: 0;
      padding: 0;
    }

    .table-container {
      overflow-x: auto;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
    }

    .table th, .table td {
      padding: 12px 16px;
      border-bottom: 1px solid #cce5ff;
      text-align: left;
    }

    .table th {
      background-color: #007BFF;
      color: white;
    }

    .table tr:hover {
      background-color: #f1f9ff;
    }

    .table img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      border: 1px solid #eee;
      border-radius: 4px;
      padding: 4px;
      background-color: #fff;
    }

    .table td a {
      text-decoration: none;
      background-color: #007BFF;
      color: white;
      border-radius: 6px;
      padding: 6px 12px;
      display: inline-block;
      font-size: 14px;
    }

    .table td a:hover {
      background-color: #0056b3;
    }

    @media (max-width: 768px) {
      .table th, .table td {
        font-size: 13px;
        padding: 10px;
      }

      .table img {
        width: 45px;
        height: 45px;
      }

      .table td a {
        font-size: 12px;
        padding: 4px 8px;
      }
    }

    /* Scroll to top button */
    #scrollToTopBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 100;
      font-size: 20px;
      background-color: #0056b3;
      color: white;
      border: none;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.4s ease;
    }

    #scrollToTopBtn.show {
      opacity: 1;
      pointer-events: auto;
    }

    #scrollToTopBtn:hover {
      background-color: #0056b3;
    }

    /* Fade-in animation */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div style="border-radius: 20px; border-top: 5px solid #007BFF;" class="panel panel-default">
    <div class="panel-body">
      <div class="table-container">
        <table class="table datatable-basic">
          <thead>
            <tr>
              <th>No.</th>
              <th>Logo</th>
              <th>Nama Industri</th>
              <th>Bidang Kerja</th>
              <th>Wilayah</th>
              <th>Kontak</th>
              <th class="text-center">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($v_industri->result() as $index => $baris) { ?>
              <tr class="fade-in" style="transition-delay: <?php echo $index * 0.1; ?>s;">
                <td><?php echo $no . '.'; ?></td>
                <td><img src="foto/industri/<?php echo $baris->foto; ?>" alt="industri"></td>
                <td><?php echo $baris->nama_industri; ?></td>
                <td><?php echo $baris->bidang_kerja; ?></td>
                <td><?php echo $baris->wilayah; ?></td>
                <td><?php echo $baris->telepon; ?></td>
                <td class="text-center">
                  <a href="web/industri/<?php echo $baris->kdind; ?>"><i class="glyphicon glyphicon-eye-open"></i> </a>
                </td>
              </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" title="Kembali ke atas">&#8679;</button>

<!-- Scripts -->
<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/core/app.js"></script>
<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>

<!-- Custom JS -->
<script>
  // Tombol scroll to top
  const scrollBtn = document.getElementById("scrollToTopBtn");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }

    // Fade-in animation saat scroll
    document.querySelectorAll(".fade-in").forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 50) {
        el.classList.add("visible");
      }
    });
  });

  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // Trigger animasi saat pertama load jika elemen sudah terlihat
  window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".fade-in").forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 50) {
        el.classList.add("visible");
      }
    });
  });
</script>

</body>
</html>
