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
  }


  @media (max-width: 768px) {
    .foto-profil {
      max-height: 150px;
    }

  }
</style>
<body>
  

<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $v_siswa->row();
$cek1 = $this->db->get_where('tbl_penempatan', "nis='$user->nis'");
$cek2 = $this->db->get_where('tbl_penempatan', "nis='$user->nis'")->row();
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

            <div class="panel-body" style="border-radius: 20px;">

              <fieldset class="content-group">
                <legend class="text-bold"> Detail Siswa <?php echo ucwords($user->nama_lengkap); ?></legend>
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
                        <th><b>Telp</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo $user->telp; ?></td>
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
                        <th><b>Pembimbing Sekolah</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <b>
                          <?php $nama_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$user->kdpemb'")->row();
                          echo $nama_pemb->nama_lengkap; ?>
                          </b>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Penempatan</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <b>
                            <?php
                            if ($cek1->num_rows() == 0) {
                                $lokasi = '-';
                            }else{
                            $cek_lokasi = $this->db->get_where('tbl_industri', "kdind='$cek2->kdind'")->row();
                              if ($cek2->status == 'proses'){
                                $lokasi = '-';
                              }else{
                                $lokasi = $cek_lokasi->nama_industri;  
                              }
                            }
                            echo $lokasi; 
                          ?>
                          </b>
                        </td>
                      </tr>
                  </table>
                <hr>
                  <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
    </body>
</html>
