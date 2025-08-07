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

<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->

  <div class="row">
            <!-- Basic datatable -->
            <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF; ">
              <div class="panel-heading" style="border-radius: 20px;">
                <h6 class="panel-title"><i class="fa-solid fa-newspaper"></i> Kelola Informasi <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
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
                    <li class="<?php if($sub_menu3 == ''){echo 'active';} ?>"><a href="#t_info" data-toggle="tab" aria-expanded="true"><i class="fa-solid fa-newspaper"></i> INFORMASI</a></li>
                  </ul>

                  <div class="tab-content">
                    <div class="tab-pane <?php if($sub_menu3 == ''){echo 'active';} ?>" id="t_info">

                      <?php
                      echo $this->session->flashdata('msg_t');
                      ?>

                      <a href="users/info/t" class="btn btn-primary" style="margin-bottom:10px;">Tambah <i class="fa-solid fa-newspaper"></i></a>
                      <label class="label " style="float:right;"> &nbsp; 
                          <select class="label label-default cari_label" name="label" onchange="tbl_info(this.value)">
                            <option value="0">Semua</option>
                            <?php foreach ($v_label->result() as $baris): ?>
                              <option value="<?php echo $baris->kdlabel; ?>"><?php echo $baris->nama_label; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </label>
                   
                          <div id='tbl_info'></div>

                    </div>

                    
                  </div>

                </div>
              </div>
            </div>

    </div>
    <!-- /dashboard content -->

<script type="text/javascript">

  $(document).ready(function() {
    tbl_info();
    tbl_file();
  });

  function tbl_info(id_label)
  {
    $.ajax({
       url:"<?php echo site_url('users/data_info/')?>"+id_label,
       type: "GET",
       success:function(data){
         $("#tbl_info").html(data);
      }
    });
  }

  function tbl_file()
  {
    $.ajax({
       url:"<?php echo site_url('users/data_file/')?>",
       type: "GET",
       success:function(data){
         $("#tbl_file").html(data);
      }
    });
  }

  function reload_tbl_info()
  {
    id_label = $('select[name=label]').val();
    tbl_info(id_label);
  }

</script>

</body>
</html>