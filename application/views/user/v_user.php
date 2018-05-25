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
					<h3 class="text-themecolor">User Management</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
						<li class="breadcrumb-item active">List User</li>
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
      <div class="row" id="formAddUser" style="display:none;">
          <div class="col-12">
              <div class="card wizard-content">
                  <div class="card-body">
                      <h4 class="card-title">Tambah User</h4>
                      <?php echo form_open('user/save_add_user','id="form-wizard" method="post" class="validation-wizard wizard-circle"'); ?>
                          <!-- Step 1 -->
                          <h6>Step 1 - Data User</h6>
                          <section>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Username : <span class="danger">*</span> </label>
                                          <input type="text" class="form-control required" name="username" maxlength="10"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Password : <span class="danger">*</span> </label>
                                          <input type="password" class="form-control required" name="password"> </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label> Tipe User : <span class="danger">*</span> </label>
                                          <select class="custom-select form-control required" name="tipe_user">
                                              <option value="">Tipe User</option>
                                              <option value="1">Admin</option>
                                              <option value="2">User</option>
                                          </select>
                                      </div>
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
											<h4 class="card-title">Data User</h4>
											<h6 class="card-subtitle">List data User</h6>
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
                        <button class="btn btn-success text-white" onclick="myFunction()">Tambah User</button>
												<table id="tableData" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
														<tr>
                              <th>No.</th>
  														<th>Kode User</th>
  														<th>Username</th>
  														<th>Tipe User</th>
  														<th>Isactive</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$no=1;
														if(isset($data_user)){
															foreach($data_user as $row){
													?>
														<tr>
															<td><?php echo $no++; ?></td>
    														<td><a href="<?php echo site_url('user/manage_user/'.$row->kode_user)?>"><u><?php echo $row->kode_user; ?></u></a></td>
    														<td><?php echo $row->username; ?></td>
    														<td><?php echo $row->tipe_user; ?></td>
    														<td><?php echo $row->isactive; ?></td>
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
    var x = document.getElementById("formAddUser");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
