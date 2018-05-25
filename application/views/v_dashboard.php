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
					<h3 class="text-themecolor">Dashboard</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-lg-12">
          <div class="card">
              <div class="card-body little-profile text-center">
                  <h3 class="m-b-0">Total Transaksi Hari Ini</h3>
                  <div class="row text-center m-t-20">
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_pembukaan_rekening_hari_ini; ?></h3><small>Pembukaan Rekening</small></div>
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_penutupan_rekening_hari_ini; ?></h3><small>Penutupan Rekening</small></div>
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_setor_tunai_hari_ini; ?></h3><small>Setor Tunai</small></div>
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_tarik_tunai_hari_ini; ?></h3><small>Tarik Tunai</small></div>
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_transfer_hari_ini; ?></h3><small>Transfer</small></div>
                      <div class="col-lg-2">
                          <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi_hari_ini; ?></h3><small>Total</small></div>
                  </div>
              </div>
          </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="ti-signal"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light"><?php echo $jumlah_agen; ?></h3>
                            <h5 class="text-muted m-b-0">Total Agen</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="ti-user"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light"><?php echo $jumlah_nasabah; ?></h3>
                            <h5 class="text-muted m-b-0">Total Nasabah</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="ti-stats-up"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light"><?php echo $jumlah_transaksi; ?></h3>
                            <h5 class="text-muted m-b-0">Total Transaksi</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Rp.
                              <?php foreach ($jumlah_dana_nasabah as $dana_nasabah) {
                              $jdana_nasabah=number_format($dana_nasabah->saldo_nasabah,0);
                              echo $jdana_nasabah;
                              } ?>
                            </h3>
                            <h5 class="text-muted m-b-0">Total Dana Nasabah</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Rp.
                              <?php foreach ($jumlah_dana_agen as $dana_agen) {
                                $jdana_agen=number_format($dana_agen->saldo_agen,0);
                                echo $jdana_agen;
                              } ?>
                            </h3>
                            <h5 class="text-muted m-b-0">Total Dana Agen</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
			<!-- ============================================================== -->
			<!-- Start Page Content -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
    </section>
</div>
</body>
