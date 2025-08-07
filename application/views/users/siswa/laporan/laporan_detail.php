<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>
<style>


  .panel-body {
    padding: 20px;
  }

  table th, table td {
    padding: 8px;
  }

  .foto-profil {
    max-width: 140px;
    max-height: 180px;
    width: auto;
    height: auto;
    display: block;
    margin: 10px auto;
    object-fit: cover;
    border-radius: 10px;
    
  }

  .foto-kegiatan {
    max-width: 100%;
    max-height: 250px;
    height: auto;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 10px;

  }

  @media (max-width: 768px) {
    .foto-kegiatan {
      max-height: 180px;
    }

    .foto-profil {
      max-height: 150px;
    }

    .foto-kegiatan {
      max-height: 180px;
    }
  }
</style>

<body>


<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $v_laporan->row();
$cek_status = $this->db->get_where('tbl_penempatan', "kdpenempatan='$user->kdpenempatan'")->row()->status;
if ($cek_status != 'diterima') {
  redirect('web/error_not_found');
}?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF;">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold">Detail Laporan <span style="font-weight: 900;"><?php echo ucwords($user->nama_lengkap); ?></span></legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <center>
                <img src="foto/<?php if ($user->foto == '') { echo'default.png'; }else{echo "siswa/$user->foto";}?>" alt="<?php echo $user->nama_lengkap; ?>" class="foto-profil">

                  <br>
                  <b>
                    <?php echo $user->nis; ?> <br>
                    <?php echo ucwords($user->nama_lengkap); ?>
                  </b>
                </center>
                <hr>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>NIS</b></th>
                        <td width="2%"><b>:</b>&nbsp;</td>
                        <td> <b><?php echo $user->nis; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Lengkap</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo ucwords($user->nama_lengkap); ?></td>
                      </tr>
                      <tr>
                        <th><b>Kelas</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <?php $kelas = $this->db->get_where('tbl_kelas', "kdkelas='$user->kdkelas'")->row();
                          echo $kelas->nama; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Jurusan</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <?php $jurusan = $this->db->get_where('tbl_jurusan', "kdjurusan='$kelas->kdjurusan'")->row();
                          echo $jurusan->nama; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Nama Pembimbing</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <b>
                          <?php $nama_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$user->kdpemb'")->row();
                          echo $nama_pemb->nama_lengkap; ?>
                          </b>
                        </td>
                      </tr>
                  </table>

                  <hr>
                  <h3 align="center"> Laporan PKL</h3>
                  <hr>
                  <table width="100%" border=0>
                      <tr>
                        <th><b>Tanggal</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo users::format($user->tanggal); ?></td>
                      </tr>
                      <tr>
                        <th><b>File</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td>
                          <?php if ($user->file == '' or $user->file == '-'){ ?>
                                  -
                          <?php }else{ ?>
                                  <a href="lampiran/laporan/<?php echo $user->file; ?>" target="_blank"><?php echo $user->file; ?></a>
                          <?php } ?>
                        </td>
                      </tr>
                     
                  </table>
                  </center>
                <hr>
                  <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content --></div>

    </body>
    </html>
