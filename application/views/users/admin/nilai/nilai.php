<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: whitesmoke;
    
  }

  .table-responsive {
    overflow-x: auto;
  }

  table.table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
  }

  table.table th,
  table.table td {
    border-bottom: 1px solid #cce5ff;
    padding: 12px 16px;
    vertical-align: middle;
    text-align: left;
  }

  table.table th {
    background-color: #007BFF;
    color: white;
  }

  table.table tr:hover {
    background-color: #e9f5ff;
  }

  table.table img {
    width: 70px;
    height: 70px;
    object-fit: contain;
    border-radius: 6px;
    border: 1px solid #eee;
    padding: 4px;
    background-color: #fff;
  }

  .btn-xs {
    font-size: 12px;
    padding: 5px 8px;
    border-radius: 6px;
    margin-right: 3px;
  }

  @media (max-width: 768px) {
    table.table th,
    table.table td {
      font-size: 13px;
      padding: 10px;
    }

    table.table img {
      width: 50px;
      height: 50px;
    }
  }
</style>
<body>
  


<?php
$sub_menu3 = strtolower($this->uri->segment(3)); ?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF;">
        <div class="panel-heading" style="border-radius: 20px;">
          <h6 class="panel-title"><i class="icon-star-full2"></i> Data Nilai PKL <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
           </div>
        </div>

        <div class="panel-body">
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <!-- <a href="users/nilai_praktik/t" class="btn btn-primary"><i class="icon-plus22"></i> Isi Nilai</a> -->

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Periode</th>
                      <th>Nilai</th>
                      <th class="text-center" width="140">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_nilai->result() as $baris) {
                        $cek_kelas = $this->db->get_where('tbl_kelas', "kdkelas='$baris->kdkelas'")->row();
                        if ($cek_kelas->kdkelas == '') {
                            $kelas = '-';
                        }else{
                            $kelas =$cek_kelas->nama;
                        }
                        $cek_jurusan = $this->db->get_where('tbl_jurusan', "kdjurusan='$cek_kelas->kdjurusan'")->row();
                        if ($cek_jurusan->kdjurusan == '') {
                            $jurusan = '-';
                        }else{
                            $jurusan =$cek_jurusan->nama;
                        }
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->nis; ?></td>
                          <td><?php echo $baris->nama_lengkap; ?></td>
                          <td><?php echo $kelas; ?> <?php echo $jurusan; ?></td>
                          <td><?php echo $baris->keterangan; ?></td>
                          <td><?php echo $baris->nilai; ?></td>
                          <td>
                            <a href="users/nilai_praktik/d/<?php echo $baris->kdnilai; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                            <a href="users/nilai_praktik/h/<?php echo $baris->kdnilai; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="icon-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                      } ?>
                  </tbody>
                </table>


          </div>
        </div>
      </div>

      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
    </body>
    </html>