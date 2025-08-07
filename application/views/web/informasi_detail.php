<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>

<style>
  .info-wrapper {
    display: flex;
    justify-content: center;
    padding: 30px 20px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 5rem;
  }

  .info-main-card {
    width: 100%;
    max-width: 720px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    border-top: 5px solid #007BFF;
  }

  .info-title-header {
    font-size: 20px;
    font-weight: 600;
    text-align: start;
    color: #222;
    padding: 20px 0px 0px 20px;
  }

  .info-image {
    border-top: 2px solid #eee;
    padding: 20px;
    width: 100%;
    height: auto;
    display: block;
    object-fit: contain;
    border-bottom: 2px solid #eee;
  }

  .info-content {
    padding: 20px;
  }

  .info-content h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #222;
  }

  .info-meta {
    font-size: 13px;
    color: gray;
    margin-bottom: 15px;
  }

  .info-meta i {
    font-size: 12px;
    margin-right: 5px;
  }

  .info-description {
    font-size: 14px;
    line-height: 1.6;
    color: #444;
  }

  @media (max-width: 768px) {
    .info-content h2 {
      font-size: 20px;
    }

    .info-description {
      font-size: 13px;
    }

    .info-title-header {
      font-size: 20px;
    }
  }

  @media (max-width: 480px) {
    .info-content {
      padding: 16px;
    }

    .info-content h2 {
      font-size: 18px;
    }

    .info-description {
      font-size: 13px;
    }

    .info-meta {
      font-size: 12px;
    }

    .info-title-header {
      font-size: 18px;
    }
  }
</style>



<body>
<?php $baris = $v_info->row(); ?>
<div class="info-wrapper">
  <div class="info-main-card">
    <div class="info-title-header">Detail Informasi</div>

    <!-- Gambar -->
    <?php if (!empty($baris->gambar) && file_exists($baris->gambar)) { ?>
      <img src="<?php echo base_url($baris->gambar); ?>" alt="gambar" class="info-image">
    <?php } ?>

    <!-- Isi Konten -->
    <div class="info-content">
      <h2><?php echo $baris->judul; ?></h2>

      <div class="info-meta">
        <i class="glyphicon glyphicon-user"></i> <?php echo $baris->penulis; ?>&nbsp;&nbsp;
        <i class="glyphicon glyphicon-tags"></i> <?php echo $baris->nama_label; ?>&nbsp;&nbsp;
        <i class="glyphicon glyphicon-calendar"></i> <?php echo $this->Mcrud->format($baris->tanggal); ?>
      </div>

      <div class="info-description">
        <?php echo $baris->deskripsi; ?>
      </div>
<br>
      <!-- Dokumen (jika ada) -->
      <?php if (!empty($baris->file) && file_exists($baris->file)) { ?>
        <div class="info-download mt-3">
          <a href="<?php echo base_url($baris->file); ?>" target="_blank" class="btn btn-primary">
            <i class="glyphicon glyphicon-download-alt"></i> Download Dokumen
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</body>

</html>