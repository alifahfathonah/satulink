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
					<h3 class="text-themecolor">Nasabah Management</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Nasabah</a></li>
						<li class="breadcrumb-item active">List Nasabah</li>
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
											<h4 class="card-title">Data Nasabah</h4>
											<h6 class="card-subtitle">List data Nasabah</h6>
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
												<table id="tableData" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
														<tr>
                              <th>No.</th>
  														<th>Kode Nasabah</th>
  														<th>Nomor Rekening</th>
  														<th>Nama</th>
  														<th>Nomor KTP</th>
  														<th>Jenis Nasabah</th>
  														<th>Status Nasabah</th>
  														<th>Saldo Nasabah</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$no=1;
														if(isset($data_nasabah)){
															foreach($data_nasabah as $row){
													?>
														<tr>
															<td><?php echo $no++; ?></td>
    														<td><a href="<?php echo site_url('nasabah/manage_nasabah/'.$row->kode_nasabah)?>"><u><?php echo $row->kode_nasabah; ?></u></a></td>
    														<td><?php echo $row->nomor_rekening; ?></td>
    														<td><?php echo $row->nama; ?></td>
    														<td><?php echo $row->nomor_ktp; ?></td>
    														<td><?php echo $row->jenis_nasabah; ?></td>
    														<td><?php echo $row->status_nasabah; ?></td>
    														<td><?php echo $row->saldo_nasabah; ?></td>
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
