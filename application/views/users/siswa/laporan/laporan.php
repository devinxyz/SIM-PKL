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
          <h6 class="panel-title"><i class="fa-solid fa-book"></i> Data Laporan PKL <b><?php echo ucwords($user->row()->nama_lengkap); ?></b> <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
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
                <a href="users/laporan_pkl/t" class="btn btn-primary mb-10"><i class="fa-solid fa-book"></i> Laporan PKL</a>
                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>NIS</th>
                      <th>Kelas</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Catatan</th>
                      <th class="text-center" width="100">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($v_laporan->result() as $baris) {
                      $cek_status = $this->db->get_where('tbl_penempatan', "kdpenempatan='$baris->kdpenempatan'")->row()->status;
                      if ($cek_status == 'diterima') {
                        $cek_kelas = $this->db->get_where('tbl_kelas', "kdkelas='$baris->kdkelas'")->row();
                        $kelas = $cek_kelas ? $cek_kelas->nama : '-';
                        $cek_jurusan = $this->db->get_where('tbl_jurusan', "kdjurusan='$cek_kelas->kdjurusan'")->row();
                        $jurusan = $cek_jurusan ? $cek_jurusan->nama : '-';
                        $cek_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$baris->kdpemb'")->row();
                        $nama_pemb = $cek_pemb ? $cek_pemb->nama_lengkap : '-';

                        // Status Verifikasi
                        $status_verifikasi = $baris->status_verifikasi;
                        if ($status_verifikasi == 'diterima') {
                          $label_status = '<span class="label label-success">Diterima</span>';
                        } elseif ($status_verifikasi == 'ditolak') {
                          $label_status = '<span class="label label-danger">Ditolak</span>';
                        } else {
                          $label_status = '<span class="label label-primary">Pending</span>';
                        }

                        // Catatan
                        $catatan = ($status_verifikasi == 'ditolak') ? nl2br(htmlspecialchars($baris->catatan_verifikasi)) : '-';
                    ?>
                        <tr>
                          <td><?php echo $no . '.'; ?></td>
                          <td><?php echo $baris->nis; ?></td>
                          <td><?php echo $kelas . ' ' . $jurusan; ?></td>
                          <td><?php echo $baris->tanggal; ?></td>
                          <td><?php echo $label_status; ?></td> <!-- Kolom Status -->
                          <td><?php echo $catatan; ?></td> <!-- Kolom Catatan -->
                          <td>
                            <div style="display: flex; justify-content: flex-end; gap: 5px;">
                              <a href="users/laporan_pkl/d/<?php echo $baris->kdlaporan; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                              <a href="users/laporan_pkl/h/<?php echo $baris->kdlaporan; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')"><i class="icon-trash"></i></a>
                            </div>
                          </td>
                        </tr>
                    <?php
                        $no++;
                      }
                    }
                    ?>
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

