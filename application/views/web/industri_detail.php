<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      
    }

    .container {
      border-top: 5px solid #007BFF; 
      max-width: 700px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .img-logo {
      max-width: 180px;
      height: auto;
      object-fit: contain;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    h5 {
      text-align: left;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table tr {
      transition: background-color 0.2s;
      cursor: pointer;
    }

    table th, table td {
      padding: 10px 8px;
      text-align: left;
      vertical-align: top;
      font-size: 15px;
      color: #333;
    }

    table th {
      width: 35%;
      font-weight: 600;
    }

    hr {
      margin: 25px 0;
    }

    @media (max-width: 768px) {
      .container {
        padding: 20px;
        margin: 20px;
      }

      table th, table td {
        font-size: 14px;
      }

      .img-logo {
        max-width: 140px;
      }
    }
  </style>
</head>
<body>
<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $v_industri->row(); ?>
<div class="container">
  <h5>Detail : <?= ucwords($user->nama_industri); ?></h5>

  <center>
    <img src="<?= base_url('foto/' . ($user->foto ? 'industri/' . $user->foto : 'default.png')) ?>" alt="<?= $user->nama_industri; ?>" class="img-logo">
  </center>

  <hr>

  <table>
    <tr><th>Nama Industri</th><td><b><?= $user->nama_industri; ?></b></td></tr>
    <tr><th>Bidang Kerja</th><td><?= ucwords($user->bidang_kerja); ?></td></tr>
    <tr><th>Deskripsi</th><td><?= ucwords($user->deskripsi); ?></td></tr>
    <tr><th>Alamat</th><td><?= ucwords($user->alamat_industri); ?></td></tr>
    <tr><th>Wilayah</th><td><?= ucwords($user->wilayah); ?></td></tr>
    <tr><th>Kontak</th><td><?= ucwords($user->telepon); ?></td></tr>
    <tr><th>Website</th><td><?= ucwords($user->website); ?></td></tr>
    <tr><th>Email</th><td><?= ucwords($user->email); ?></td></tr>
    <tr><th>Syarat</th><td><?= ucwords($user->syarat); ?></td></tr>
    <tr>
   <th>Dokumen MOU</th>
                        <td>
                          <?php if (!empty($user->mou)) { ?>
                            <a href="lampiran/mou/<?php echo $user->mou; ?>" target="_blank" class="btn btn-primary">
                              <i class="glyphicon glyphicon-download-alt"></i> Download MOU
                            </a>
                          <?php } else { ?>
                            <span class="label label-default">Tidak tersedia</span>
                          <?php } ?>
                        </td>
                      </tr>                     
  </table>
</div>
</body>
</html>
