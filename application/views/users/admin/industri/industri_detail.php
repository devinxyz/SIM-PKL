<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>
<body>
<style>

  .img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 10px; 
  }


  .panel-body {
    padding: 20px;
  }

  table th, table td {
    padding: 10px;
  }
  

  table th {
    text-align: left;
  }

  table td {
    vertical-align: middle;
  }


  @media (max-width: 768px) {
    .panel-body {
      padding: 15px;
    }

    table th, table td {
      font-size: 14px;
    }

    .btn-default {
      font-size: 14px;
    }
  }
</style>

</body>
</html>

<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $query; ?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF; ">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold">
                  Detail <?php if ($sub_menu3 == 'd'){echo ucwords($user->nama_industri);}else{echo "Pembimbing Industri";} ?></legend>

                  <center>
                    <img src="foto/<?php if ($user->foto == '') { echo 'default.png'; } elseif ($sub_menu3 == 'd') { echo "industri/$user->foto"; } else { echo "pembind/$user->foto"; } ?>" alt="Foto" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px;">
                    <br>
                   
                  </center>

                  <hr>
                  <?php if ($sub_menu3 == 'd') {?>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Nama Industri</b></th>
                        <td width="2%"><b>:</b>&nbsp; </td>
                        <td> <b><?php echo $user->nama_industri; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Bidang Kerja</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->bidang_kerja); ?></td>
                      </tr>
                      <tr>
                        <th><b>Deskripsi</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->deskripsi); ?></td>
                      </tr>
                      <tr>
                        <th><b>Alamat Industri</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->alamat_industri); ?></td>
                      </tr>
                      <tr>
                        <th><b>Wilayah</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->wilayah); ?></td>
                      </tr>
                      <tr>
                        <th><b>Telepon</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->telepon); ?></td>
                      </tr>
                      <tr>
                        <th><b>Website</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->website); ?></td>
                      </tr>
                      <tr>
                        <th><b>Email</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->email); ?></td>
                      </tr>
                      <tr>
                        <th><b>Syarat</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->syarat); ?></td>
                      </tr>
                      <tr>
                        <th><b>Dokumen MOU</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <?php if (!empty($user->mou)) { ?>
                            <a href="lampiran/mou/<?php echo $user->mou; ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-file"></i></a>
                            <a href="lampiran/mou/<?php echo $user->mou; ?>" download class="btn btn-sm btn-success"><i class="fa-solid fa-download"></i></a>
                            <a href="javascript:void(0);" onclick="printMOU('lampiran/mou/<?php echo $user->mou; ?>')" class="btn btn-sm btn-warning"><i class="fa-solid fa-print"></i></a>
                          <?php } else { ?>
                            <span class="label label-default">Tidak tersedia</span>
                          <?php } ?>
                        </td>
                      </tr>

                  </table>
                  <?php
                }else{ ?>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Username</b></th>
                        <td width="2%"><b>:</b>&nbsp;</td>
                        <td> <b><?php echo $user->username; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Lengkap</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo ucwords($user->nama_lengkap); ?></td>
                      </tr>
                      <tr>
                        <th><b>Industri</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <?php $industri = $this->db->get_where('tbl_industri', "kdind='$user->kdind'")->row();
                          echo $industri->nama_industri; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Wilayah</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo $user->wilayahind; ?></td>
                      </tr>
                  </table>
                <?php
                } ?>
                <hr>
                  <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->

    <script>
  function printMOU(url) {
    var win = window.open(url, '_blank');
    win.focus();
    win.onload = function () {
      win.print();
    };
  }
</script>

