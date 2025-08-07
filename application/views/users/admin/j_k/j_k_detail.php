<?php
$user = $query; ?>
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
                <legend class="text-bold"> Detail Pengguna</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <center>
                  <img src="foto/default.png" alt="<?php echo $user->nama_lengkap; ?>" class="img-circle" width="176">
                  <br>
                  <b>
                    <?php if($user->level == "s_admin"){echo "Super Admin";}else{echo ucwords($user->level);} ?>
                  </b>
                </center>
                <hr>
                <table width="100%" border=0>
                    <tr>
                      <th width="30%"><b>Nama Pengguna</b></th>
                      <td width="2%"><b>:</b></td>
                      <td> <?php echo $user->username; ?></td>
                    </tr>
                    <tr>
                      <th><b>Nama Lengkap</b></th>
                      <td><b>:</b></td>
                      <td> <?php echo $user->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                      <th><b>Email</b></th>
                      <td><b>:</b></td>
                      <td> <?php echo $user->email; ?></td>
                    </tr>
                    <tr>
                      <th><b>Alamat</b></th>
                      <td><b>:</b></td>
                      <td> <?php echo $user->alamat; ?></td>
                    </tr>
                    <tr>
                      <th><b>Telepon</b></th>
                      <td><b>:</b></td>
                      <td> <?php echo $user->telp; ?></td>
                    </tr>
                    <tr>
                      <th><b>Pengalaman</b></th>
                      <td><b>:</b></td>
                      <td> <?php echo $user->pengalaman; ?></td>
                    </tr>
                </table>

                <hr>
                  <a href="users/pengguna" class="btn btn-primary"><< Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
