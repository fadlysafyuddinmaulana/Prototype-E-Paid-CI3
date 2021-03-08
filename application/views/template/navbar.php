<?php
$user = $this->session->userdata('server_spp');

if ($user['level'] == 'petugas') {
    $this->load->view('template/sidebar_petugas');
} else if ($user['level'] == 'admin') {
    $this->load->view('template/sidebar_admin');
} else {
    $this->load->view('template/sidebar_siswa');
} ?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->