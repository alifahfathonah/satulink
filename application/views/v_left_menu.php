<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <!--<div class="user-profile" style="background: url(<?php echo base_url('assets/assets/images/background/profile-bg.jpg')?>) no-repeat;">-->
        <div class="user-profile">
            <!-- User profile image -->
            <!--<div class="profile-img"> <img src="<?php echo base_url('assets/assets/images/users/avatar.png')?>" alt="user" /> </div>-->
            <!-- User profile text-->
            <div class="profile-text"><a><?php echo $this->session->userdata('USERNAME') ?></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="has-arrow waves-effect waves-dark " href="<?php echo base_url(); ?>dashboard/" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Agen</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>agen/">List Agen</a></li>
                        <li><a href="<?php echo base_url(); ?>agen/transaksi_agen">Transaksi Agen</a></li>
                        <li><a href="<?php echo base_url(); ?>agen/komisi_agen">Komisi Agen</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Nasabah</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>nasabah/">List Nasabah</a></li>
                        <li><a href="<?php echo base_url(); ?>nasabah/transaksi_nasabah">Transaksi Nasabah</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="<?php echo base_url(); ?>user/" aria-expanded="false"><i class="fa fa-user-o"></i><span class="hide-menu">User</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark " href="<?php echo base_url(); ?>pengaturan/" aria-expanded="false"><i class="fa fa-gear"></i><span class="hide-menu">Pengaturan</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation-->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
