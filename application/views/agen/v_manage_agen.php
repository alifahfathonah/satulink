<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
<div class="page-wrapper">
    <section id="wrapper">
		<!-- ============================================================== -->
		<!-- Container fluid  -->
		<!-- ============================================================== -->
		<div class="container-fluid">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="row page-titles">
				<div class="col-md-5 col-8 align-self-center">
					<h3 class="text-themecolor">Manage Management</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Agen</a></li>
						<li class="breadcrumb-item active">Manage Agen</li>
					</ol>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Start Page Content -->
			<!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Manage Agen -->
      <!-- ============================================================== -->
      <div class="row" id="formAddAgen">
          <div class="col-12">
              <div class="card wizard-content">
                  <div class="card-body">
                      <h4 class="card-title">Manage Agen</h4>
                      <?php
                      if(isset($data_agen)){
                        foreach($data_agen as $row){
                      ?>
                      <a href="javascript:;" class="btn btn-success text-white"  onclick="return isconfirm('<?php echo site_url("agen/reset_pin/".$row->kode_agen); ?>');">Reset PIN</a>
                      <?php echo form_open('agen/save_edit_agen','id="form-wizard" method="post" class="validation-wizard wizard-circle"'); ?>

                          <!-- Step 1 -->
                          <h6>Step 1 - Data Pribadi</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label> Kode Personal Agen : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kode_personal_agen" readonly value="<?php echo $row->kode_personal_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Name : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama" maxlength="50" value="<?php echo $row->nama;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Nomor KTP : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nomor_ktp" maxlength="16" value="<?php echo $row->nomor_ktp;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Nomor NPWP : </label>
                                          <input type="text" class="form-control" name="nomor_npwp" maxlength="16" value="<?php echo $row->nomor_npwp;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Jenis Kelamin : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="jenis_kelamin">
                                              <option value="">Jenis Kelamin</option>
                                              <option value="L">Laki-Laki</option>
                                              <option value="P">Perempuan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Pendidikan Terakhir : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="pendidikan_terakhir">
                                              <option value="">Pendidikan Terakhir</option>
        																			<option value="SMP">SMP</option>
        																			<option value="SMA">SMA</option>
        																			<option value="D1">D1</option>
        																			<option value="D3">D3</option>
        																			<option value="S1">S1</option>
        																			<option value="S2">S2</option>
        																			<option value="S3">S3</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Tempat Lahir : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="tempat_lahir" maxlength="30" value="<?php echo $row->tempat_lahir;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Tanggal Lahir : <span class="danger">*</span> </label>
                                          <input type="date" class="form-control required" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kewarganegaraan : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan ;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Pekerjaan : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="pekerjaan">
                                              <option value="">Pekerjaan</option>
        																			<option value="1">Belum Bekerja</option>
        																			<option value="2">Wiraswasta</option>
        																			<option value="3">Karyawan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Status Perkawinan : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="status_perkawinan">
                                              <option value="">Status Perkawinan</option>
        																			<option value="1">Belum Menikah</option>
        																			<option value="2">Menikah</option>
        																			<option value="3">Duda</option>
        																			<option value="4">Janda</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label> Email : <span class="danger">*</span> </label>
                                          <input type="email" class="form-control required" name="email_personal_agen" value="<?php echo $row->email_personal_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nomor Telepon :</label>
                                          <input type="tel" class="form-control required" name="nomor_telepon_personal_agen" value="<?php echo $row->nomor_telepon_personal_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat :</label>
                                          <textarea name="alamat_personal_agen" rows="5" class="form-control required"><?php echo $row->alamat_personal_agen;?></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi :</label>
                                          <input type="text" class="form-control required" name="provinsi_personal_agen" value="<?php echo $row->provinsi_personal_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota :</label>
                                          <input type="text" class="form-control required" name="kota_personal_agen" value="<?php echo $row->kota_personal_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan :</label>
                                          <input type="text" class="form-control required" name="kecamatan_personal_agen" value="<?php echo $row->kecamatan_personal_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan :</label>
                                          <input type="text" class="form-control required" name="kelurahan_personal_agen" value="<?php echo $row->kelurahan_personal_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos :</label>
                                          <input type="text" class="form-control required" name="kode_pos_personal_agen" value="<?php echo $row->kode_pos_personal_agen;?>"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 2 -->
                          <h6>Step 2 - Data Usaha</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label> Kode Usaha Agen : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kode_usaha_agen" readonly value="<?php echo $row->kode_usaha_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label> Nama Usaha : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_usaha" value="<?php echo $row->nama_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label> Jenis Usaha : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="jenis_usaha">
                                              <option value="">Jenis Usaha</option>
        																			<option value="1">Pulsa</option>
        																			<option value="2">Makanan</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Email Usaha : <span class="danger">*</span> </label>
                                          <input type="email" class="form-control required" name="email_usaha" value="<?php echo $row->email_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Nomor Telepon Usaha :</label>
                                          <input type="tel" class="form-control required" name="nomor_telepon_usaha" value="<?php echo $row->nomor_telepon_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Tanggal Mulai Usaha : <span class="danger">*</span> </label>
                                          <input type="date" class="form-control required" name="tanggal_mulai_usaha" value="<?php echo $row->tanggal_mulai_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Penghasilan Pertahun :</label>
                                          <input type="text" class="form-control required" name="penghasil_pertahun" value="<?php echo $row->penghasil_pertahun;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat Usaha :</label>
                                          <textarea name="alamat_usaha" rows="5" class="form-control required"><?php echo $row->alamat_usaha;?></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi Usaha :</label>
                                          <input type="text" class="form-control required" name="provinsi_usaha" value="<?php echo $row->provinsi_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota Usaha :</label>
                                          <input type="text" class="form-control required" name="kota_usaha" value="<?php echo $row->kota_usaha;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan Usaha :</label>
                                          <input type="text" class="form-control required" name="kecamatan_usaha" value="<?php echo $row->kecamatan_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan Usaha :</label>
                                          <input type="text" class="form-control required" name="kelurahan_usaha" value="<?php echo $row->kelurahan_usaha;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos Usaha :</label>
                                          <input type="text" class="form-control required" name="kode_pos_usaha" value="<?php echo $row->kode_pos_usaha;?>"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 3 -->
                          <h6>Step 3 - Data Rekening</h6>
                          <section>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label> Kode Rekening Agen : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kode_rekening_agen" readonly value="<?php echo $row->kode_rekening_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Jenis Rekening : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="jenis_rekening">
                                              <option value="">Jenis Rekening</option>
                                              <option value="1">Tahapan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Nomor Rekening : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nomor_rekening" value="<?php echo $row->nomor_rekening;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Nama Pemilik Rekening : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_pemilik_rekening" value="<?php echo $row->nama_pemilik_rekening;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Cabang Terdekat : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="cabang_terdekat" value="<?php echo $row->cabang_terdekat;?>"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 4 -->
                          <h6>Step 4 - Data Keagenan</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label> Kode Agen : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kode_agen" readonly value="<?php echo $row->kode_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Name Keagenan : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_keagenan" maxlength="50" value="<?php echo $row->nama_keagenan;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Wilayah Operasional : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="wilayah_operasional" value="<?php echo $row->wilayah_operasional;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Longitude : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="longitude" value="<?php echo $row->longitude;?>"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Latitude : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="latitude" value="<?php echo $row->latitude;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nama Virtual Account : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_virtual_account" value="<?php echo $row->nama_virtual_account;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nomor Virtual Account :<span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nomor_virtual_account" value="<?php echo $row->nomor_virtual_account;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat Keagenan :</label>
                                          <textarea name="alamat_agen" rows="5" class="form-control required"><?php echo $row->alamat_agen;?></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi Keagenan :</label>
                                          <input type="text" class="form-control required" name="provinsi_agen" value="<?php echo $row->provinsi_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota Keagenan :</label>
                                          <input type="text" class="form-control required" name="kota_agen" value="<?php echo $row->kota_agen;?>"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan Keagenan :</label>
                                          <input type="text" class="form-control required" name="kecamatan_agen" value="<?php echo $row->kecamatan_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan Keagenan :</label>
                                          <input type="text" class="form-control required" name="kelurahan_agen" value="<?php echo $row->kelurahan_agen;?>"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos Keagenan :</label>
                                          <input type="text" class="form-control required" name="kode_pos_agen" value="<?php echo $row->kode_pos_agen;?>"> </div>
                                  </div>
                              </div>
                          </section>
                    <?php }}
                    if(empty($data_agen)){
                      echo "Tidak ada data";
                    } ?>
  									<?php echo form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Manage Agen -->
      <!-- ============================================================== -->
      <script type="text/javascript">
      function isconfirm(url_val){
          if(confirm('Yakin Akan Mereset PIN Agen Ini ?') == false)
          {
              return false;
          }
          else
          {
              location.href=url_val;
          }
      }
      </script>
