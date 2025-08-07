<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PKL SMK NEGERI 1 PADAHERANG</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: whitesmoke;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: left;
      max-width: 1600px;
      padding: 0px 25px;
      margin-bottom: 5rem;
    }

    .info-card {
      flex: 0 0 18%;
      max-width: 18%;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      border-bottom: 3px solid #007BFF;
    }

    .info-card img {
      width: 100%;
      aspect-ratio: 3 / 2;
      object-fit: cover;
      object-position: top;
      display: block;
    }

    .info-card-body {
      padding: 12px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .info-card-title {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
      text-decoration: none;
    }

    .info-card-text {
      flex: 1;
      font-size: 12px;
      font-weight: 200;
      margin-bottom: 8px;
      color: #333;
    }

    .info-card-meta {
      font-size: 11px;
      color: gray;
    }

    .judul {
      text-align: start;
      padding-left: 25px;
      padding-bottom: 20px;
      font-weight: 600;
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

    @media (max-width: 992px) {
      .card-container {
        padding: 0 40px;
        gap: 50px;
        margin-bottom: 5rem;
      }
      .info-card {
        flex: 0 0 45%;
        max-width: 45%;
      }
    }

    @media (max-width: 600px) {
      .card-container {
        padding: 0 10px;
        gap: 50px;
        margin-bottom: 5rem;
      }
      .info-card {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
                        

<div class="container-fluid">
  <div style="border-radius: 20px; border-top: 5px solid #007BFF;" class="panel panel-default">
    <div class="panel-body">
      <div style="border-radius: 10px; width: 300px">
        <div class="panel-body">
          <form action="web/info" method="post">
            <input style="border-radius: 10px;" type="search" name="cari" class="form-control" placeholder="Cari Informasi...">
            <input type="submit" name="btncari" class="btn" value="Cari" style="float:right;margin-top:-36px; color: white; background-color: #007BFF; border-radius: 10px;">
          </form>
          <br>
        </div>
      </div>

      <div class="card p-4">
        <div class="card-container" id="infoContainer">
          <?php foreach ($v_info->result() as $index => $baris) { ?>
            <div class="info-card info-card-wrapper fade-in" style="transition-delay: <?= $index * 0.1 ?>s;" data-index="<?= $index ?>">
              <img src="<?php echo $baris->gambar; ?>" alt="gambar">
              <div class="info-card-body">
                <a href="web/info/<?php echo $baris->kdinfo; ?>" class="info-card-title">
                  <?php echo $baris->judul; ?>
                </a>
                <div class="info-card-text">
                  <?php echo substr($baris->deskripsi, 0, 50); ?>
                </div>
                <div class="info-card-meta">
                  <i class="glyphicon glyphicon-tag"></i> <?php echo $baris->nama_label; ?>
                  &nbsp;&nbsp;
                  <i class="glyphicon glyphicon-calendar"></i> <?php echo $this->Mcrud->format($baris->tanggal); ?>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

        <div style="padding: 20px;">
          <label for="entriesPerPage">Show:</label>
          <select id="entriesPerPage">
            <option value="5">5</option>
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select> entries

          <div id="paginationControls" style="margin-top: 20px;"></div>
          <div id="entryInfo" style="margin-top: 10px; font-size: 13px; color: gray;"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" title="Kembali ke atas">&#8679;</button>

<!-- Script Pagination, Fade-in & Scroll to Top -->
<script>
  const allCards = document.querySelectorAll('.info-card-wrapper');
  const paginationControls = document.getElementById('paginationControls');
  const entryInfo = document.getElementById('entryInfo');
  const entriesPerPageSelect = document.getElementById('entriesPerPage');
  const scrollBtn = document.getElementById("scrollToTopBtn");

  let currentPage = 1;
  let entriesPerPage = parseInt(entriesPerPageSelect.value);

  function showPage(page) {
    const totalItems = allCards.length;
    const totalPages = Math.ceil(totalItems / entriesPerPage);
    currentPage = Math.max(1, Math.min(page, totalPages));

    const start = (currentPage - 1) * entriesPerPage;
    const end = start + entriesPerPage;

    allCards.forEach((card, index) => {
      card.style.display = (index >= start && index < end) ? 'flex' : 'none';
    });

    updatePaginationControls(totalPages);
    updateEntryInfo(start + 1, Math.min(end, totalItems), totalItems);
  }

  function updatePaginationControls(totalPages) {
    let html = '';
    if (totalPages > 1) {
      for (let i = 1; i <= totalPages; i++) {
        html += `<button onclick="showPage(${i})" style="
          margin-right: 5px;
          padding: 5px 10px;
          border: 1px solid #ccc;
          background: ${i === currentPage ? '#007BFF' : '#fff'};
          color: ${i === currentPage ? '#fff' : '#000'};
          border-radius: 5px;
          cursor: pointer;
        ">${i}</button>`;
      }
    }
    paginationControls.innerHTML = html;
  }

  function updateEntryInfo(start, end, total) {
    entryInfo.textContent = `Showing ${start} to ${end} of ${total} entries`;
  }

  entriesPerPageSelect.addEventListener('change', () => {
    entriesPerPage = parseInt(entriesPerPageSelect.value);
    showPage(1);
  });

  function handleScrollEffects() {
    const cards = document.querySelectorAll('.fade-in');
    const trigger = window.innerHeight;

    cards.forEach(card => {
      const rect = card.getBoundingClientRect();
      if (rect.top <= trigger - 50) {
        card.classList.add('visible');
      }
    });

    scrollBtn.classList.toggle("show", window.scrollY > 300);
  }

  scrollBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  window.addEventListener("scroll", handleScrollEffects);
  window.addEventListener("load", () => {
    showPage(1);
    handleScrollEffects();
  });
</script>

</body>
</html>
