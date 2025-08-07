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

<?php $sub_menu3 = strtolower($this->uri->segment(3)); ?>

<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF;">
        <div class="panel-heading" style="border-radius: 20px;">
          <h6 class="panel-title"><i class="fa-solid fa-city"></i> Data Industri</h6>
        </div>

        <div class="panel-body">
          <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
              <li class="<?php if($sub_menu3 == ''){echo 'active';} ?>"><a href="#tbl_industri" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-building-circle-check"></i> Industri</a></li>
              <!-- <li class="<?php if($sub_menu3 == 'tbl_pembind'){echo 'active';} ?>"><a href="#tbl_pembind" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-building-user"></i> Pembimbing Industri</a></li> -->
            </ul>

            <div class="tab-content">
              <!-- TAB INDUSTRI -->
              <div class="tab-pane <?php if($sub_menu3 == ''){echo 'active';} ?>" id="tbl_industri">
                <?php echo $this->session->flashdata('msg'); ?>
                <a href="users/industri/t" class="btn btn-primary"><i class="fa-solid fa-building-circle-check"></i> Tambah Industri</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th width="100">Foto</th>
                      <th>Nama Industri</th>
                      <th>Bidang Kerja</th>
                      <th>MOU</th>
                      <th class="text-center" width="170">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($v_industri->result() as $baris) {
                    ?>
                      <tr>
                        <td><?php echo $no.'.'; ?></td>
                        <td><img src="foto/industri/<?php echo $baris->foto; ?>" alt="industri"></td>
                        <td><?php echo $baris->nama_industri; ?></td>
                        <td><?php echo $baris->bidang_kerja; ?></td>
                        <td>
                          <?php if (!empty($baris->mou)) { ?>
                            <a href="lampiran/mou/<?php echo $baris->mou; ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-file"></i></a>
                          <?php } else { ?>
                            <span class="label label-default">-</span>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="users/industri/d/<?php echo $baris->kdind; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                          <a href="users/industri/e/<?php echo $baris->kdind; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                          <a href="users/industri/h/<?php echo $baris->kdind; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                        </td>
                      </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>

              <!-- TAB PEMBIMBING INDUSTRI -->
               
              <!-- <div class="tab-pane <?php if($sub_menu3 == 'tbl_pembind'){echo 'active';} ?>" id="tbl_pembind">
                <?php echo $this->session->flashdata('msg_pembind'); ?>
                <a href="users/industri/t_pembind" class="btn btn-primary"><i class="fa-solid fa-building-user"></i> Tambah Pembimbing </a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>Industri</th>
                      <th>Wilayah</th>
                      <th class="text-center" width="130">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($v_pembind->result() as $baris) {
                      $nama_industri = $this->db->get_where('tbl_industri', "kdind='$baris->kdind'")->row()->nama_industri;
                    ?>
                      <tr>
                        <td><?php echo $no.'.'; ?></td>
                        <td><?php echo $baris->username; ?></td>
                        <td><?php echo $baris->nama_lengkap; ?></td>
                        <td><?php echo $nama_industri; ?></td>
                        <td><?php echo $baris->wilayahind; ?></td>
                        <td>
                          <a href="users/industri/d_pembind/<?php echo $baris->kdpembind; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                          <a href="users/industri/h_pembind/<?php echo $baris->kdpembind; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                        </td>
                      </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div> -->
              
              <!-- End Tab Pembimbing -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JS untuk Print MOU -->
<script>
  function printMOU(url) {
    var printWindow = window.open(url, '_blank');
    printWindow.focus();
    printWindow.onload = function () {
      printWindow.print();
    };
  }
</script>

</body>
</html>
