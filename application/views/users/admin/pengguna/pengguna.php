<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK NEGERI 1 PADAHERANG</title>
</head>
<body>
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
          <h6 class="panel-title"><i class="fa-solid fa-users"></i> Data Pengguna <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
           </div>
        </div>

        <div class="panel-body">
          <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
              <li class="<?php if($sub_menu3 == ''){echo 'active';} ?>"><a href="#tbl_pemb" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-user-tie"></i> Pembimbing</a></li>
              <li class="<?php if($sub_menu3 == 'tbl_siswa'){echo 'active';} ?>"><a href="#tbl_siswa" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-graduation-cap"></i> Siswa</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane <?php if($sub_menu3 == ''){echo 'active';} ?>" id="tbl_pemb">

                <?php
                echo $this->session->flashdata('msg_pemb');
                ?>
                <a href="users/pengguna/t_pemb" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Pembimbing Baru</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>NIP</th>
                      <th class="text-center" width="130">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_pemb->result() as $baris) {
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->username; ?></td>
                          <td><?php echo $baris->nama_lengkap; ?></td>
                          <td><?php echo $baris->nip; ?></td>
                          <td>
                            <a href="users/pengguna/d_pemb/<?php echo $baris->kdpemb; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                            <!-- <a href="users/pengguna/e_pemb/<?php echo $baris->kdpemb; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a> -->
                            <a href="users/pengguna/h_pemb/<?php echo $baris->kdpemb; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                      } ?>
                  </tbody>
                </table>

              </div>

              <div class="tab-pane <?php if($sub_menu3 == 'tbl_siswa'){echo 'active';} ?>" id="tbl_siswa">

                <?php
                echo $this->session->flashdata('msg_siswa');
                ?>
                <a href="users/pengguna/t_siswa" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Siswa Baru</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>NIS</th>
                      <th>Nama Lengkap</th>
                      <th>Telp</th>
                      <th>Nama Pembimbing</th>
                      <th class="text-center" width="130">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_siswa->result() as $baris) {
                        $nama_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$baris->kdpemb'")->row()->nama_lengkap;
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->nis; ?></td>
                          <td><?php echo $baris->nama_lengkap; ?></td>
                          <td><?php echo $baris->telp; ?></td>
                          <td><?php echo $nama_pemb; ?></td>
                          <td>
                            <a href="users/pengguna/d_siswa/<?php echo $baris->nis; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                            <!-- <a href="users/pengguna/e_siswa/<?php echo $baris->nis; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a> -->
                            <a href="users/pengguna/h_siswa/<?php echo $baris->nis; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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
        </div>
      </div>

      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
    </body>
    </html>
