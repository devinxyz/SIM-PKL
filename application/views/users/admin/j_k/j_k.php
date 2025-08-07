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
          <h6 class="panel-title"><i class="fa-solid fa-landmark"></i> Data Jurusan & Kelas <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
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
              <li class="<?php if($sub_menu3 == ''){echo 'active';} ?>"><a href="#tbl_kelas" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-list-ol"></i> Kelas</a></li>
              <li class="<?php if($sub_menu3 == 'tbl_jurusan'){echo 'active';} ?>"><a href="#tbl_jurusan" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-list-check"></i> Jurusan</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane <?php if($sub_menu3 == ''){echo 'active';} ?>" id="tbl_kelas">

                <?php
                echo $this->session->flashdata('msg_kelas');
                ?>

                <form action="" method="post">
                  <div class="form-group">
                    <br>
                    <label class="control-label col-lg-2">Nama Kelas</label>
                    <div class="col-lg-4">
                      <input type="text" name="kelas" class="form-control" value="" placeholder="Nama Kelas" maxlength="100" required>
                    </div>
                    <div class="col-lg-4">
                      <select class="form-control cari_jurusan" name="jurusan" required style="width:100%;">
                        <option value="">-- Pilih Jurusan --</option>
                        <?php foreach ($v_jurusan->result() as $baris){ ?>
                          <option value="<?php echo $baris->kdjurusan; ?>"><?php echo $baris->nama; ?></option>
                        <?php }; ?>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="submit" name="btnsimpan" class="btn btn-primary" value="Tambah">
                    </div>
                    <br>
                    <br>
                  </div>
                </form>

                <div class="form-group">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>Nama Kelas</th>
                      <th>Nama Jurusan</th>
                      <th class="text-center" width="170">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_kelas->result() as $baris) {
                        $jurusan = $this->db->get_where('tbl_jurusan',"kdjurusan='$baris->kdjurusan'")->row()->nama;
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->nama; ?></td>
                          <td><?php echo $jurusan; ?></td>
                          <td>
                            <a href="users/j_k/e_kelas/<?php echo $baris->kdkelas; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                            <a href="users/j_k/h_kelas/<?php echo $baris->kdkelas; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                      } ?>
                  </tbody>
                </table>

              </div>

              <div class="tab-pane <?php if($sub_menu3 == 'tbl_jurusan'){echo 'active';} ?>" id="tbl_jurusan">

                <?php
                echo $this->session->flashdata('msg_jurusan');
                ?>

                <form action="" method="post">
                  <div class="form-group">
                    <br>
                    <label class="control-label col-lg-2">Nama Jurusan</label>
                    <div class="col-lg-8">
                      <input type="text" name="jurusan" class="form-control" value="" placeholder="Nama Jurusan" maxlength="100" required>
                    </div>
                    <div class="col-lg-2">
                      <input type="submit" name="btnsimpan" class="btn btn-primary" value="Tambah">
                    </div>
                    <br>
                    <br>
                  </div>
                </form>

                <div class="form-group">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>Nama Jurusan</th>
                      <th class="text-center" width="170">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_jurusan->result() as $baris) {
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->nama; ?></td>
                          <td>
                            <a href="users/j_k/e_jurusan/<?php echo $baris->kdjurusan; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                            <a href="users/j_k/h_jurusan/<?php echo $baris->kdjurusan; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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