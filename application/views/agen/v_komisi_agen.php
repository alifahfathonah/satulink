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
					<h3 class="text-themecolor">Komisi Agen</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Agen</a></li>
						<li class="breadcrumb-item active">List Komisi Agen</li>
					</ol>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Start Page Content -->
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
											<h4 class="card-title">Komisi Agen</h4>
											<h6 class="card-subtitle">List Komisi Agen</h6>
											<div class="table-responsive m-t-40">
                        <table id="tableData" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
														<tr>
                              <th>No.</th>
  														<th>Nomor Referensi</th>
  														<th>Tanggal Transaksi</th>
  														<th>Jenis Transaksi</th>
  														<th>Kode Agen</th>
  														<th>Nama Keagenan</th>
  														<th>Nomor Rekening</th>
  														<th>Nominal Rekening</th>
  														<th>Status Transaksi</th>
  														<th>Komisi</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$no=1;
														if(isset($data_komisi_agen)){
															foreach($data_komisi_agen as $row){
													?>
														<tr>
															<td><?php echo $no++; ?></td>
    														<td><?php echo $row->nomor_referensi; ?></u></a></td>
    														<td><?php echo $row->tanggal_transaksi; ?></td>
    														<td><?php echo $row->jenis_transaksi; ?></td>
    														<td><?php echo $row->kode_agen; ?></td>
    														<td><?php echo $row->nama_keagenan; ?></td>
    														<td><?php echo $row->nomor_rekening; ?></td>
    														<td><?php echo $row->nominal_transaksi; ?></td>
    														<td><?php echo $row->status_transaksi; ?></td>
    														<td><?php echo $row->komisi; ?></td>
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
