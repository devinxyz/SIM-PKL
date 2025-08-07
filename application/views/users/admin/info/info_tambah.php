<script src="assets/js/jquery-ui.js"></script>
<script>
  $(function() {
    $("#datepicker").datepicker();
  });
</script>

<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat" style="border-radius: 20px; border-top: 5px solid #007BFF;">
        <div class="panel-heading" style="border-radius: 20px;">
          <h5 class="panel-title">Tambah Informasi</h5>
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>

        <hr style="margin:0px;">
        <div class="panel-body">
          <?php echo $this->session->flashdata('msg'); ?>

          <form action="" method="post" enctype="multipart/form-data">
            <div class="col-sm-6 pull-left" style="margin-top: 10px;">
              <label for="nama"><b>Label</b></label>
              <select class="form-control cari_label" name="label" required>
                <option value="">Semua</option>
                <?php foreach ($v_label->result() as $baris): ?>
                  <option value="<?php echo $baris->kdlabel; ?>"><?php echo $baris->nama_label; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="col-sm-6 pull-left" style="margin-top: 10px;">
              <label for="datepicker"><b>Tanggal</b></label>
              <input type="text" class="form-control daterange-single" id="datepicker" name="tanggal" value="<?php echo date('d-m-Y'); ?>" placeholder="Tanggal-Bulan-Tahun" maxlength="10" required>
            </div>

            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="judul"><b>Judul</b></label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
            </div>

            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="deskripsi"><b>Deskripsi</b></label>
              <textarea class="form-control summernote" id="deskripsi" name="deskripsi" rows="11" placeholder="Deskripsi" required></textarea>
            </div>

            <div class="col-sm-12 pull-left" style="margin-top: 0px;">
              <label for="gambar"><b>Gambar</b></label>
              <input type="file" class="form-control" id="gambar" name="gambar" required>
              <b style="color:red;font-size:10px;">*Max Size: 5 MB | Format: JPG, PNG, BMP</b>
            </div>

            <!-- Tambahan Upload Dokumen -->
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="file"><b>File Dokumen (Opsional)</b></label>
              <input type="file" class="form-control" id="file" name="file">
              <b style="color:red;font-size:10px;">*Max Size: 50 MB | Format: PDF, DOCX</b>
            </div>

            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <hr>
              <a href="javascript:history.back()" class="btn btn-info">Kembali</a>
              <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
              <button type="reset" class="btn btn-default" style="float:right;margin-right:10px;">Reset</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
  </div>
</div>
