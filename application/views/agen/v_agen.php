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
					<h3 class="text-themecolor">Agen Management</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Agen</a></li>
						<li class="breadcrumb-item active">List Agen</li>
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
      <!-- Start Add Agen -->
      <!-- ============================================================== -->
      <div class="row" id="formAddAgen" style="display:none;">
          <div class="col-12">
              <div class="card wizard-content">
                  <div class="card-body">
                      <h4 class="card-title">Tambah Agen</h4>
                      <?php echo form_open('agen/save_add_agen','id="form-wizard" method="post" class="validation-wizard wizard-circle"'); ?>
                          <!-- Step 1 -->
                          <h6>Step 1 - Data Pribadi</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Name : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama" maxlength="50"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Nomor KTP : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nomor_ktp" maxlength="16"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Nomor NPWP : </label>
                                          <input type="text" class="form-control" name="nomor_npwp" maxlength="16"> </div>
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
                                          <input type="text" class="form-control required" name="tempat_lahir" maxlength="30"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Tanggal Lahir : <span class="danger">*</span> </label>
                                          <input type="date" class="form-control required" name="tanggal_lahir"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kewarganegaraan : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="kewarganegaraan" value="Indonesia"> </div>
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
                                          <input type="email" class="form-control required" name="email_personal_agen"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nomor Telepon :</label>
                                          <input type="tel" class="form-control required" name="nomor_telepon_personal_agen"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat :</label>
                                          <textarea name="alamat_personal_agen" rows="5" class="form-control required"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi :</label>
                                          <input type="text" class="form-control required" name="provinsi_personal_agen"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota :</label>
                                          <input type="text" class="form-control required" name="kota_personal_agen"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan :</label>
                                          <input type="text" class="form-control required" name="kecamatan_personal_agen"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan :</label>
                                          <input type="text" class="form-control required" name="kelurahan_personal_agen"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos :</label>
                                          <input type="text" class="form-control required" name="kode_pos_personal_agen"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 2 -->
                          <h6>Step 2 - Data Usaha</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label> Name Usaha : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_usaha" maxlength="50"> </div>
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
                                          <input type="email" class="form-control required" name="email_usaha"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Nomor Telepon Usaha :</label>
                                          <input type="tel" class="form-control required" name="nomor_telepon_usaha"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Tanggal Mulai Usaha : <span class="danger">*</span> </label>
                                          <input type="date" class="form-control required" name="tanggal_mulai_usaha"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Penghasilan Pertahun :</label>
                                          <input type="text" class="form-control required" name="penghasil_pertahun"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat Usaha :</label>
                                          <textarea name="alamat_usaha" rows="5" class="form-control required"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi Usaha :</label>
                                          <input type="text" class="form-control required" name="provinsi_usaha"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota Usaha :</label>
                                          <input type="text" class="form-control required" name="kota_usaha"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan Usaha :</label>
                                          <input type="text" class="form-control required" name="kecamatan_usaha"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan Usaha :</label>
                                          <input type="text" class="form-control required" name="kelurahan_usaha"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos Usaha :</label>
                                          <input type="text" class="form-control required" name="kode_pos_usaha"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 3 -->
                          <h6>Step 3 - Data Rekening</h6>
                          <section>
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
                                          <input type="text" class="form-control required" name="nomor_rekening"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Nama Pemilik Rekening : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_pemilik_rekening"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Cabang Terdekat : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="cabang_terdekat"> </div>
                                  </div>
                              </div>
                          </section>
                          <!-- Step 4 -->
                          <h6>Step 4 - Data Keagenan</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Name Keagenan : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_keagenan" maxlength="50"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Wilayah Operasional : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="wilayah_operasional"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Longitude : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="longitude"> </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label> Latitude : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="latitude"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nama Virtual Account : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nama_virtual_account"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Nomor Virtual Account :<span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="nomor_virtual_account"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Alamat Keagenan :</label>
                                          <textarea name="alamat_agen" rows="5" class="form-control required"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Provinsi Keagenan :</label>
                                          <input type="text" class="form-control required" name="provinsi_agen"> </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kota Keagenan :</label>
                                          <input type="text" class="form-control required" name="kota_agen"> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kecamatan Keagenan :</label>
                                          <input type="text" class="form-control required" name="kecamatan_agen"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kelurahan Keagenan :</label>
                                          <input type="text" class="form-control required" name="kelurahan_agen"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Kode Pos Keagenan :</label>
                                          <input type="text" class="form-control required" name="kode_pos_agen"> </div>
                                  </div>
                              </div>
                          </section>
  									<?php echo form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Add Agen -->
      <!-- ============================================================== -->
			<!-- Row -->
			<div class="row">
				<!-- Column -->
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Data Agen</h4>
											<h6 class="card-subtitle">List data Agen</h6>
											<div class="table-responsive m-t-40">
												<!-- NOTIF -->
												<?php
												$message_sukses = $this->session->flashdata('notif-sukses');
												if($message_sukses){
													echo '<p class="alert alert-success text-center">'.$message_sukses .'</p>';
												}
												$message_gagal = $this->session->flashdata('notif-gagal');
												if($message_gagal){
													echo '<p class="alert alert-danger text-center">'.$message_gagal .'</p>';
												}
												?>
                        <button class="btn btn-success text-white" onclick="myFunction()">Tambah Agen</button>
												<table id="tableData" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
														<tr>
                              <th>No.</th>
  														<th>Kode Agen</th>
  														<th>Name Agen</th>
  														<th>Nama Pemilik</th>
  														<th>Nama Toko</th>
  														<th>Wilayah</th>
  														<th>Status</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$no=1;
														if(isset($data_agen)){
															foreach($data_agen as $row){
													?>
														<tr>
															<td><?php echo $no++; ?></td>
    														<td><a href="<?php echo site_url('agen/manage_agen/'.$row->kode_agen)?>"><u><?php echo $row->kode_agen; ?></u></a></td>
    														<td><?php echo $row->nama_keagenan; ?></td>
    														<td><?php echo $row->nama; ?></td>
    														<td><?php echo $row->nama_usaha; ?></td>
    														<td><?php echo $row->wilayah_operasional; ?></td>
    														<td><?php echo $row->status_agen; ?></td>
														</tr>
													  <?php }	} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- ============================================================== -->
			<!-- End Page Content -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
    </section>
</div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("formAddAgen");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
