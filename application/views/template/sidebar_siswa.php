<?php
$user = $this->session->userdata('server_spp');

$nama = $user['nama'];

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>dashboard-admin" class="brand-link">
        <img src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="<?= base_url() ?>dashboard-admin" class="d-block"><?= $nama; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashboard-siswa" class="nav-link  <?php if ($aktif == 'dashboard') {
                                                                                        echo "active";
                                                                                    } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>history" class="nav-link  <?php if ($aktif == 'history') {
                                                                            echo "active";
                                                                        } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>History</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
        <a href="<?= base_url() ?>logout" class=" btn btn-secondary pos-right"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
    </div>
    <!-- /.sidebar-custom -->
</aside>