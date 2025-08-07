<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>
<style>
  .foto-profil {
    max-width: 140px;
    max-height: 180px;
    width: auto;
    height: auto;
    display: block;
    margin: 10px auto;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  @media (max-width: 768px) {
    .foto-profil {
      max-height: 150px;
    }
  }
</style>

<body>
  

<?php
error_reporting(0);
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $v_nilai->row();

$cek_pembimbing = $this->db->get_where('tbl_pemb', "kdpemb='$user->kdpemb'")->row();
if ($cek_pembimbing->kdpemb == '') {
    $nama_pembimbing = '-';
}else{
  $nama_pembimbing = $cek_pembimbing->nama_lengkap;
}
$cek_industri = $this->db->get_where('tbl_industri', "kdind='$user->kdind'")->row();
if ($cek_industri->kdind == '') {
    $nama_industri = '-';
    $bidang_kerja  = '-';
}else{
    $nama_industri = $cek_industri->nama_industri;
    $bidang_kerja  = $cek_industri->bidang_kerja;
}
?>
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
                <legend class="text-bold"> Detail Nilai <?php echo $user->nama_lengkap; ?></legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <center>
                <img src="foto/<?php if ($user->foto == '') { echo'default.png'; }else{echo "siswa/$user->foto";}?>" alt="<?php echo $user->nama_lengkap; ?>" class="foto-profil">
                  <br>
                  <b>
                    <?php echo $user->nis; ?> <br>
                    <?php echo $user->nama_lengkap; ?>
                  </b>
                </center>
                <hr>

                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Telp</b></th>
                        <td width="2%"><b>:</b></td>
                        <td>&nbsp; <?php echo $user->telp; ?></td>
                      </tr>
                      <tr>
                        <th><b>Kelas</b></th>
                        <td><b>:</b></td>
                        <td>&nbsp;
                          <?php $kelas = $this->db->get_where('tbl_kelas', "kdkelas='$user->kdkelas'")->row();
                          echo $kelas->nama; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Jurusan</b></th>
                        <td><b>:</b></td>
                        <td>&nbsp;
                          <?php $jurusan = $this->db->get_where('tbl_jurusan', "kdjurusan='$kelas->kdjurusan'")->row();
                          echo $jurusan->nama; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>NIP Pembimbing</b></th>
                        <td><b>:</b></td>
                        <td>&nbsp; <b><?php echo $cek_pembimbing->nip; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Pembimbing</b></th>
                        <td><b>:</b></td>
                        <td>&nbsp; <b><?php echo ucwords($nama_pembimbing); ?></b></td>
                      </tr>
                  </table>

                <hr>

                  <h3 align="center">Tempat PKL</h3>
                  <hr>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Nama Industri</b></th>
                        <td width="2%"><b>:</b>&nbsp; </td>
                        <td> <b><?php echo $nama_industri; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Bidang Kerja</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($bidang_kerja); ?></td>
                      </tr>
                  </table>

                <hr>

                  <h3 align="center">Nilai PKL</h3>
                  <hr>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Periode</b></th>
                        <td width="2%"><b>:</b>&nbsp; </td>
                        <td> <b><?php echo ucwords($user->keterangan); ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nilai</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo $user->nilai; ?></td>
                      </tr>
                  </table>

                <hr>
                  <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->

    </body>
    </html>
